<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PolluxUI Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{URL::asset('vendors/typicons/typicons.css')}}">
    '
    <link rel="stylesheet" href="{{URL::asset('vendors/css/vendor.bundle.base.css')}}">
    '
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">


    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{URL::asset('css/vertical-layout-light/style.css')}}">
    '
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png"/>
</head>
<body>
<div class="row" id="proBanner">
    <div class="col-12">
      <span class="d-flex align-items-center purchase-popup">
        <p>Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more!</p>
        <a href="https://bootstrapdash.com/demo/polluxui/template/index.html?utm_source=organic&utm_medium=banner&utm_campaign=free-preview"
           target="_blank" class="btn download-button purchase-button ml-auto">Upgrade To Pro</a>
        <i class="typcn typcn-delete-outline" id="bannerClose"></i>
      </span>
    </div>
</div>
<div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg"
                                                                               alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="typcn typcn-th-menu"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="images/faces/face5.jpg" alt="profile"/>
                        <span class="nav-profile-name">Eugenia Mullins</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="typcn typcn-cog-outline text-primary"></i>
                            Settings
                        </a>
                        <a class="dropdown-item">
                            <i class="typcn typcn-eject text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-user-status dropdown">
                    <p class="mb-0">Last login was 23 hours ago.</p>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-date dropdown">
                    <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
                        <h6 class="date mb-0">Today : Mar 23</h6>
                        <i class="typcn typcn-calendar"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                       id="messageDropdown" href="#" data-toggle="dropdown">
                        <i class="typcn typcn-cog-outline mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                         aria-labelledby="messageDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-0">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
                       id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="typcn typcn-bell mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                         aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="typcn typcn-info mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="typcn typcn-cog-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">Settings</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="typcn typcn-user mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="typcn typcn-th-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
        <div class="navbar-links-wrapper d-flex align-items-stretch">
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-calendar-outline"></i></a>
            </div>
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-mail"></i></a>
            </div>
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-folder"></i></a>
            </div>
            <div class="nav-link">
                <a href="javascript:;"><i class="typcn typcn-document-text"></i></a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item ml-0">
                    <h4 class="mb-0">Dashboard</h4>
                </li>
                <li class="nav-item">
                    <div class="d-flex align-items-baseline">
                        <p class="mb-0">Home</p>
                        <i class="typcn typcn-chevron-right"></i>
                        <p class="mb-0">Main Dahboard</p>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-search d-none d-md-block mr-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="search"
                               aria-describedby="search">
                        <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="typcn typcn-zoom"></i>
                </span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close typcn typcn-times"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>
                    Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                    Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close typcn typcn-times"></i>
            <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                       aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                       aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                     aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove typcn typcn-delete-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove typcn typcn-delete-outline"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove typcn typcn-delete-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove typcn typcn-delete-outline"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove typcn typcn-delete-outline"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="events py-4 border-bottom px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                        <p class="text-gray mb-0">build a js based app</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small
                            class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                            All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span
                                    class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span
                                    class="offline"></span></div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                       aria-controls="ui-basic">
                        <i class="typcn typcn-document-text menu-icon"></i>
                        <span class="menu-title">Tính tiền điện</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="/electric/public">Tính tiền điện </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/electric/public/view-giadien">Giá điện</a>
                            </li>

                        </ul>
                    </div>
                </li>


            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <br>
                <h5 class="mb-2 text-titlecase mb-4">Tính tiền điện</h5>
                <div class="row col-md-12">
                    <div class="input-group col-md-5">
                        <input type="search" id="madk" class="form-control rounded"
                               placeholder="Mã điện kế "
                               aria-describedby="search-addon"/>
                    </div>
                    &nbsp&nbsp&nbsp&nbsp
                    <div class="input-group col-md-5">
                        <input id="sodien" type="number"  class="form-control rounded" placeholder="Số điện"/>
                        <input id="ky" type="text" class="form-control rounded" placeholder="kỳ"/>

                        <button id="btntinhtien" type="button" class="btn btn-outline-primary">tính tiền</button>
                    </div>
                </div>
                <br>
                <br>

                <div id="infoCustomer" class="profile-card ">

                </div>
                <br>
                <h5 class="mb-2 text-titlecase mb-4">Danh sách hóa đơn  </h5>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="table-responsive pt-3">
                                <table id="table_id" class="display table table-striped project-orders-table">
                                    <thead>
                                    <tr>
                                        <th class="ml-5">Mã hóa đơn</th>
                                        <th>Mã điện kế</th>
                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại </th>
                                        <th>Địa chỉ</th>
                                        <th>CMND </th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody id="data">
                                    @foreach($user as $key=> $item)
                                    <tr>
                                        <td>#{{($item->mahd)}}</td>
                                        <td>{{($item->madk)}}</td>
                                        <td>{{($item->tenkh)}}</td>
                                        <td>{{($item->dt)}}</td>
                                        <td>{{($item->diachi)}}</td>
                                        <td>{{($item->cmnd)}}</td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <button type="button" onclick="editData('{{($item->mahd)}}')" class="btn btn-success btn-sm btn-icon-text mr-3">
                                                    Edit
                                                    <i class="typcn typcn-edit btn-icon-append"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a
                                    href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a
                                    href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrap dashboard</a> templates from Bootstrapdash.com</span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script type="text/javascript" src="{{URL::asset('vendors/js/vendor.bundle.base.js')}}"></script>


<!-- endinject -->
<!-- Plugin js for this page-->
<script type="text/javascript" src="{{URL::asset('vendors/chart.js/Chart.min.js')}}"></script>

