@extends('master.master')
 @section('title', 'Tìm kiếm công văn theo loại văn bản')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Tìm kiếm theo loại văn bản</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Tìm kiếm văn bản
                    <div style="float:right;">
                            <a href="{{asset('search-document')}}" class="btn btn-secondary"><i class="fa fa-undo"></i> Quay lại trang tìm kiếm</a>
                        </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                    <form action="{{url('search-document-general')}}" method="post">
                                        @csrf
                                        <tr>
                                            <th>Chọn thể loại</th>
                                            <td colspan="2">
                                                <select class="form-control" name="loai">
                                                    <option value="" disabled selected hidden>Chọn loại văn bản cần tìm kiếm</option>
                                                    <option value="1">Văn bản đến</option>
                                                    <option value="2">Văn bản đi</option>
                                                </select>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                                <th>Từ ngày</th>
                                                <td>
                                                    <input name="fromDate" class="form-control" type="date" >
                                                </td>
                                                <th>Đến ngày</th>
                                                <td><input name="toDate" class="form-control" type="date"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <button class="btn btn-secondary " style="float: right; " type="submit" >   <i class="fa fa-search"></i> Tìm kiếm </button>
                                                </td>
                                            </tr>
                                    </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection