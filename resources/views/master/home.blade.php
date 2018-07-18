@extends('master.master')
@section('content')
                <!-- Area Chart Example-->
            <div class="card mb-3">
                <div class="card-header">
                    <marquee style="color: red; font-size: 30px;">Website Quản lý công văn Hội nông dân tỉnh Quảng Nam</marquee>
                </div>
                <div class="card-body">
                    <img style="width: 100%;height: auto;" src="./me-thu-head.jpg" alt="">
                </div>
                <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
            </div>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">Văn bản</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Xem chi tiết</span>
                            <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-list"></i>
                            </div>
                            <div class="mr-5">Danh bạ</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Xem chi tiết</span>
                            <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">Tin nhắn</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Xem chi tiết</span>
                            <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-support"></i>
                            </div>
                            <div class="mr-5">Lịch công tác</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">Xem chi tiết</span>
                            <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
                        </a>
                    </div>
                </div>
            </div>
@endsection

