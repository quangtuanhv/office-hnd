@extends('master.master')
 @section('title', 'Chỉnh sửa văn bản')
 @section('header')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
 @endsection
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Nhập văn bản</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Tạo mới văn bản</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <p style=" text-align: center">Các trường được gắn dấu <span class="text-danger">*</span> là các trường bắt buộc</p>
                       <form action="{{url('edit-document',$document->id)}}" method="post">
                           @csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <th>Trích yếu <span class="text-danger">*</span></th>
                                <td colspan="3"><input value="{{$document->trichyeu}}" name="trichyeu" class="form-control" type="text" required></td>
                                </tr>
                                <tr>
                                    <th>Ngày văn bản đến <span class="text-danger">*</span></th>
                                    <td>
                                        <input name="ngayden" class="form-control" type="date" required value="{{$document->ngayden}}">
                                    </td>
                                    <th>Loại văn bản <span class="text-danger">*</span></th>
                                    <td>
                                        <select class="form-control" name="loai" required>
                                            <option value="Thông báo">Thông báo</option>
                                            <option value="Quyết định">Quyết định</option>
                                        </select>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <th>Số, ký hiệu <span class="text-danger">*</span></th>
                                    <td><input name="so" class="form-control" type="text" required value="{{$document->id_sovanban}}"></td>
                                    <th>Sổ lưu số <span class="text-danger">*</span></th>
                                    <td><input name="sovanban" class="form-control" type="text" required></td>
                                </tr>
                                <tr>
                                    <th>Cơ quan ban hành <span class="text-danger">*</span></th>
                                    <td><input name="coquanbanhanh" class="form-control" type="text" required value="{{$document->coquanbanhanh}}"></td>
                                    <th>Ngày ban hành <span class="text-danger">*</span></th>
                                    <td><input name="ngaybanhanh" class="form-control" type="date" required value="{{$document->ngaybanhanh}}"></td>
                                </tr>
                                <tr>
                                    <th>Ngày có hiệu lực</th>
                                    <td><input name="ngaycohieuluc" class="form-control" type="date" value="{{$document->ngaycohieuluc}}"></td>
                                    <th>Ngày hiết hiệu lực</th>
                                    <td><input name="ngayhethieuluc" class="form-control" type="date" value="{{$document->ngayhethieuluc}}"></td>
                                </tr>
                                <tr>
                                    <!-- <th>Hiệu lực văn bản</th>
                                    <td>
                                        <select class="form-control" name="" id="">
                                            <option value="Thông báo">Còn hiệu lực</option>
                                            <option value="Quyết định">Hết hiệu lực</option>
                                        </select>
                                    </td> -->
                                    <th>Lĩnh vực</th>
                                    <td><input name="linhvuc" class="form-control" type="text" value="{{$document->linhvuc}}"></td>
                                    <!-- </tr>
                                <tr>
                                    <th>Ngày xử lý</th>
                                    <td><input class="form-control" type="date"></td> -->
                                    <th>Người xử lý chính <span class="text-danger">*</span></th>
                                    <td><input name="nguoiky" class="form-control" type="text" required value="{{$document->nguoiky}}" ></td>
                                </tr>
                                <tr>
                                    <th>Kiểu văn bản</th>
                                    <td>
                                        <select class="form-control" name="vanbanden" id="">
                                            <option value="1">Văn bản đến</option>
                                            <option value="2">Văn bản đi</option>
                                        </select>
                                    </td>
                                    <th>Tệp văn bản đính kèm <span class="text-danger">*</span></th>
                                    <td>
                                        <div class="input-append">
                                            <input id="filename" type="text" name="tepdinhkem" class="form-group" value="{{$document->tepdinhkem}}">
                                        <a href="{{asset('/finder/filemanager/dialog.php?field_id=filename&amp')}}" class="btn iframe-btn" type="button">Select</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <div class="card-header">
                                            Nội dung bổ sung</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <textarea id="editor" name="noidung">{!!$document->noidung!!}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=" 4 ">
                                        <button class="btn btn-secondary " style="float: right; " type="submit" >Lưu văn bản </button>    
                                    
                                </tr>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
                <div class="card-footer small text-muted ">Updated yesterday at 11:59 PM</div>
            </div>
@endsection
@section('footer')
 <!-- tinycem edior -->
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js "></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
        <script>
            tinymce.init({
                selector: '#editor'
            });
        </script>
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
@endsection