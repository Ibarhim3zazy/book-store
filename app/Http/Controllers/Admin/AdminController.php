<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Admin;
use App\Traits\FileTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{

    use FileTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::orderBy('id', 'desc')->paginate(10);
        return view('admin.dashboard.admins.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::where('guard_name', 'admin')->orderBy('id', 'desc')->get();
        return view('admin.dashboard.admins.create-user', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminRequest $request)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $data['image'] = $data['image'] = $this->fileStore($data['image'], 'admins/profile', $data['name']);
        }
        $data['password'] = Hash::make($data['password']);
        $admin = Admin::create($data);
        $admin->assignRole($data['role']);
        return redirect()->route('admin.dashboard.admins.create')->with('status', 'admin has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        return view('admin.dashboard.admins.show-user', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        $roles = Role::where('guard_name', 'admin')->orderBy('id', 'desc')->get();
        return view('admin.dashboard.admins.edit-user', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        $data = $request->validated();
        if (!(Hash::check($data['oldPassword'], Admin::find($admin->id)->password)) && isset($data['password'])) {
        return redirect()->route('admin.dashboard.admins.edit', $admin)->with('dangerStatus', 'Password does not match Please fill the old password field correctly');
        }
        if (isset($data['image'])) {
            $oldImageName = $admin->image;
            $data['image'] = $this->fileUpdate($data['image'], 'admins/profile', $oldImageName, $data['name']);
        }
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        if (isset($data['role'])) $admin->syncRoles($data['role']);
        $admin->update($data);
        return redirect()->route('admin.dashboard.admins.edit', $admin)->with('status', 'admin has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $this->fileDelete("admins/profile", $admin->image);
        $admin->delete($admin);
        return redirect()->route('admin.dashboard.admins.index', $admin)->with('status', 'admin has been deleted successfully.');
    }
}
