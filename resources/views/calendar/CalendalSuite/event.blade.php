@extends('master.master')
 @section('title', 'Lịch công tác phòng ban ')
 @section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
 @endsection
@section('content')
        <div class="container">
 
            <div class="card">
 
             <div class="card-header">Tạo mới sự kiện</div>
 
              <div class="card-body">    
 
                   {!! Form::open(array('route' => 'calendars.add','method'=>'POST','files'=>'true')) !!}
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
                            {!! Form::label('event_name','Tên sự kiện:') !!}
                            <div class="">
                            {!! Form::text('event_name', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>
 
                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                          {!! Form::label('start_date','Ngày giờ bắt đầu:') !!}
                          <div class="">
                          <!-- {!! Form::date('start_date', null, ['class' => 'form-control']) !!} -->
                          <input class="form-control" name="start_date" type="datetime-local" id="start_date">

                          {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>
 
                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                          {!! Form::label('end_date','Ngày giờ kết thúc:') !!}
                          <div class="">
                          <!-- {!! Form::date('end_date', null, ['class' => 'form-control']) !!} -->
                          <input class="form-control" name="end_date" type="datetime-local" id="end_date">

                          {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>
 
                      <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                      {!! Form::submit('Thêm sự kiện',['class'=>'btn btn-primary']) !!}
                      </div>
                    </div>
                   {!! Form::close() !!}
 
             </div>
 
            </div>
 
            <div class="card" style="margin-top:10px;">
              <div class="card-header">Lịch công tác phòng ban</div>
              <div class="card-body" >
                  {!! $calendar_details->calendar() !!}
              </div>
            </div>
 
            </div>
@endsection
@section('footer')
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

{!! $calendar_details->script() !!}
@endsection