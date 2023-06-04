<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Pasarpedia</title>
    <!-- chartist CSS -->
    <link href="{{asset('../../assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <link href="{{asset('../../dist/css/style.css') }}" rel="stylesheet">
    <!-- This page CSS -->
    <link href="{{asset('../../dist/css/pages/dashboard1.css') }}" rel="stylesheet">

</head>

<body>
    <div class="main-wrapper" id="main-wrapper">

        <header class="topbar">
            @include('produk.components.navbar')
        </header>
        @include('produk.components.sidebar')
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col l3 m6 s12">
                        <div class="card danger-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">{{ $countToko }}</h2>
                                        <h6 class="white-text op-5 light-blue-text">Total Toko</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')


            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('../../assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('../../dist/js/materialize.min.js') }}"></script>
    <script src="{{ asset('../../assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="{{ asset('../../dist/js/app.js') }}"></script>
    <script src="{{ asset('../../dist/js/app.init.js') }}"></script>
    <script src="{{ asset('../../dist/js/app-style-switcher.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="{{ asset('../../dist/js/custom.min.js') }}"></script>

</body>

</html>