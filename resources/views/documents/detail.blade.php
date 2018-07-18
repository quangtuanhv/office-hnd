
@extends('master.master')

@section('content')
                <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Văn bản đến</a></li>
                <li class="breadcrumb-item active">Chi tiết văn bản</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Chi tiết văn bản số: 25/2018/QD-BXD</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <th>Trích yếu</th>
                                    <td colspan="3">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</td>
                                </tr>
                                <tr>
                                    <th>Ngày văn bản đến</th>
                                    <td>16/05/2018</td>
                                    <th>Loại văn bản</th>
                                    <td>Thông báo</td>
                                </tr>
                                <tr>
                                    <th>Người nhập</th>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                    <th>Ngày tạo</th>
                                    <td>17/05/2018 3:27PM</td>
                                </tr>
                                <tr>
                                    <th>Số, ký hiệu</th>
                                    <td>10/2018/QĐ</td>
                                    <th>Sổ lưu số</th>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <th>Cơ quan ban hành</th>
                                    <td>Phòng Nhân sự</td>
                                    <th>Ngày ban hành</th>
                                    <td>15/05/2018</td>
                                </tr>
                                <tr>
                                    <th>Ngày có hiệu lực</th>
                                    <td>15/05/2018</td>
                                    <th>Ngày hiết hiệu lực</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Hiệu lực văn bản</th>
                                    <td>Còn hiệu lực</td>
                                    <th>Lĩnh vực</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Ngày xử lý</th>
                                    <td>10/05/2018</td>
                                    <th>Người xử lý</th>
                                    <td>Phòng Nhân sự</td>
                                </tr>
                                <tr>
                                    <th>Tình trạng</th>
                                    <td colspan="3">Đang xử lý</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
            <!-- chi tiết xử lý -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Các bước xử lý</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td colspan="2">Nguyễn Văn A <i>chuyển văn bản theo chỉ đạo</i> vào lúc <i>18/05/2018 7:26AM</i></td>
                                </tr>
                                <tr>
                                    <th>Chuyển đến:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a> <br> Phòng Quản lý dự án » Nguyễn Thanh Nam » Trưởng Phòng (Chủ trì) - Đã giao xử lý</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
@stop

