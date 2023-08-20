<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    @include('back-end.layouts.head')
</head>

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        @include('back-end.layouts.side-navbar')

        @include('back-end.layouts.top-navbar')

        {{-- @include('back-end.layouts.top-search-bar') --}}

        <div class="content">

            @include('back-end.layouts.main-content')

            @include('back-end.layouts.footer')

        </div>
        <script>
            var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.classList.add('navbar-darker');
            }

            var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVertical && navbarVerticalStyle === 'darker') {
                navbarVertical.classList.add('navbar-darker');
            }
        </script>

        @include('back-end.layouts.chat')
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    @include('back-end.layouts.settings')

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    @include('back-end.layouts.footer-links')

</body>

</html>
