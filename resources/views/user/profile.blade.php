@extends('master.master')
@section('title','Trang cá nhân ')
@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
@endsection
@section('content')
<div class="container">
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Trang cá nhân</a>
                </li>
                
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Chỉnh sửa</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                   
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Tên</h6>
                            <p>
                                {{$profile->last_name}} {{$profile->first_name}}
                            </p>
                            <h6>Email</h6>
                            <p>
                                {{$profile->email}}
                            </p>
                            
                            <h6>Phòng ban</h6>
                            <p>
                                {{$profile->suite->suite_name}}
                            </p>
                            
                        </div>
                        <div class="col-md-6"><h6>Số điện thoại</h6>
                            <p>
                                {{$profile->phone}} 
                            </p>
                            <h6>Địa chỉ</h6>
                            <p>
                                {{$profile->address}}
                            </p><h6>Chức vụ</h6>
                            <p>
                                {{$profile->position->position_name}}
                            </p>
                        </div>
                    </div>
                    <!--/row-->
                </div>
           
                <div class="tab-pane" id="edit">
                <form role="form" action="{{url('/update-profile')}}" method="POST">
                    @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Tên</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="firstName" value="{{$profile->first_name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Họ</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="lastName" value="{{$profile->last_name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                            <input class="form-control" type="email" name="email" value="{{$profile->email}}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Địa chỉ</label>
                            <div class="col-lg-9">
                            <input class="form-control" type="text" name="address" value="{{$profile->address}}">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Số điện thoại</label>
                                <div class="col-lg-9">
                                <input class="form-control" type="text" name="phone" value="{{$profile->phone}}">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Ảnh đại diện</label>
                            <div class="col-lg-6">
                                <div class="input-append">
                                    <input id="filename" type="text" name="avatar" value="{{$profile->avatar}}" class="form-control">                                
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <a href="{{asset('/finder/filemanager/dialog.php?field_id=filename&amp')}}" class="btn iframe-btn" type="button">Chọn ảnh đại diện</a>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                            <input class="form-control"  value="{{$profile->user->name}}" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="submit" class="btn btn-primary" value="Lưu thay đổi">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
        <img src="{{asset($profile->avatar)}}" class="mx-auto img-fluid img-circle d-block" alt="avatar" style="width:150px;height:150px;">
        <br>
        
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        <input type="button" class="btn btn-outline-success" value="Đổi mật khẩu" data-toggle="modal" data-target="#resetPw">
        @if(session('changePassErr'))
        <div id="noteErr"></div>
    @endif
    </div>
    </div>

</div>

  <!-- Modal -->
  <div class="modal fade" id="resetPw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Đổi mật khẩu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{url('/change-password')}}" method="POST">
            @csrf
        <div class="modal-body">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Mật khẩu cũ</label>
                    <div class="col-lg-9">
                    <input class="form-control" name="oldPass" type="password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Mật khẩu mới</label>
                <div class="col-lg-9">
                    <input class="form-control" name="newPass" type="password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Xác nhận mật khẩu mới</label>
                <div class="col-lg-9">
                    <input class="form-control" name="newPasswordConfirm" type="password">
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Bỏ qua</button>
          <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@section('footer')
 <!-- tinycem edior -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
        <script>
        $(document).ready(function($) {
    $('.iframe-btn').fancybox({
        'width': 880,
        'height': 570,
        'type': 'iframe',
        'autoScale': false
    });

    $('.iframe-btn').on('click', function() { $(window).on('message', OnMessage); });
});
</script>

<script src="{{asset('js/notify.min.js')}}"></script>
<script>
   $(document).ready(function(){
    $('#noteErr').notify("Đổi mật khẩu không thành công", "error");
   });
</script>
@endsection
@stop