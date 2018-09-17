@extends('master.master')
 @section('title', 'Tìm kiếm công văn')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Tìm kiếm văn bản</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Tìm kiếm văn bản</div>
                <div class="card-body">
                    <div class="table-responsive">
                       
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                            <form action="{{url('search-document')}}" method="post">
                                @csrf
                               <tr>
                                    <th>Loại văn bản </th>
                                    <td>
                                        <select class="form-control" name="loai">
                                            <option value="1">Văn bản đến</option>
                                            <option value="2">Văn bản đi</option>
                                        </select>
                                    </td>
                                    <td colspan=" 4 ">
                                            <button class="btn btn-secondary " style="float: right; " type="submit" >   <i class="fa fa-search"></i> Tìm kiếm văn bản </button>    
                                        </td>
                               </tr>
                            </form>
                            <form action="{{url('search-document')}}" method="post">
                                @csrf
                                <tr>
                                    <th>Từ ngày</th>
                                    <td>
                                        <input name="tungay" class="form-control" type="date" >
                                    </td>
                                    <th>Đến ngày</th>
                                    <td><input name="denngay" class="form-control" type="date"></td>
                                </tr>
                            </form>
                            <form action="{{url('search-document')}}" method="post">
                                 @csrf
                                <tr>
                                    <th>Số, ký hiệu </th>
                                    <td><input name="kihieu" class="form-control" type="text"></td>
                                    <th>Sổ lưu số </th>
                                    <td><input name="sovanban" class="form-control" type="text"></td>
                                </tr>
                            </form>
                                
                                <tr>
                                    <td colspan=" 4 ">
                                        <button class="btn btn-secondary " style="float: right; " type="submit" >   <i class="fa fa-search"></i> Tìm kiếm văn bản </button>    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection