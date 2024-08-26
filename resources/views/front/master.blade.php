<!DOCTYPE html>
<html lang="en">

@include('front.partials.head')

<body class="theme-color-27">


    @include('front.partials.loader')


    @include('front.partials.header')


    @yield('content')


    @include('front.partials.footer')


    @include('front.partials.modal-popup')


    @include('front.partials.quick-view-modal-popup')


    @include('front.partials.tap-to-top')


    @include('front.partials.scripts')

</body>

</html>