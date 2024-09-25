@extends('admin.dashboard.master')

@section('title', 'Dashboard | User List')

@section('fluid-title', 'User List')

@section('fluid-content')
<li class="breadcrumb-item">Users</li>
<li class="breadcrumb-item active">User List</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <form class="form-inline search-form search-box">
                <div class="form-group">
                    <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                        class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                </div>
            </form>
            <a href="{{ route('admin.dashboard.users.create') }}" class="btn btn-primary mt-md-0 mt-2">Create User</a>
        </div>

        <div class="card-body">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="table-responsive table-desi">
                <table class="all-package coupon-table table table-striped">
                    <thead>
                        <tr>
                            <th>
                                <button type="button" class="btn btn-primary add-row delete_all">Delete</button>
                            </th>
                            <th>Avtar</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Last Login</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <x-show-table-row :provider="$users" path="admin.dashboard.users" />
                    </tbody>
                </table>

            </div>
        </div>
        {{ $users->links('pagination::bootstrap-5') }}
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection