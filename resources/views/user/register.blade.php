<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Đăng ký người dùng mới| Hội nông dân Quảng Nam</title>
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
    <div class="card card-register mx-auto mt-5" style="border: solid 1px red;">
      <div class="card-header">Đăng ký tài khoản mới</div>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="card-body">
      <form action="{{url('/post-register')}}" method="post">
      @csrf
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Họ</label>
                <input name="lastName" class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Nhập họ của bạn">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Tên</label>
                <input name="firstName" class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Nhập tên của bạn">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Chức vụ </label>
                <select class="form-control" name="position">
                  <option value="1">Chủ tịch</option>
                  <option value="2">Trưởng phòng</option>
                </select>
              </div>
              <div class="col-md-6">
              <label for="exampleInputName">Phòng ban</label>
                <select class="form-control" name="suite">
                  <option value="1">Kinh tế</option>
                  <option value="2">Văn thư</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Giới tính</label>
                <select class="form-control" name="gender">
                  <option value="1">Nam</option>
                  <option value="0">Nữ</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Số điện thoại</label>
                <input name="phone" class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Nhập số điện thoại của bạn">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Địa chỉ</label>
                <input name="address" class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Nhập địa chỉ của bạn">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Email</label>
                <input name="email" class="form-control" id="exampleInputLastName" type="enail" aria-describedby="nameHelp" placeholder="Nhập email của bạn">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tên tài khoản</label>
            <input name="name" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Nhập vào tên tài khoản">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Mật khẩu</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Mật khẩu" name="password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Xác nhận mật khẩu</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" name="passwordConfirm" placeholder="Xác nhận mật khẩu">
              </div>
            </div>
          </div>
          <input type="submit" value="Đăng ký" class="btn btn-primary btn-block">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Đã có tài khoản? Đăng nhập</a>
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
