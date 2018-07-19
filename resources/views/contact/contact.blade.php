@extends('master.master')
@section('title','Danh bạ hội nông dân tỉnh Quảng Nam')
@section('content')
<!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i>Danh bạ Hội nông dân tỉnh Quảng Nam</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Chức vụ</th>
                                    <th>Phòng ban</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Chức vụ</th>
                                    <th>Phòng ban</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            {{$i=1}}
                                @foreach( $contacts as $contact)
                                <tr>
                                    <td>{{$i,$i++}}</td>
                                    <td>{{$contact->first_name}}</td>
                                    <td>{{$contact->position->position_name}}</td>
                                    <td>{{$contact->suite->suite_name}}</td>
                                    <td>{{$contact->phone}}</td>
                                    <td>{{$contact->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
                        </a>
                    </div>
                </div>
            </div>
@endsection

