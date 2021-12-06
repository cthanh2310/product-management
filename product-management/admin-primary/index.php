<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Pham Cong Thanh">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="../plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

        <script src="assets/js/modernizr.min.js"></script>

        
    </head>
<?php
    $servername = "localhost";
    $password = "";
    $username = "root";
    $dbname = "product_managament";
    $conn = new mysqli($servername, $username,$password, $dbname);
    $list = "select * from product";
    $sql = $conn->query($list); // get data
    if($sql->num_rows > 0){   // if sql have value > 0 --> loop
        while($row = $sql->fetch_assoc()){
            $listProduct[] = $row;
        }
    }
?>

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
                        <li class="nav-item list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" style="object-fit: cover" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h3 class="text-overflow"><small>Xin chào Thành!</small> </h3>
                                </div>
    
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-star-variant"></i> <span>Profile</span>
                                </a>
    
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="mdi mdi-settings"></i> <span>Settings</span>
                                </a>
    
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout"></i> <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="nav-item float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="nav-item hide-phone app-search">
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
                        <ul class="list-unstyled">
                            <li class="nav-item menu-title">Main</li>

                            <li>
                                <a href="index.php" class="nav-link waves-effect waves-primary"><i
                                        class="ti-home"></i><span> Dashboard </span></a>
                            </li>

                            <li class="nav-item has_sub">
                                <a href="#" class="nav-link waves-effect waves-primary"><i class="ti-palette"></i> <span> Sản phẩm </span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="product-add.php">Thêm sản phẩm</a></li>
                                    <li><a href="product-delete.php">Xóa sản phẩm</a></li>
                                    <li><a href="product-update.php">Sửa sản phẩm</a></li>
                                </ul>
                            </li>

                            <li class="nav-item menu-title">More</li>

                            <li class="nav-item has_sub">
                                <a href="#" class="nav-link waves-effect waves-primary"><i class="ti-menu-alt"></i><span> Thống kê Sản phẩm  </span> <span class="menu-arrow"></span></a>
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
                                    <h4 class="page-title">Welcome !</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="nav-item breadcrumb-item"><a href="#">Pham Cong Thanh</a></li>
                                        <li class="nav-item breadcrumb-item active">Dashboard</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                              <div class="widget-bg-color-icon card-box">
                                  <div class="bg-icon bg-icon-success float-left m-r-5">
                                      <i class="fa fa-users text-success"></i>
                                  </div>
                                  <div class="m-l-5">
                                      <h3 class="text-dark m-t-10"><b>123</b></h3>
                                      <p class="text-muted mb-0">Sản phẩm</p>
                                  </div>
                                  <div class="clearfix"></div>
                              </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                              <div class="widget-bg-color-icon card-box">
                                  <div class="bg-icon bg-icon-primary float-left m-r-5">
                                      <i class="fa fa-usd text-success"></i>
                                  </div>
                                  <div class="m-l-5">
                                      <h3 class="text-dark m-t-10"><b>23,122,213đ</b></h3>
                                      <p class="text-muted mb-0">Doanh thu</p>
                                  </div>
                                  <div class="clearfix"></div>
                              </div>
                            </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">

                                <table class="table mb-0 table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Loại sp</th>
                                        <th>Giá thành</th>
                                        <th>Số lượng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($listProduct as $product){?>
                                        <tr>
                                            <th scope="row"><?php echo $product["id"]?></th>
                                            <td><?php echo $product["name"]?></td>
                                            <td><img src="<?php echo $product["image"]?>" style="width: 66px; height: 50px" alt=""></td>
                                            <td><?php echo $product["type"]?></td>
                                            <td><?php echo $product["price"]?></td>
                                            <td><?php echo $product["quantity"]?></td>
                                        </tr>
                                    <?php }?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end container -->
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

        <!-- Counter Up  -->
        <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!-- circliful Chart -->
        <script src="../plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- skycons -->
        <script src="../plugins/skyicons/skycons.min.js" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            // BEGIN SVG WEATHER ICON
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                        {"color": "#3bafda"},
                        {"resizeClear": true}
                        ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            };

        </script>


    </body>
</html>