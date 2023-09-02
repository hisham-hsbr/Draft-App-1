<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('back-end-links/phoenix/public/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('back-end-links/phoenix/public/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('back-end-links/phoenix/public/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('back-end-links/phoenix/public/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('back-end-links/phoenix/public/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage"
        content="{{ asset('back-end-links/phoenix/public/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('back-end-links/phoenix/public/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('back-end-links/phoenix/public/vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('back-end-links/phoenix/public/assets/js/config.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('back-end-links/phoenix/public/vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('back-end-links/phoenix/public/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css') }}">
    <link href="{{ asset('back-end-links/phoenix/public/assets/css/theme-rtl.min.css') }}" type="text/css"
        rel="stylesheet" id="style-rtl">
    <link href="{{ asset('back-end-links/phoenix/public/assets/css/theme.min.css') }}" type="text/css" rel="stylesheet"
        id="style-default">
    <link href="{{ asset('back-end-links/phoenix/public/assets/css/user-rtl.min.css') }}" type="text/css"
        rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('back-end-links/phoenix/public/assets/css/user.min.css') }}" type="text/css" rel="stylesheet"
        id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        <div class="content">
            <h2 class="mb-2 lh-sm">Layout</h2>
            <p class="text-700 lead mb-2">Give your forms some structure—from inline to horizontal to custom grid
                implementations—with our form layout options.</p><a class="btn btn-link p-0"
                href="https://getbootstrap.com/docs/5.2/forms/layout/" target="_blank">Forms Layout on Bootstrap<span
                    class="ms-1" data-feather="chevron-right"></span></a>
            <div class="mt-4">
                <div class="row g-4">
                    <div class="col-12 col-xl-10 order-1 order-xl-0">
                        <div class="mb-9">
                            <div class="card shadow-none border border-300 my-4"
                                data-component-card="data-component-card">
                                <div class="card-header p-4 border-bottom border-300 bg-soft">
                                    <div class="row g-3 justify-content-between align-items-center">
                                        <div class="col-12 col-md">
                                            <h4 class="text-900 mb-0" data-anchor="data-anchor">Form Grid Layout</h4>
                                        </div>
                                        <div class="col col-md-auto">
                                            <nav class="nav nav-underline justify-content-end doc-tab-nav align-items-center"
                                                role="tablist">
                                                <button class="btn btn-link px-2 text-900 copy-code-btn"
                                                    type="button"><span class="fas fa-copy me-1"></span>Copy
                                                    Code</button><a
                                                    class="btn btn-sm btn-phoenix-primary code-btn ms-2"
                                                    data-bs-toggle="collapse" href="#form-grid-layout-code"
                                                    role="button" aria-controls="form-grid-layout-code"
                                                    aria-expanded="false"> <span class="me-2"
                                                        data-feather="code"></span>View code</a><a
                                                    class="btn btn-sm btn-phoenix-primary preview-btn ms-2"><span
                                                        class="me-2" data-feather="eye"></span>Preview</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-4 code-to-copy">
                                        <form class="row g-3">
                                            <div class="col-md-6">

                                                <label class="form-label" for="inputEmail4">Email</label>

                                                <input class="form-control" id="inputEmail4" type="email" />
                                            </div>
                                            <div class="col-md-6">

                                                <label class="form-label" for="inputPassword4">Password</label>

                                                <input class="form-control" id="inputPassword4" type="password" />
                                            </div>
                                            <div class="col-12">

                                                <label class="form-label" for="inputAddress">Address</label>

                                                <input class="form-control" id="inputAddress" type="text"
                                                    placeholder="1234 Main St" />
                                            </div>
                                            <div class="col-12">

                                                <label class="form-label" for="inputAddress2">Address 2</label>

                                                <input class="form-control" id="inputAddress2" type="text"
                                                    placeholder="Apartment, studio, or floor" />
                                            </div>
                                            <div class="col-md-6">

                                                <label class="form-label" for="inputCity">City</label>

                                                <input class="form-control" id="inputCity" type="text" />
                                            </div>
                                            <div class="col-md-4">

                                                <label class="form-label" for="inputState">State</label>

                                                <select class="form-select" id="inputState">
                                                    <option selected="selected">Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">

                                                <label class="form-label" for="inputZip">Zip</label>

                                                <input class="form-control" id="inputZip" type="text" />
                                            </div>
                                            <div class="col-12">

                                                <div class="form-check">

                                                    <input class="form-check-input" id="gridCheck" type="checkbox" />

                                                    <label class="form-check-label" for="gridCheck">Check me
                                                        out</label>
                                                </div>
                                            </div>
                                            <div class="col-12">

                                                <button class="btn btn-primary" type="submit">Sign in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
                <div class="toast align-items-center text-white bg-dark border-0 light" id="icon-copied-toast"
                    role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body p-3"></div>
                        <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute">
                <div class="row g-0 justify-content-between align-items-center h-100">
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span
                                class="d-none d-sm-inline-block"></span><span
                                class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a
                                class="mx-1" href="https://themewagon.com">Themewagon</a></p>
                    </div>
                    <div class="col-12 col-sm-auto text-center">
                        <p class="mb-0 text-600">v1.13.0</p>
                    </div>
                </div>
            </footer>
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

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('back-end-links/phoenix/public/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('back-end-links/phoenix/public/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('back-end-links/phoenix/public/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('back-end-links/phoenix/public/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('back-end-links/phoenix/public/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('back-end-links/phoenix/public/vendors/lodash/lodash.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('back-end-links/phoenix/public/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('back-end-links/phoenix/public/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('back-end-links/phoenix/public/vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('back-end-links/phoenix/public/vendors/prism/prism.js') }}"></script>
    <script src="{{ asset('back-end-links/phoenix/public/assets/js/phoenix.js') }}"></script>

</body>

</html>
