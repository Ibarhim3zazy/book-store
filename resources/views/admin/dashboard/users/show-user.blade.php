@extends('admin.dashboard.master')

@section('title', 'Dashboard | Show User')

@section('fluid-title', 'Show User')

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-details text-center">
                        <img src="{{ getFileUrl('users/profile', $user->image) }}" alt=""
                            class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                        <h5 class="f-w-600 mb-0">{{ $user->name }}</h5>
                        <span>{{ $user->email }}</span>
                        <div class="social">
                            <div class="form-group btn-showcase">
                                <button class="btn social-btn btn-fb d-inline-block"> <i
                                        class="fa fa-facebook"></i></button>
                                <button class="btn social-btn btn-twitter d-inline-block"><i
                                        class="fa fa-google"></i></button>
                                <button class="btn social-btn btn-google d-inline-block me-0"><i
                                        class="fa fa-twitter"></i></button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="project-status">
                        <h5 class="f-w-600">Employee Status</h5>
                        <div class="media">
                            <div class="media-body">
                                <h6>Performance<span class="pull-right">80%</span></h6>
                                <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6>Overtime <span class="pull-right">60%</span></h6>
                                <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 60%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6>Leaves taken<span class="pull-right">70%</span></h6>
                                <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card tab2-card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab"
                                href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i
                                    data-feather="user" class="me-2"></i>Profile</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i
                                    data-feather="settings" class="me-2"></i>Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-profile" role="tabpanel"
                            aria-labelledby="top-profile-tab">
                            <h5 class="f-w-600">Profile</h5>
                            <div class="table-responsive profile-table">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>Name:</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td>{{ $user->gender }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mobile Number:</td>
                                            <td>{{ $user->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>DOB:</td>
                                            <td>{{ $user->date_of_birth }}</td>
                                        </tr>
                                        <tr>
                                            <td>Location:</td>
                                            <td>{{ $user->address }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                            <div class="account-setting">
                                <h5 class="f-w-600">Notifications</h5>
                                <div class="row">
                                    <div class="col">
                                        <label class="d-block" for="chk-ani">
                                            <input class="checkbox_animated" id="chk-ani" type="checkbox">
                                            Allow Desktop Notifications
                                        </label>
                                        <label class="d-block" for="chk-ani1">
                                            <input class="checkbox_animated" id="chk-ani1" type="checkbox">
                                            Enable Notifications
                                        </label>
                                        <label class="d-block" for="chk-ani2">
                                            <input class="checkbox_animated" id="chk-ani2" type="checkbox">
                                            Get notification for my own activity
                                        </label>
                                        <label class="d-block mb-0" for="chk-ani3">
                                            <input class="checkbox_animated" id="chk-ani3" type="checkbox" checked="">
                                            DND
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="account-setting deactivate-account">
                                <h5 class="f-w-600">Deactivate Account</h5>
                                <div class="row">
                                    <div class="col">
                                        <label class="d-block" for="edo-ani">
                                            <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani"
                                                checked="">
                                            I have a privacy concern
                                        </label>
                                        <label class="d-block" for="edo-ani1">
                                            <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">
                                            This is temporary
                                        </label>
                                        <label class="d-block mb-0" for="edo-ani2">
                                            <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani"
                                                checked="">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Deactivate
                                    Account</button>
                            </div>
                            <div class="account-setting deactivate-account">
                                <h5 class="f-w-600">Delete Account</h5>
                                <div class="row">
                                    <div class="col">
                                        <label class="d-block" for="edo-ani3">
                                            <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani1"
                                                checked="">
                                            No longer usable
                                        </label>
                                        <label class="d-block" for="edo-ani4">
                                            <input class="radio_animated" id="edo-ani4" type="radio" name="rdo-ani1">
                                            Want to switch on other account
                                        </label>
                                        <label class="d-block mb-0" for="edo-ani5">
                                            <input class="radio_animated" id="edo-ani5" type="radio" name="rdo-ani1"
                                                checked="">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Delete Account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection