<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from preclinic.dreamstechnologies.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2023 16:15:06 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="base-url" content="{{ url('/') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/public/dasassets/img/logo.png">
    <title>{{ __('RNMC-Hospital || ') }}{{ $title }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/dasassets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/public/dasassets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/dasassets/plugins/fontawesome/css/all.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/dasassets/css/select2.min.css">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/public/dasassets/plugins/datatables/datatables.min.css">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/public/dasassets/css/bootstrap-datetimepicker.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/public/dasassets/plugins/feather/feather.css">


    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/public/dasassets/css/style.css">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>

<body>
    <div class="main-wrapper">
        @include('elements.adminnavbar')
        <div class="page-wrapper">
            @yield('content')

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

    <!-- jQuery -->
    {{-- <script src="{{ url('/') }}/public/dasassets/js/jquery-3.6.1.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{ url('/') }}/public/dasassets/js/bootstrap.bundle.min.js"></script>

    <!-- Feather Js -->
    <script src="{{ url('/') }}/public/dasassets/js/feather.min.js"></script>

    <!-- Slimscroll -->
    <script src="{{ url('/') }}/public/dasassets/js/jquery.slimscroll.js"></script>

    <!-- Select2 Js -->
    <script src="{{ url('/') }}/public/dasassets/js/select2.min.js"></script>

    <!-- Datatables JS -->
    <script src="{{ url('/') }}/public/dasassets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('/') }}/public/dasassets/plugins/datatables/datatables.min.js"></script>

    <!-- counterup JS -->
    <script src="{{ url('/') }}/public/dasassets/js/jquery.waypoints.js"></script>
    <script src="{{ url('/') }}/public/dasassets/js/jquery.counterup.min.js"></script>

    <!-- Apexchart JS -->
    <script src="{{ url('/') }}/public/dasassets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="{{ url('/') }}/public/dasassets/plugins/apexchart/chart-data.js"></script>
    <!-- Datepicker Core JS -->
    <script src="{{ url('/') }}/public/dasassets/plugins/moment/moment.min.js"></script>
    <script src="{{ url('/') }}/public/dasassets/js/bootstrap-datetimepicker.min.js"></script>

    @stack('scripts')
    <!-- Custom JS -->
    <script src="{{ url('/') }}/public/dasassets/js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif
        @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif
        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif
        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
        @if (Session::has('done'))
            toastr.success("{{ Session::get('done') }}");
        @endif
    </script>
    <script>
        document.getElementById('reload-page').addEventListener('click', function(event) {
            event.preventDefault();
            window.location.reload();
        });
    </script>
</body>


<!-- Mirrored from preclinic.dreamstechnologies.com/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2023 16:15:10 GMT -->

</html>
