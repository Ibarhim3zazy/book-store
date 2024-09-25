<?php

namespace App\Http\Controllers\Admin;

use App\Models\Merchant;
use App\Traits\FileTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreMerchantRequest;
use App\Http\Requests\UpdateMerchantRequest;

class MerchantController extends Controller
{
    
    use FileTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merchants = Merchant::orderBy('id', 'desc')->paginate(10);
        return view('admin.dashboard.merchants.index', compact(['merchants']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dashboard.merchants.create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMerchantRequest $request)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $data['image'] = $data['image'] = $this->fileStore($data['image'], 'merchants/profile', $data['name']);
        }
        $data['password'] = Hash::make($data['password']);
        Merchant::create($data);
        return redirect()->route('admin.dashboard.merchants.create')->with('status', 'merchant has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Merchant $merchant)
    {
        return view('admin.dashboard.merchants.show-user', compact('merchant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merchant $merchant)
    {
        return view('admin.dashboard.merchants.edit-user', compact('merchant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMerchantRequest $request, Merchant $merchant)
    {
        $data = $request->validated();
        if (!(Hash::check($data['oldPassword'], Merchant::find($merchant->id)->password)) && isset($data['password'])) {
        return redirect()->route('admin.dashboard.merchants.edit', $merchant)->with('dangerStatus', 'Password does not match Please fill the old password field correctly');
        }
        if (isset($data['image'])) {
            $oldImageName = $merchant->image;
            $data['image'] = $this->fileUpdate($data['image'], 'merchants/profile', $oldImageName, $data['name']);
        }
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        } 
        $merchant->update($data);
        return redirect()->route('admin.dashboard.merchants.edit', $merchant)->with('status', 'merchant has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merchant $merchant)
    {
        $this->fileDelete("merchants/profile", $merchant->image);
        $merchant->delete($merchant);
        return redirect()->route('admin.dashboard.merchants.index', $merchant)->with('status', 'merchant has been deleted successfully.');
    }
}
