<!-- latest jquery-->
<script src="{{ asset('assets-front') }}/js/jquery-3.3.1.min.js"></script>

<!-- slick js-->
<script src="{{ asset('assets-front') }}/js/slick.js"></script>
<script src="{{ asset('assets-front') }}/js/slick-animation.min.js"></script>

<!-- menu js-->
<script src="{{ asset('assets-front') }}/js/menu.js"></script>
<script src="{{ asset('assets-front') }}/js/sticky-menu.js"></script>

<!-- ajax search js -->
<script src="{{ asset('assets-front') }}/js/typeahead.bundle.min.js"></script>
<script src="{{ asset('assets-front') }}/js/typeahead.jquery.min.js"></script>
<script src="{{ asset('assets-front') }}/js/ajax-custom.js"></script>

<!-- lazyload js-->
<script src="{{ asset('assets-front') }}/js/lazysizes.min.js"></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets-front') }}/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap Notification js-->
<script src="{{ asset('assets-front') }}/js/bootstrap-notify.min.js"></script>

<!-- Theme js-->
<script src="{{ asset('assets-front') }}/js/theme-setting.js"></script>
<script src="{{ asset('assets-front') }}/js/script.js"></script>
<script src="{{ asset('assets-front') }}/js/color-setting.js"></script>
<script src="{{ asset('assets-front') }}/js/custom-slick-animated.js"></script>


<script>
    $(window).on('load', function () {
        setTimeout(function () {
            $('#exampleModal').modal('show');
        }, 2500);
    });

    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>