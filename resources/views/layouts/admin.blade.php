<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
    <title>LaraTest</title>
    <link href="/css/lib/bootstrap/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="/css/helper.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <style>
        {ul}
        {li}
        ul li ul{
            margin-right: 13px;
        }
    </style>
</head>
<body>
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper">
    <!-- header header  -->
    <div class="header">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- Logo -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b><img src="images/logo.png" alt="homepage" class="dark-logo"/></b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span><img src="images/logo-text.png" alt="homepage" class="dark-logo"/></span>
                </a>
            </div>
            <!-- End Logo -->
            <div class="navbar-collapse">
                <!-- toggle and nav items -->
                <ul class="navbar-nav mr-auto mt-md-0">
                    <!-- This is  -->
                    <li class="nav-item"><a class="nav-link nav-toggler hidden-md-up text-muted  "
                                            href="javascript:void(0)"><i class="mdi mdi-menu"></i></a></li>
                    <li class="nav-item m-l-10"><a class="nav-link sidebartoggler hidden-sm-down text-muted  "
                                                   href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                    <!-- Messages -->
                    <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle text-muted  "
                                                                   href="#" data-toggle="dropdown" aria-haspopup="true"
                                                                   aria-expanded="false"><i class="fa fa-th-large"></i></a>
                        <div class="dropdown-menu animated zoomIn">
                            <ul class="mega-dropdown-menu row">


                                <li class="col-lg-3  m-b-30">
                                    <h4 class="m-b-20">CONTACT US</h4>
                                    <!-- Contact -->
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputname1"
                                                   placeholder="Enter Name"></div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter email"></div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleTextarea" rows="3"
                                                      placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
                                </li>
                                <li class="col-lg-3 col-xlg-3 m-b-30">
                                    <h4 class="m-b-20">List style</h4>
                                    <!-- List style -->
                                    <ul class="list-style-none">
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                    </ul>
                                </li>
                                <li class="col-lg-3 col-xlg-3 m-b-30">
                                    <h4 class="m-b-20">List style</h4>
                                    <!-- List style -->
                                    <ul class="list-style-none">
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                    </ul>
                                </li>
                                <li class="col-lg-3 col-xlg-3 m-b-30">
                                    <h4 class="m-b-20">List style</h4>
                                    <!-- List style -->
                                    <ul class="list-style-none">
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This
                                            Is Another Link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Messages -->
                </ul>
                <!-- User profile and search -->
                <ul class="navbar-nav my-lg-0">

                    <!-- Search -->
                    <li class="nav-item hidden-sm-down search-box"><a class="nav-link hidden-sm-down text-muted  "
                                                                      href="javascript:void(0)"><i
                            class="ti-search"></i></a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i
                                class="ti-close"></i></a></form>
                    </li>
                    <!-- Comment -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
                            <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span>
                                                <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span>
                                                <span class="time">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i>
                                            </div>
                                            <div class="mail-contnet">
                                                <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span>
                                                <span class="time">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                            <div class="mail-contnet">
                                                <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all
                                        notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Comment -->
                    <!-- Messages -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
                            <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"><img src="images/users/5.jpg" alt="user"
                                                                       class="img-circle"> <span
                                                    class="profile-status online pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Michael Qin</h5> <span
                                                    class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"><img src="images/users/2.jpg" alt="user"
                                                                       class="img-circle"> <span
                                                    class="profile-status busy pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>John Doe</h5> <span
                                                    class="mail-desc">I've sung a song! See you at</span> <span
                                                    class="time">9:10 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"><img src="images/users/3.jpg" alt="user"
                                                                       class="img-circle"> <span
                                                    class="profile-status away pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span
                                                    class="time">9:08 AM</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"><img src="images/users/4.jpg" alt="user"
                                                                       class="img-circle"> <span
                                                    class="profile-status offline pull-right"></span></div>
                                            <div class="mail-contnet">
                                                <h5>Michael Qin</h5> <span
                                                    class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all
                                        e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- End Messages -->
                    <!-- Profile -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user"
                                                                           class="profile-pic"/></a>
                        <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                            <ul class="dropdown-user">
                                <li><a href="#"><i class="ti-user"></i> پروفایل کاربری</a></li>
                                <li><a href="#"><i class="ti-settings"></i> تننظیمات</a></li>
                                <li><a href="#"><i class="fa fa-power-off"></i> خروج</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End header header -->
    <!-- Left Sidebar  -->
    <div class="right-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-devider"></li>
                    <li class="nav-label"></li>
                    <li><a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i>
                        <span
                                class="hide-menu">پیشخوان
                        </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="index.html">آمار </a></li>
                            <li><a href="index1.html">وضعیت </a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-users"></i><span
                            class="hide-menu">کاربران</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('admin.users')}}">لیست کاربران</a></li>
                            <li><a href="{{route('admin.user.create')}}">کاربر جدید</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-book"></i><span
                            class="hide-menu">نوشته ها
                        </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="{{route('admin.posts')}}">لیست نوشته ها</a></li>
                            <li><a href="{{route('admin.post.create')}}">نوشته جدید</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tags"></i><span
                            class="hide-menu">دسته بندی ها
                        </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="uc-calender.html">لیست دسته بندی ها</a></li>
                            <li><a href="uc-datamap.html">دسته بندی جدید</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cog"></i><span
                            class="hide-menu">تنظیمات</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="table-bootstrap.html">عمومی</a></li>
                            <li><a href="table-datatable.html">نوشتن</a></li>
                            <li><a href="table-datatable.html">خواندن</a></li>
                            <li><a href="table-datatable.html">کاربران</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </div>
    <!-- End Left Sidebar  -->
    <!-- Page wrapper  -->
    <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">خانه</a></li>
                    <li class="breadcrumb-item ">پیشخوان</li>
                    <li class="breadcrumb-item active">آمار</li>
                </ol>
            </div>
            <!--<div class="col-md-5 align-self-center">-->
            <!--<h3 class="text-primary">پیشخوان</h3>-->
            <!--</div>-->
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                     @yield('content')
                    </div>
                </div>
            </div>
            <!-- /# row -->
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    </div>
    <!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->

<script src="/js/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/js/lib/bootstrap/js/popper.min.js"></script>
<script src="/js/lib/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/js/jquery.slimscroll.js"></script>
<!--Menu sidebar -->
<script src="/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<!--Custom JavaScript -->
<script src="/js/custom.min.js"></script>
<script src="/js/cms.js"></script>
</body>
</html>