<!-- End plugin js for this page-->
<!-- inject:js -->
<script type="text/javascript" src="{{URL::asset('js/off-canvas.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('js/hoverable-collapse.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('js/template.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('js/settings.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('js/todolist.js')}}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script type="text/javascript" src="{{URL::asset('js/dashboard.js')}}"></script>
<script>

    $(document).ready(function () {
        // $.ajax({
        //     url: 'http://localhost/electric/public/dien-ke',
        //     type: 'GET',
        //     data: {
        //     }
        // }).done(function (ketqua) {
        //     ketqua = JSON.parse(ketqua);
        //     console.log(ketqua);
        //     if (ketqua.length > 0) {
        //         var data ='';
        //         for (var i = 0; i < ketqua.length; i++) {
        //             data +=` <tr>
        //                                 <td>`+ketqua[i].makh+`</td>
        //                                 <td>`+ketqua[i].tenkh+`</td>
        //                                 <td>`+ketqua[i].dt+`</td>
        //                                 <td>`+ketqua[i].diachi+`</td>
        //                                 <td>`+ketqua[i].cmnd+`</td>
        //
        //                                 <td>
        //                                     <div class="d-flex align-items-center">
        //                                         <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
        //                                             Edit
        //                                             <i class="typcn typcn-edit btn-icon-append"></i>
        //                                         </button>
        //                                         <button type="button" class="btn btn-danger btn-sm btn-icon-text">
        //                                             Delete
        //                                             <i class="typcn typcn-delete-outline btn-icon-append"></i>
        //                                         </button>
        //                                     </div>
        //                                 </td>
        //                             </tr>`;
        //             $('#data').html(data)
        //         }
        //     } else {
        //         $('#data').html(``);
        //     }
        // });
        $('#table_id').DataTable();
        $('#sodien').click(function () {
            var madk1 = $('#madk').val();

            var request = $.ajax({
                url: 'http://localhost/electric/public/dien-ke',
                type: 'GET',
                data: {
                    madk: madk1,
                }
            }).done(function (ketqua) {
                ketqua = JSON.parse(ketqua);
                if (ketqua.length > 0) {
                    for (var i = 0; i <= ketqua.length; i++) {

                        $('#infoCustomer').html(`<h5 class="mb-2 text-titlecase mb-4">Thông tin khách hàng</h5>
                <div class="card-body bg-gradient-primary">
                <input onClick="closex()" id="closeInfo" class="btn btn-danger" type="submit" value="X" />
                <div class="row align-items-center h-100">
                <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <h5 class="text-white text-center text-md-left"> Mã điện kế : ` + ketqua[i].madk + `</h5>
                <h5 class="text-white text-center text-md-left"> Họ Tên : ` + ketqua[i].tenkh + `</h5>
                <p class="text-white text-center text-md-left"> Địa chỉ : ` + ketqua[i].diachi + `</p>
                <div class="d-flex align-items-center justify-content-between info pt-2">
                    <div>
                        <p class="text-white font-weight-bold"> Điện thoại : ` + ketqua[i].dt + `</p>
                        <p class="text-white font-weight-bold">CMND : ` + ketqua[i].cmnd + `</p>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>
        </div>`)
                    }
                } else {
                    $('#infoCustomer').html(`<p class="text-danger">Mã điện kế không đúng khách hàng không tồn tại </p>`);
                }
            });


        });
        $('#btntinhtien').click(function () {
            var flag = true ;
            var madk1 = $('#madk').val();
            var sodien1 = $('#sodien').val();
            var ky1 = $('#ky').val();
            if(madk1.length == 0 || sodien1.length == 0 || ky1.length == 0 )
            {
                alert('không được để rỗng Mã điện kế , Số điện và kỳ !')
                flag = false;
            }
            if(sodien1 < 0 || ky1 < 0)
            {
                alert('Số điện và kỳ phải lớn hơn 0 ');
                flag = false;
            }
            if(flag == true) {
                $.ajax({
                    url: 'http://localhost/electric/public/dien-ke',
                    type: 'GET',
                    data: {
                        madk: madk1,
                        sodien: sodien1,
                        ky: ky1
                    }
                }).done(function (ketqua) {

                    $('#infoCustomer').html(`<h5 class="mb-2 text-titlecase mb-4">Kết quả tính tiền điện</h5>
                    <div class="card-body bg-gradient-secondary">
                        <input onClick="closex()" id="closeInfo" class="btn btn-danger" type="submit" value="X" />
                        <div class="row align-items-center h-100">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-8">
                                <p class="text-danger text-center text-md-left"> Số điện cũ  :` + ketqua.socu + ` </p>
                                <p class="text-danger text-center text-md-left"> Số điện mới : ` + addCommas(sodien1) + `  </p>
                            <p class="text-danger text-center text-md-left"> Số điện : ` + addCommas(ketqua.sodien) + `  </p>
                                <div class="d-flex align-items-center justify-content-between info pt-2">
                                    <div>
                                        <p class="text-black font-weight-bold">Cách tính : ` + ketqua.output + `</p>
                                        <p class="text-black font-weight-bold">Tổng số tiền : ` + addCommas(ketqua.tiendien) + `VNĐ</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>`);

                    location.reload()
                });


            }
        });

    });

    function addCommas(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }

    function closex() {
        $('#infoCustomer').html('');
        $('#makh').value('');
    }
</script>
<!-- End custom js for this page-->
</body>

</html>

