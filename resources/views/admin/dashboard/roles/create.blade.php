@extends('admin.dashboard.master')

@section('title', 'Dashboard | Create Role')

@section('fluid-title', 'Create Role')

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
                                data-original-title="" title="">Roles</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel"
                            aria-labelledby="account-tab">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form class="needs-validation user-add" method="POST"
                                action="{{ route('admin.dashboard.roles.store') }}" novalidate=""
                                enctype="multipart/form-data">
                                @csrf
                                <h4>Role Details</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>
                                        Role Name</label>
                                    <div class="col-xl-8 col-md-7">
                                        <input class="form-control" name="name" value="{{ old('name') }}"
                                            id="validationCustom0" type="text" required="">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="permission-block">
                                    <x-Show-permission-block :permissions="$permissions" category="Admin" />
                                    <x-Show-permission-block :permissions="$permissions" category="Merchant" />
                                    <x-Show-permission-block :permissions="$permissions" category="User" />
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