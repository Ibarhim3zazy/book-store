<!DOCTYPE html>
<html lang="en">

@include('admin.auth.partials.head')

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="authentication-box">
            <div class="container">
                <div class="row">

                    @include('admin.auth.partials.card-left')


                    <div class="col-md-7 p-0 card-right">
                        <div class="card tab2-card card-login">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <a href="javascript:" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>back</a>
            </div>
        </div>
    </div>

    @include('admin.auth.partials.scripts')

</body>

</html>