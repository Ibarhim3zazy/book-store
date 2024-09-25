<!DOCTYPE html>
<html lang="en">

@include('merchant.dashboard.partials.head')

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        @include('merchant.dashboard.partials.header')

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            @include('merchant.dashboard.partials.sidebar')

            @include('merchant.dashboard.partials.friend-list-sidebar')

            <div class="page-body">

                @include('merchant.dashboard.partials.fluid')


                @yield('content')

            </div>

            @include('merchant.dashboard.partials.footer')
        </div>
    </div>

    @include('merchant.dashboard.partials.scripts')
</body>

</html>