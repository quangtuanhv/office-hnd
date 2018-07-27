@extends('master.master')
@section('title', 'Chi tiết lịch công tác phòng ban')
@section('content')
<div class="container">
 
            <div class="card">
 
             <div class="card-header">Chi tiết sự kiện</div>
 
              <div class="card-body">    

                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                          @if (Session::has('success'))
                             <div class="alert alert-success">{{ Session::get('success') }}</div>
                          @elseif (Session::has('warnning'))
                              <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                          @endif
 
                      </div>
 
                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            <label for="event_name">Tên sự kiện:</label>
                            <div class="">
                            {{$event->event_name}}
                            </div>
                        </div>
                      </div>

 
                      <div class="col-xs-3 col-sm-3 col-md-3">
                      <div class="form-group">
                            <label for="event_name">Ngày giờ bắt đầu:</label>
                            <div class="">
                            {{$event->start_date}}
                            </div>
                        </div>
                      </div>
 
                      <div class="col-xs-3 col-sm-3 col-md-3">
                      <div class="form-group">
                            <label for="event_name">Ngày giờ kết thúc:</label>
                            <div class="">
                            {{$event->end_date}}
                            </div>
                        </div>
                      </div>
                    </div>
             </div>
             <div class="card-footer">
                <div class="float-right">
                    <a href="{{url('edit-event',$event->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Sửa sự kiện</a>
                    <a class="btn btn-danger"  data-toggle="modal" data-target="#deleteEvent"><i class="fa fa-trash"></i> Xóa sự kiện</a>
                </div>
             </div>
            </div>
        </div>
        <!-- Logout Modal-->
        <div class="modal fade" id="deleteEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Xóa lịch làm việc?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                    </div>
                    <div class="modal-body">Chọn "Xóa" nếu bạn thực sự muốn xóa lịch làm việc của mình</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy bỏ</button>
                        <a class="btn btn-primary" href="{{url('delete-calendar-suite',$event->id)}}">Xóa</a>
                    </div>
                </div>
            </div>
        </div>
@endsection