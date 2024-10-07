<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admira - Bootstrap Admin HTML Template</title>

    <!--Stylesheets-->
    <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/plugins/datatable/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/plugins/datatable/bootstrap-table.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">

      <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</head>

<body>

    <!--Logo Area Start-->
    <div class="logo-area">
        <div class="logo bg-primary text-white">
            <a href="{{ route('admin.dashboard') }}">AA<span>SAO</span></a>
        </div>
        <div class="menu-icon bg-primary text-white">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <!--Logo Area End-->

    <!--Sidebar Start-->
    @include('backend.admin.layout.sidebar')

    <!--Sidebar End-->

    <!--Header Start-->
    @include('backend.admin.layout.top-nabvar')
    <!--Header End-->

    <!--Main Body Start-->
    @yield('content')
    <!--Main Body End-->

    <!--Javascripts-->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/chart/chart.min.js') }}"></script>

    <!-- <script src="{{ asset('backend/js/plugins/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins/datatable/initiate.js') }}"></script> -->

    <script src="{{ asset('backend/js/custom.js') }}"></script>

    <script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script>
        new Chart(document.getElementById('chart1'), {
            type: 'doughnut',
            data: {
                labels: [
                    'Dark',
                    'Danger',
                    'Warning',
                    'Success',
                    'Primary',
                    'Info'
                ],
                datasets: [{
                    label: 'Dataset 1',
                    data: [200, 150, 100, 320, 180, 220],
                    backgroundColor: [
                        '#212529',
                        '#dc3545',
                        '#ffc107',
                        '#198754',
                        '#0d6efd',
                        '#0dcaf0'
                    ]
                }]
            },
            options: {
                responsive: true,

                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            },
        });

        new Chart(document.getElementById('chart2'), {
            type: 'line',
            data: {
                labels: [
                    'Jan',
                    'Feb',
                    'March',
                    'April',
                    'May',
                    'Jun',
                    'July',
                    'Auguest',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ],
                datasets: [
                    {
                        label: 'Down',
                        data: [50, 125, 100, 75, 200, 175, 150, 275, 250, 225, 300, 290],
                        backgroundColor: [
                            '#DC3545',
                        ],
                        hoverOffset: 4,
                        borderColor : '#DC3545'
                    },
                    {
                        label: 'Up',
                        data: [50, 120, 70, 90, 175, 300, 200, 150, 90, 300, 190, 225],
                        backgroundColor: [
                            '#28A745'
                        ],
                        hoverOffset: 4,
                        borderColor: '#28A745'
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                },
                layout: {
                    padding: 20
                },
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 1,
                        to: 0,
                        loop: true
                    }
                }
            },
        });
    </script>


    <script>
        toastr.options = {
            "closeButton": true, // Add a close button
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right", // Position the toast
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000", // Duration before auto hide
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

    </script>
    
</body>

</html>
