@extends('master.master')
@section('title','Văn bản đến')
@section('content')

<!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Kết quả tìm kiếm</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> SỔ CÔNG VĂN
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ngày nhận</th>
                                    <th>Sổ lưu số</th>
                                    <th>Cơ quan ban hành</th>
                                    <th>Số, ký hiệu</th>
                                    <th>Trích yếu</th>
                                    <th>Ngày ban hành</th>
                                    <th>Loại văn bản</th>
                                    <th>Trạng thái</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Ngày nhận</th>
                                    <th>Sổ lưu số</th>
                                    <th>Cơ quan ban hành</th>
                                    <th>Số, ký hiệu</th>
                                    <th>Trích yếu</th>
                                    <th>Ngày ban hành</th>
                                    <th>Loại văn bản</th>
                                    <th>Trạng thái</th>
                                    
                                </tr>
                            </tfoot>
                            <tbody>
                                {{$i=1}}
                                @foreach($documents as $document)
                                <tr>
                                    <td>{{$i,$i++}}</td>
                                    <td>{{$document->ngayden}}</td>
                                    <td>{{$document->so}}</td>
                                    <td>{{$document->coquanbanhanh}}</td>
                                    <td>{{$document->kihieu}}</td>
                                    <td><a href="{{url('/detail-document',$document->id)}}">{{$document->trichyeu}}</a></td>
                                    <td>{{$document->ngaybanhanh}}</td>
                                    <td>{{$document->id_loaivanban}}</td>
                                    <td>@if($document->status==1)
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection

