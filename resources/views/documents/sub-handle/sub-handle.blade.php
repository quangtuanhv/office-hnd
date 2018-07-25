@extends('master.master')
 @section('title', 'Xử lý văn bản')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Nhập văn bản</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Xử lý văn bản</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <p style=" text-align: center">Xử lý văn bản <a href="{{url('/detail-document',$doc->id)}}">{{$doc->trichyeu}}</a></p>
                       <form action="{{url('/forward-document',$doc->id)}}" method="post">
                           @csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                            <!-- <span class="text-danger">*</span> -->
                                <tr>
                                    <th>Tệp văn bản đính kèm </th>
                                    <td>
                                        <input name="file" class="form-control" type="file" >
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <div class="card-header">
                                            Nội dung xử lý</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <textarea id="editor" name="content">Next, use our Get Started docs to setup Tiny!</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=" 4 ">
                                        <button class="btn btn-secondary " style="float: right; " type="submit" >Lưu văn bản </button>    
                                    
                                </tr>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
                <div class="card-footer small text-muted ">Updated yesterday at 11:59 PM</div>
            </div>
@endsection
@section('footer')
 <!-- tinycem edior -->
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js "></script>
        <script>
            tinymce.init({
                selector: '#editor'
            });
 </script>
<script src="{{asset('js/forward-doc.js')}}"></script>
@endsection