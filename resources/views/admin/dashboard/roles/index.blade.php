@extends('admin.dashboard.master')

@section('title', 'Dashboard | Roles List')

@section('fluid-title', 'Roles List')

@section('fluid-content')
<li class="breadcrumb-item">Roles</li>
<li class="breadcrumb-item active">Roles List</li>
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
            <a href="{{ route('admin.dashboard.roles.create') }}" class="btn btn-primary mt-md-0 mt-2">Create New
                Role</a>
        </div>

        <div class="card-body">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="table-responsive table-desi">
                <table class="all-package coupon-table table table-striped">
                    <thead>
                        <tr>
                            @if ($roles->count() !== 0)
                            <th width="15%">
                                <button type="button" class="btn btn-primary add-row delete_all">Delete</button>
                            </th>
                            @endif
                            <th class="text-start">Role</th>
                            <th width="20%">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($roles->count() === 0) <tr data-row-id="1">
                            <td colspan="100%" class="text-center text-danger">No Data Found</td>
                        </tr>
                        @else
                        @foreach ($roles as $role) <tr data-row-id="1">
                            <td>
                                <input class="checkbox_animated check-it" type="checkbox" value="" id="flexCheckDefault"
                                    data-id="1">
                            </td>
                            <td class="text-start">{{ $role->name }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('admin.dashboard.roles.edit', $role) }}"><i
                                            class="fa fa-edit m-1 text-success"></i></a>
                                    <a href="javascript:$('#delete-role-form-{{ $role->slug }}').submit();"><i
                                            class="fa fa-trash m-1 text-danger"></i></a>
                                    <form action="{{ route('admin.dashboard.roles.destroy', $role) }}"
                                        id="delete-role-form-{{ $role->slug }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="{{ route('admin.dashboard.roles.show', $role) }}"><i
                                            class="fa fa-eye m-1 text-primary"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
        {{ $roles->links('pagination::bootstrap-5') }}
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection