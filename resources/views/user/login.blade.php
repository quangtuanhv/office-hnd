<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="js/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="js/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style>
  body{
      background: url('./bg-login.jpg');
      background-size:cover;
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center"><h4>Đăng nhập</h4>
        <div style="color: red;" class="form-group">
            @if(session('err'))
            {{session('err')}}
            @endif
            @if(session('notification'))
            {{session('notification')}}
            @endif
        </div>
      </div>
      <div class="card-body">
      <form action="{{url('/post-login')}}" method="post">
      @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Tên tài khoản</label>
            <input name="name" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="tài khoản...">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mật khẩu</label>
            <input name="password" class="form-control" id="exampleInputPassword1" type="password" placeholder="mật khẩu...">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input name="rememberMe" class="form-check-input" type="checkbox" value="1">Ghi nhớ đăng nhập</label>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" value="Đăng nhập">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Đăng ký tài khoản mới</a>
          <a class="d-block small" href="forgot-password.html">Quên mật khẩu?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="js/vendor/jquery/jquery.min.js"></script>
  <script src="js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="js/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
