<!DOCTYPE html>
<html lang="en">

@include('admin.dashboard.partials.head')

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        @include('admin.dashboard.partials.header')

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            @include('admin.dashboard.partials.sidebar')

            @include('admin.dashboard.partials.friend-list-sidebar')

            <div class="page-body">

                @include('admin.dashboard.partials.fluid')


                @yield('content')

            </div>

            @include('admin.dashboard.partials.footer')
        </div>
    </div>

    @include('admin.dashboard.partials.scripts')
</body>

</html>