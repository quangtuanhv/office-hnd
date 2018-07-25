
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
                    <i class="fa fa-table"></i> Nội dung xử lý
                    <div class="dropdown float-right">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Xử lý văn bản
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/forward-document',$document->id )}}">Chuyển/Phân công xử lý</a>
                        <a class="dropdown-item" href="{{url('sub-handle-document',$document->id)}}">Xử lý</a>
                        <a class="dropdown-item" href="#">Kết thúc xử lý</a>
                    </div>
                    </div>
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
                                    <th>File đính kèm</th>
                                    <th>Tình trạng</th>
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
                                    <td><a href="{{asset($state->file)}}">Xem file</a></td>
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
                                            <!-- comment -->
                                            <div class="comment mb-2 row">
                                                <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                                                    <a href=""><img class="mx-auto rounded-circle img-fluid" src="http://demos.themes.guide/bodeo/assets/images/users/m103.jpg" alt="avatar"></a>
                                                </div>
                                                <div class="comment-content col-md-11 col-sm-10">
                                                    <h6 class="small comment-meta"><a href="#">admin</a> Today, 2:38</h6>
                                                    <div class="comment-body">
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <a href>http://wwwwww.com</a> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                                            <br>
                                                            <a href="" class="text-right small"><i class="ion-reply"></i> Reply</a>
                                                        </p>
                                                    </div>
                                                </div>
                                                
                                                <!-- reply is indented -->
                                                <div class="comment-reply col-md-11 offset-md-1 col-sm-10 offset-sm-2">
                                                    <div class="row">
                                                        <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                                                            <a href=""><img class="mx-auto rounded-circle img-fluid" src="http://demos.themes.guide/bodeo/assets/images/users/m101.jpg" alt="avatar"></a>
                                                        </div>
                                                        <div class="comment-content col-md-11 col-sm-10 col-12">
                                                            <h6 class="small comment-meta"><a href="#">phildownney</a> Today, 12:31</h6>
                                                            <div class="comment-body">
                                                                <p>Really?? Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                                                    <br>
                                                                    <a href="" class="text-right small"><i class="ion-reply"></i> Reply</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                               </div>
                                               <!-- /reply is indented -->
                                            </div>
                                            <!-- /comment -->
                                            <!-- comment -->
                                            <div class="comment mb-2 row">
                                                <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
                                                    <a href=""><img class="mx-auto rounded-circle img-fluid" src="http://demos.themes.guide/bodeo/assets/images/users/w102.jpg" alt="avatar"></a>
                                                </div>
                                                <div class="comment-content col-md-11 col-sm-10">
                                                    <h6 class="small comment-meta"><a href="#">maslarino</a> Yesterday, 5:03 PM</h6>
                                                    <div class="comment-body">
                                                        <p>Sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                                            <br>
                                                            <a href="" class="text-right small"><i class="ion-reply"></i> Reply</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /comment -->
                                            
                                
                                        </div>
                                    </div>
                                    <form>
                                            <fieldset class="col-9">
                                              <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Bình luận">
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

