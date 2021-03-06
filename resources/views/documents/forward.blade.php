@extends('master.master')
 @section('title', 'Chuyển tiếp xử lý văn bản')
 @section('header')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
 @endsection
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
                    <i class="fa fa-table"></i> Chuyển xử lý, phân công xử lý văn bản</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <p style=" text-align: center">Xử lý văn bản <a href="{{url('/detail-document',$doc->id)}}">{{$doc->trichyeu}}</a></p>
                       <form action="{{url('/forward-document',$doc->id)}}" method="post">
                           @csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                            <!-- <span class="text-danger">*</span> -->
                                <tr>
                                    <th>Thời hạn xử lý </th>
                                    <td>
                                        <input name="deadline" class="form-control" type="date" required>
                                    </td>
                                    <th></th>
                                    <td>
                                        
                                    </td>
                                </tr>
                                
                                    <th>Tệp văn bản đính kèm </th>
                                    <td>
                                        <div class="input-append">
                                            <input id="filename" type="text" name="tepdinhkem" value="" class="form-control">
                                        <a href="{{asset('/finder/filemanager/dialog.php?field_id=filename&amp')}}" class="btn iframe-btn" type="button">Select</a>
                                        </div>
                                    </td>
                                    <th>Người nhận <span class="text-danger">*</span></th>
                                    <td>
                                    <ul>

@foreach($dv as $dv)
    <li>
        <input type="checkbox" name="check" id="{{$dv->suite_name}}">
        <label for="{{$dv->suite_name}}">{{$dv->suite_name}}</label>

        <ul id="sub-tall">
            @foreach($members as $mem)
            @if($mem->suite_id==$dv->id)
            <li>
            <input type="checkbox" name="handlers[]" value="{{$mem->id}}" id="{{$mem->id}}" >
            <label for="{{$mem->id}}">{{$mem->last_name}} {{$mem->first_name}}</label>
            </li>
            @endif
            @endforeach
        </ul>
    </li>
@endforeach
                                        {{-- <li>
                                            <input type="checkbox" name="tall" id="tall">
                                            <label for="tall">Ban thường trực</label>

                                            <ul id="sub-tall">
                                                <li>
                                                    <input type="checkbox" name="handlers[]" value="1" >
                                                    <label for="tall-1">Buildings</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="handlers[]" value="2">
                                                    <label for="tall-2">Giants</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="handlers[]" value="3">
                                                    <label for="tall-3">Two sandwiches</label>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="short" id="short">
                                            <label for="short">Ban Kinh tế - xã hội</label>
                                            <ul id="sub-tall-2">
                                                <li>
                                                    <input type="checkbox" name="handlers[]" value="4">
                                                    <label for="short-1">Smurfs</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="handlers[]" value="5">
                                                    <label for="short-2">Mushrooms</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="handlers[]" value="6">
                                                    <label for="short-3">One Sandwich</label>
                                                </li>
                                            </ul>
                                        </li> --}}
                                      </ul>
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
                                        <textarea id="editor" name="content"></textarea>
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
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
        <script>
            tinymce.init({
                selector: '#editor'
            });
        </script>
        <script>
        $(document).ready(function($) {
    $('.iframe-btn').fancybox({
        'width': 880,
        'height': 570,
        'type': 'iframe',
        'autoScale': false
    });

    $('.iframe-btn').on('click', function() { $(window).on('message', OnMessage); });
});
$("[name='check']").click(function(){
    $(this).parent().find('ul input[type=checkbox]').not(this).prop('checked', this.checked);
});
</script>
@endsection