@extends('admin.dashboard.master')

@section('title', 'Dashboard | Create User')

@section('fluid-title', 'Create User')

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                href="#account" role="tab" aria-controls="account" aria-selected="true"
                                data-original-title="" title="">Account</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel"
                            aria-labelledby="account-tab">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form class="needs-validation user-add" method="POST"
                                action="{{ route('admin.dashboard.users.store') }}" novalidate=""
                                enctype="multipart/form-data">
                                @csrf
                                <h4>Account Details</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                        User Name</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="name" value="{{ old('name') }}"
                                            id="validationCustom0" type="text" required="">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        Email</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="email" value="{{ old('email') }}"
                                            id="validationCustom2" type="text" required="">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        Phone</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="phone" value="{{ old('phone') }}"
                                            id="validationCustom2" type="text" required=""
                                            pattern="^01([1-2]|5)[0-9]{8}$">
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        Address</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="address" value="{{ old('address') }}"
                                            id="validationCustom2" type="text" required="">
                                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        City</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="city" value="{{ old('city') }}"
                                            id="validationCustom2" type="text" required="">
                                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        State</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="state" value="{{ old('state') }}"
                                            id="validationCustom2" type="text" required="">
                                        <x-input-error :messages="$errors->get('state')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        Country</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="country" value="{{ old('country') }}"
                                            id="validationCustom2" type="text" required="">
                                        <x-input-error :messages="$errors->get('country')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        Postal Code</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="postal_code" value="{{ old('postal_code') }}"
                                            id="validationCustom2" type="text" required="">
                                        <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span></span>
                                        Location</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="location" value="{{ old('location') }}"
                                            id="validationCustom2" type="text" required="">
                                        <x-input-error :messages="$errors->get('location')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        Gender</label>
                                    <div class="col-xl-8 col-md-7">
                                        <select class="form-control" name="gender" id="">
                                            <option value="">Select</option>
                                            <option value="male" {{ old('male')=='male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="female" {{ old('female')=='female' ? 'selected' : '' }}>
                                                Female</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        Image</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="image" value="{{ old('image') }}"
                                            id="validationCustom2" type="file" required="">
                                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>
                                        Date Of Birth</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="date_of_birth"
                                            value="{{ old('date_of_birth') }}" id="validationCustom2" type="date"
                                            required="">
                                        <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom3" class="col-xl-3 col-md-4"><span>*</span>
                                        Password</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="password" id="validationCustom3"
                                            type="password" required="">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span> Confirm
                                        Password</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="password_confirmation" id="validationCustom4"
                                            type="password" required="">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection