<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> Admin</title>


        <!-- Custom fonts for this template-->
        <link href="{{url('css/all.min.css')}}" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
        
        
        <!-- Custom styles for this template-->
        <link href="{{url('css/admin.css')}}" rel="stylesheet">
    </head>
    <body id="page-top">


        <!-- Page Wrapper -->
        <div id="wrapper">
            @include('admin.partials.sidebar')
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <header  style="background-image: url('/jpg/website/image1.png'); background-position: center; background-size: cover; min-height:600px;">
                    @include('admin.partials.header')
                    @yield('contents')
                    
                </div>
            </div>
        </div>
        <!-- Footer -->
        @include('admin.partials.footer')
        <!-- End of Footer -->
        <!-- Bootstrap core JavaScript-->
        <script src="{{url('js/jquery.min.js')}}"></script>
        <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{url('js/jquery.easing.min.js')}}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{url('js/all.min.js')}}"></script>
        <!-- Page level plugins -->
        <script src="{{url('js/Chart.min.js')}}"></script>
        <!-- Page level custom scripts -->
        <script src="{{url('js/chart-area-demo.js')}}"></script>
        <script src="{{url('js/chart-pie-demo.js')}}"></script>
    </body>
</html>