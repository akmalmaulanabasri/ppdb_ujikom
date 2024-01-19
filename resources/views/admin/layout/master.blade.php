<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>DASHBOARD ADMIN - PPDB</title>
    <link rel="stylesheet" href="{{ asset('stisla') }}/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('stisla') }}/assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('stisla') }}/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="{{ asset('stisla') }}/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="{{ asset('stisla') }}/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="{{ asset('stisla') }}/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('stisla') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('stisla') }}/assets/css/components.css">
    <script src="https://kit.fontawesome.com/63b23d6412.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/63b23d6412.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg bg-danger"></div>

            @include('admin.layout.navbar')
            @include('admin.layout.sidebar')
            @yield('admin.dashboard')

            <footer class="main-footer">
                <div class="footer-left">
                    SMKWIKRAMABOGOR @AKMALMAULANA
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('stisla') }}/assets/modules/jquery.min.js"></script>
    <script src="{{ asset('stisla') }}/assets/modules/popper.js"></script>
    <script src="{{ asset('stisla') }}/assets/modules/tooltip.js"></script>
    <script src="{{ asset('stisla') }}/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('stisla') }}/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('stisla') }}/assets/modules/moment.min.js"></script>
    <script src="{{ asset('stisla') }}/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('stisla') }}/assets/modules/jquery.sparkline.min.js"></script>
    <script src="{{ asset('stisla') }}/assets/modules/chart.min.js"></script>
    <script src="{{ asset('stisla') }}/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="{{ asset('stisla') }}/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="{{ asset('stisla') }}/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('stisla') }}/assets/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="{{ asset('stisla') }}/assets/js/scripts.js"></script>
    <script src="{{ asset('stisla') }}/assets/js/custom.js"></script>
</body>

</html>
