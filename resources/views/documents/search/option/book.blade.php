@extends('master.master')
 @section('title', 'Tìm kiếm công văn theo sổ văn bản')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Tìm kiếm theo sổ văn bản</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Tìm kiếm văn bản</div>
                    <div style="float:right;">
                            <a href="{{asset('search-document')}}" class="btn btn-secondary"><i class="fa fa-undo"></i> Quay lại trang tìm kiếm</a>
                        </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                    <form action="{{url('search-document-book')}}" method="post">
                                            @csrf
                                            <tr>
                                                    <td>
                                                        <input name="sovanban" class="form-control" type="text" placeholder="Nhập sổ văn bản cần tìm kiếm">
                                                    </td>
                                                    <td>
                                                            <button class="btn btn-secondary " style="float: left; " type="submit" >   <i class="fa fa-search"></i> Tìm kiếm </button>
                                                    </td>
                                            </tr>
                                        </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
