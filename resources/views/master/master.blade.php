<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('js/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('js/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{asset('js/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
    @yield('header')
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    {{--  menu  --}}
    
    @include('master.menu')
    

    <div class="content-wrapper">
        <div class="container-fluid">
        
        @yield('content')
        
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © Your Website 2018</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bạn muốn đăng xuất?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                    </div>
                    <div class="modal-body">Chọn "Đăng xuất" nếu bạn thực sự muốn thoát phiên làm việc của mình</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy bỏ</button>
                        <a class="btn btn-primary" href="{{url('/logout')}}">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('js/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('js/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{asset('js/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Page level plugin JavaScript-->
        <script src="{{asset('js/vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('js/vendor/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{asset('js/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin.min.js')}}"></script>
        <!-- Custom scripts for this page-->
        <script src="{{asset('js/sb-admin-datatables.min.js')}}"></script>
        @yield('footer')
    </div>
</body>

</html>