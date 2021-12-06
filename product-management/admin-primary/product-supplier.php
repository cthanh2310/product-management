<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <!-- DataTables -->
        <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />

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
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Danh sách nhà cung cấp</h4>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên NCC</th>
                                            <th>Số điện thoại</th>
                                            <th>Địa chỉ</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        <tr>
                                            <td>000</td>
                                            <td>Phúc Long</td>
                                            <td>0977291294</td>
                                            <td>Gò vấp, Hồ Chí Minh city</td>
                                        </tr>
                                        <tr>
                                            <td>001</td>
                                            <td>Hảo Hảo</td>
                                            <td>09772294</td>
                                            <td>Thủ Dầu 1, Bình Dương</td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>Chinsu</td>
                                            <td>033111294</td>
                                            <td>Hà Đông, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>003</td>
                                            <td>Phomusa</td>
                                            <td>097723294</td>
                                            <td>Hương Khê, Hà Tĩnh</td>
                                        </tr>
                                        <tr>
                                            <td>004</td>
                                            <td>Sếu đỏ</td>
                                            <td>0333211294</td>
                                            <td>Thường Tín, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>005</td>
                                            <td>Kim Á</td>
                                            <td>097591294</td>
                                            <td>Đình Thôn, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>Chinsu</td>
                                            <td>033111294</td>
                                            <td>Hà Đông, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>003</td>
                                            <td>Phomusa</td>
                                            <td>097723294</td>
                                            <td>Hương Khê, Hà Tĩnh</td>
                                        </tr>
                                        <tr>
                                            <td>004</td>
                                            <td>Sếu đỏ</td>
                                            <td>0333211294</td>
                                            <td>Thường Tín, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>005</td>
                                            <td>Kim Á</td>
                                            <td>097591294</td>
                                            <td>Đình Thôn, Hà Nội</td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>Chinsu</td>
                                            <td>033111294</td>
                                            <td>Hà Đông, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>003</td>
                                            <td>Phomusa</td>
                                            <td>097723294</td>
                                            <td>Hương Khê, Hà Tĩnh</td>
                                        </tr>
                                        <tr>
                                            <td>004</td>
                                            <td>Sếu đỏ</td>
                                            <td>0333211294</td>
                                            <td>Thường Tín, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>005</td>
                                            <td>Kim Á</td>
                                            <td>097591294</td>
                                            <td>Đình Thôn, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>Chinsu</td>
                                            <td>033111294</td>
                                            <td>Hà Đông, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>003</td>
                                            <td>Phomusa</td>
                                            <td>097723294</td>
                                            <td>Hương Khê, Hà Tĩnh</td>
                                        </tr>
                                        <tr>
                                            <td>004</td>
                                            <td>Sếu đỏ</td>
                                            <td>0333211294</td>
                                            <td>Thường Tín, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>005</td>
                                            <td>Kim Á</td>
                                            <td>097591294</td>
                                            <td>Đình Thôn, Hà Nội</td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>Chinsu</td>
                                            <td>033111294</td>
                                            <td>Hà Đông, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>003</td>
                                            <td>Phomusa</td>
                                            <td>097723294</td>
                                            <td>Hương Khê, Hà Tĩnh</td>
                                        </tr>
                                        <tr>
                                            <td>004</td>
                                            <td>Sếu đỏ</td>
                                            <td>0333211294</td>
                                            <td>Thường Tín, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>005</td>
                                            <td>Kim Á</td>
                                            <td>097591294</td>
                                            <td>Đình Thôn, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>002</td>
                                            <td>Chinsu</td>
                                            <td>033111294</td>
                                            <td>Hà Đông, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>003</td>
                                            <td>Phomusa</td>
                                            <td>097723294</td>
                                            <td>Hương Khê, Hà Tĩnh</td>
                                        </tr>
                                        <tr>
                                            <td>004</td>
                                            <td>Sếu đỏ</td>
                                            <td>0333211294</td>
                                            <td>Thường Tín, Hà Nội</td>
                                        </tr>
                                        <tr>
                                            <td>005</td>
                                            <td>Kim Á</td>
                                            <td>097591294</td>
                                            <td>Đình Thôn, Hà Nội</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

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

        <!-- Required datatable js -->
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../plugins/datatables/jszip.min.js"></script>
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.php5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

    </body>
</html>