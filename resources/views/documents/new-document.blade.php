@extends('master.master')
 @section('title', 'Tạo mới văn bản đến')

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
                       <form action="{{url('new-document')}}" method="post">
                           @csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <th>Trích yếu <span class="text-danger">*</span></th>
                                    <td colspan="3"><input name="trichyeu" class="form-control" type="text" required></td>
                                </tr>
                                <tr>
                                    <th>Ngày văn bản đến <span class="text-danger">*</span></th>
                                    <td>
                                        <input name="ngayden" class="form-control" type="date" required>
                                    </td>
                                    <th>Loại văn bản <span class="text-danger">*</span></th>
                                    <td>
                                        <select class="form-control" name="loai" id="" required>
                                            <option value="Thông báo">Thông báo</option>
                                            <option value="Quyết định">Quyết định</option>
                                        </select>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <th>Người nhập</th>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                    <th>Ngày tạo</th>
                                    <td>17/05/2018 3:27PM</td>
                                </tr> -->
                                <tr>
                                    <th>Số, ký hiệu <span class="text-danger">*</span></th>
                                    <td><input name="so" class="form-control" type="text" required></td>
                                    <th>Sổ lưu số <span class="text-danger">*</span></th>
                                    <td><input name="sovanban" class="form-control" type="text" required></td>
                                </tr>
                                <tr>
                                    <th>Cơ quan ban hành <span class="text-danger">*</span></th>
                                    <td><input name="coquanbanhanh" class="form-control" type="text" required></td>
                                    <th>Ngày ban hành <span class="text-danger">*</span></th>
                                    <td><input name="ngaybanhanh" class="form-control" type="date" required></td>
                                </tr>
                                <tr>
                                    <th>Ngày có hiệu lực</th>
                                    <td><input name="ngaycohieuluc" class="form-control" type="date"></td>
                                    <th>Ngày hiết hiệu lực</th>
                                    <td><input name="ngayhethieuluc" class="form-control" type="date"></td>
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
                                    <td><input name="linhvuc" class="form-control" type="text"></td>
                                    <!-- </tr>
                                <tr>
                                    <th>Ngày xử lý</th>
                                    <td><input class="form-control" type="date"></td> -->
                                    <th>Người xử lý chính <span class="text-danger">*</span></th>
                                    <td><input name="nguoiky" class="form-control" type="text" required></td>
                                </tr>
                                <tr>
                                    <!-- <th>Tình trạng</th>
                                    <td>
                                        <select class="form-control" name="" id="">
                                            <option value="Quyết định">Chưa xử lý</option>
                                            <option value="Đang xử lý">Đang xử lý</option>
                                            <option value="Thông báo">Đã xử lý</option>
                                        </select>
                                    </td> -->
                                    <th>Tệp văn bản đính kèm <span class="text-danger">*</span></th>
                                    <td>
                                        <input class="form-control" type="file" required>
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
                                        <textarea id="editor" name="noidung">Next, use our Get Started docs to setup Tiny!</textarea>
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
        <script>
            tinymce.init({
                selector: '#editor'
            });
        </script>
        @endsection