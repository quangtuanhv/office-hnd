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
                               <tr>
                                    <th>Chọn mục cần tìm kiếm </th>
                                    <td>
                                        <select class="form-control" id="Search">
                                            <option value="" disabled selected hidden>Chọn mục cần tìm kiếm</option>
                                            <option value="/search-with-name">Tìm kiếm theo tên văn bản</option>
                                            <option value="/search-with-symbol">Tìm kiếm theo số, kí hiệu văn bản</option>
                                            <option value="/search-with-book">Tìm kiếm theo sổ văn bản</option>
                                            <option value="/search-with-date">Tìm kiếm theo ngày văn bản đến</option>
                                            <option value="/search-with-type">Tìm kiếm theo loại văn bản</option>
                                            <option value="/search-with-general">Tìm kiếm tổng hợp</option>
                                        </select>
                                    </td>
                               </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
@section('footer')
<script>
$(document).ready(function(){
    $('#Search').change(function(){
        var url = $(this).val();
        if(url != 0){
            $( location ).attr("href", url);
        }
    });
});
</script>
@endsection