<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="WebBanoo">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.php" class="logo"><i class="fas fa-american-sign-language-interpreting"></i> <span>Thanh</span></a>
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" style="object-fit: cover" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h3 class="text-overflow"><small>Xin chào Thành!</small> </h3>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-star-variant"></i> <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-settings"></i> <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout"></i> <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="index.php" class="waves-effect waves-primary"><i
                                    class="ti-home"></i><span> Dashboard </span></a>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-palette"></i> <span> Sản phẩm </span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="product-add.php">Thêm sản phẩm</a></li>
                                <li><a href="product-delete.php">Xóa sản phẩm</a></li>
                                <li><a href="product-update.php">Sửa sản phẩm</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">More</li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-menu-alt"></i><span> Thống kê Sản phẩm  </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="product-category.php">Loại sản phẩm</a></li>
                                <li><a href="product-supplier.php">Nhà cung cấp</a></li>
                            </ul>
                        </li>

                    </ul>

                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="container" style="margin-top:100px;">
                    <form action="addProductMiddleware.php" method="POST">
                        <div class="form-group">
                            <label for="inputName">Tên sp</label>
                            <input type="text" class="form-control" name="name" id="inputName" >
                        </div>
                        <div class="form-group">
                            <label for="inputImg">Hình ảnh</label>
                            <input type="text" class="form-control" name="image" id="inputImg" >
                        </div>
                        <div class="form-group">
                            <label for="inputCategory">Loại sp</label>
                            <!-- <input type="text" class="form-control" name="type" id="inputCategory" > -->
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Chọn loại sản phẩm
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-item" href="#" style="cursor: pointer">Gia dụng</li>
                                    <li class="dropdown-item" href="#" style="cursor: pointer">Nhu yếu phẩm</li>
                                    <li class="dropdown-item" href="#" style="cursor: pointer">Nội thất</li>
                                    <li class="dropdown-item" href="#" style="cursor: pointer">Ăn uống</li>
                                    <li class="dropdown-item" href="#" style="cursor: pointer">Liên lạc</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPrice">Giá</label>
                            <input type="text" class="form-control" name="price" id="inputPrice" >
                        </div>
                        <div class="form-group">
                            <label for="inputQuantity">Số lượng</label>
                            <input type="text" class="form-control" name="quantity" id="inputQuantity" >
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>