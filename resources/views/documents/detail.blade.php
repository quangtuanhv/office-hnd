
@extends('master.master')
@section('title','Chi tiết văn bản')
@section('content')
                <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('/')}}">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{url('/document-receive')}}">Văn bản đến</a></li>
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
                    <i class="fa fa-table"></i> Nội dung xử lý
                    @if($document->status!=3)
                    <div class="dropdown float-right">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Xử lý văn bản
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/forward-document',$document->id )}}">Chuyển/Phân công xử lý</a>
                        <a class="dropdown-item" href="{{url('sub-handle-document',$document->id)}}">Xử lý</a>
                        <a class="dropdown-item" href="{{url('end-handle-document',$document->id)}}">Kết thúc xử lý</a>
                    </div>
                    </div>
                    @else
                    <div class="float-right text-success">
                        <h5>Văn bản đã được kết thúc xử lý !</h5>
                    </div>
                    @endif
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td colspan="6">{{$document->user->profile->first_name}} {{$document->user->profile->last_name}} <i>Nhập văn bản đến</i> vào lúc <i>{{$document->created_at}}

                                    </i></td>
                                </tr>
                                <tr>
                                    <th colspan="6">Phân công xử lý công việc:</th>
                                    
                                </tr>
                                <tr>
                                    <th>Hạn xử lý</th>
                                    <th>Nội dung bàn giao</th>
                                    <th>Người chuyển xử lý</th>
                                    <th>Người xử lý</th>
                                    <th>Tình trạng</th>
                                    <th>File đính kèm</th>
                                </tr>
                                @foreach($states as $state)
                                <tr>
                                    <td>{{$state->deadline }}</td>
                                    <td>{!!$state->note!!}</td>
                                    <td>{{$state->user->profile->first_name}}</td>
                                    <td>
                                        @foreach($state->handlers as $hand)
                            
                                        {{$hand->user->profile->first_name}} <br>
                                        @endforeach
                                    </td>
                               
                                    <td>
                                            @foreach($state->handlers as $status)
                                                @if($status->status==1)
                                                Chưa xử lý
                                                @elseif($status->status==2)
                                                Đang xử lý
                                                @elseif($status->status == 3)
                                                Đã xử lý
                                                @else
                                                Không xác định
                                                @endif <br>
                                            @endforeach
                                       
                                    </td> 
                                    <td>
                                        @if($state->file != null)
                                        <a href="{{asset($state->file)}}">Tải về máy</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- xử lý công việc --}}
                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tbody>
                                    
                                    <tr>
                                        <th colspan="6">Xử lý công việc:</th>
                                        
                                    </tr>
                                    <tr>
                                        <th>Ngày xử lý</th>
                                        <th>Người xử lý</th>
                                        <th>Nội dung xử lý</th>
                                        <th>File đính kèm</th>
                                    </tr>
                                    @foreach($opinions as $opinion)
                                    <tr>
                                        <td>{{$opinion->created_at}}</td>
                                        <td>{{$opinion->user->profile->first_name}}</td>
                                        <td>{!!$opinion->content!!}</td>
                                        <td>
                                            @if($opinion->file != null)
                                        <a href="{{$opinion->file}}">Tải về máy</a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
            <!-- Ý kiến xử lý -->
            <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Ý kiến
                    </div>
                    <div class="card-body">
                            <div class="container">
                                    <div class="row">
                                        <div class="comments col-md-12" id="comments">
                                            @foreach($comments as $comment)
                                            <!-- comment -->
                                            <div class="comment mb-2 row">
                                                <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                                                <a href=""><img class="mx-auto rounded-circle img-fluid" src="{{asset($comment->user->profile->avatar)}}" alt="avatar"></a>
                                                </div>
                                                <div class="comment-content col-md-11 col-sm-10">
                                                <h6 class="small comment-meta"><span class="text-danger">{{$comment->user->profile->first_name}} {{$comment->user->profile->last_name}} </span>đã bình luận {{$comment->created_at}}</h6>
                                                    <div class="comment-body">{!!$comment->content!!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /comment -->
                                            @endforeach
                                        </div>
                                    </div>
                                <form action="{{url('comment-document',$document->id)}}" method="post">
                                    @csrf
                                        <fieldset class="col-9">
                                            <div class="form-group">
                                                <input type="text" name="content" class="form-control" placeholder="Nhập bình luận" required>
                                            </div>
                                             
                                            <div class="row pt-2">
                                                <div class="col-12">
                                                    <input type="submit" class="btn btn-sm btn-primary" value="Bình luận">
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

@stop

