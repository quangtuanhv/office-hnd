@extends('master.master')
@section('content')
<!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">Văn bản đến</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> SỔ CÔNG VĂN - VĂN BẢN ĐẾN</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ngày nhận</th>
                                    <th>Sổ lưu số</th>
                                    <th>Cơ quan ban hành</th>
                                    <th>Số, ký hiệu</th>
                                    <th>Trích yếu</th>
                                    <th>Ngày ban hành</th>
                                    <th>Loại văn bản</th>
                                    <th>Nơi nhận</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Ngày nhận</th>
                                    <th>Sổ lưu số</th>
                                    <th>Cơ quan ban hành</th>
                                    <th>Số, ký hiệu</th>
                                    <th>Trích yếu</th>
                                    <th>Ngày ban hành</th>
                                    <th>Loại văn bản</th>
                                    <th>Nơi nhận</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>04/10/2017</td>
                                    <td>12</td>
                                    <td>Chính phủ</td>
                                    <td>25/2018/QD-BXD</td>
                                    <td><a href="#">Vv tổ chức rà soát hồ sơ chất lượng các dự án trọng điểm</a></td>
                                    <td>02/04/2017</td>
                                    <td>Quyết định</td>
                                    <td>Nguyễn Mạnh Tuấn</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
@endsection

