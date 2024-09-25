<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use App\Models\Merchant;
use App\Traits\FileTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{

    use FileTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('admin.dashboard.users.index', compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dashboard.users.create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $data['image'] = $data['image'] = $this->fileStore($data['image'], 'users/profile', $data['name']);
        }
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('admin.dashboard.users.create')->with('status', 'user has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.dashboard.users.show-user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.dashboard.users.edit-user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        if (!(Hash::check($data['oldPassword'], User::find($user->id)->password)) && isset($data['password'])) {
        return redirect()->route('admin.dashboard.users.edit', $user)->with('dangerStatus', 'Password does not match Please fill the old password field correctly');
        }
        if (isset($data['image'])) {
            $oldImageName = $user->image;
            $data['image'] = $this->fileUpdate($data['image'], 'users/profile', $oldImageName, $data['name']);
        }
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        } 
        $user->update($data);
        return redirect()->route('admin.dashboard.users.edit', $user)->with('status', 'user has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->fileDelete("users/profile", $user->image);
        $user->delete($user);
        return redirect()->route('admin.dashboard.users.index', $user)->with('status', 'user has been deleted successfully.');
    }
}
