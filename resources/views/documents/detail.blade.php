
@extends('master.master')
@section('title','Chi tiết văn bản')
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
                    <i class="fa fa-table"></i> Chi tiết văn bản số: {{$document->kihieu}}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <th>Trích yếu</th>
                                    <td colspan="3">{{$document->trichyeu}}</td>
                                </tr>
                                <tr>
                                    <th>Ngày văn bản đến</th>
                                    <td>{{$document->ngayden}}</td>
                                    <th>Loại văn bản</th>
                                    <td>{{$document->id_loaivanban}}</td>
                                </tr>
                                <tr>
                                    <th>Người nhập</th>
                                    <td>{{$document->user->profile->first_name}} {{$document->user->profile->last_name}}</td>
                                    <th>Ngày tạo</th>
                                    <td>{{$document->created_at}}</td>
                                </tr>
                                <tr>
                                    <th>Số, ký hiệu</th>
                                    <td>{{$document->kihieu}}</td>
                                    <th>Sổ lưu số</th>
                                    <td>{{$document->id_sovanban}}</td>
                                </tr>
                                <tr>
                                    <th>Cơ quan ban hành</th>
                                    <td>{{$document->coquanbanhanh}}</td>
                                    <th>Ngày ban hành</th>
                                    <td>{{$document->ngaybanhanh}}</td>
                                </tr>
                                <tr>
                                    <th>Ngày có hiệu lực</th>
                                    <td>{{$document->ngaycohieuluc}}</td>
                                    <th>Ngày hiết hiệu lực</th>
                                    <td>{{$document->ngayhethieuluc}}</td>
                                </tr>
                                <tr>
                                    <th>Hiệu lực văn bản</th>
                                    <td>Còn hiệu lực</td>
                                    <th>Lĩnh vực</th>
                                    <td>{{$document->linhvuc}}</td>
                                </tr>
                                <!-- <tr>
                                    <th>Ngày xử lý</th>
                                    <td>{{$document->ngayden}}</td>
                                    <th>Người xử lý</th>
                                    <td>{{$document->ngayden}}</td>
                                </tr> -->
                                <tr>
                                    <th>Tình trạng</th>
                                    <td colspan="3">@if($document->status==1)
                                        Chưa xử lý
                                        @elseif($document->status==2)
                                        Đang xử lý
                                        @elseif($document->status == 3)
                                        Đã xử lý
                                        @else
                                        Không xác định
                                        @endif
                                    </td>
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
                    <i class="fa fa-table"></i> Các bước xử lý
                    <div class="dropdown float-right">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Xử lý văn bản
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Chuyển xử lý</a>
                        <a class="dropdown-item" href="#">Phân công xử lý</a>
                        <a class="dropdown-item" href="#">Xử lý</a>
                        <a class="dropdown-item" href="#">Kết thúc xử lý</a>
                    </div>
                    </div>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td colspan="2">{{$document->user->profile->first_name}} {{$document->user->profile->last_name}} <i>Nhập văn bản đến</i> vào lúc <i>{{$document->created_at}}

                                    </i></td>
                                </tr>
                                <tr>
                                    <th>Chuyển đến:</th>
                                    <td></td>
                                </tr>
                                @foreach($states as $state)
                                <tr>
                                    <td>{{$state->deadline }}</td>
                                    <td>{!!$state->note!!}</td>
<td>
    <!-- {{$state->handlers}} -->
    @foreach($state->handlers as $hand)
    {{$hand->handler->user->first_name}}
    @endforeach
</td>
                                </tr>
                                @endforeach
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

