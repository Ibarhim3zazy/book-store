<!DOCTYPE html>
<html lang="en">

@include('dashboard.partials.head')

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        @include('dashboard.partials.header')

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            @include('dashboard.partials.sidebar')

            @include('dashboard.partials.friend-list-sidebar')

            <div class="page-body">

                @include('dashboard.partials.fluid')


                @yield('content')

            </div>

            @include('dashboard.partials.footer')
        </div>
    </div>

    @include('dashboard.partials.scripts')
</body>

</html>