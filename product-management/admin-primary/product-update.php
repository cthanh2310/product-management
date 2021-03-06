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
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" style="object-fit: cover" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h3 class="text-overflow"><small>Xin ch??o Th??nh!</small> </h3>
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
                            <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-palette"></i> <span> S???n ph???m </span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="product-add.php">Th??m s???n ph???m</a></li>
                                <li><a href="product-delete.php">X??a s???n ph???m</a></li>
                                <li><a href="product-update.php">S???a s???n ph???m</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">More</li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-menu-alt"></i><span> Th???ng k?? S???n ph???m  </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="product-category.php">Lo???i s???n ph???m</a></li>
                                <li><a href="product-supplier.php">Nh?? cung c???p</a></li>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">

                                <table class="table mb-0 table-responsive">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>T??n s???n ph???m</th>
                                        <th>H??nh ???nh</th>
                                        <th>Lo???i sp</th>
                                        <th>Gi?? th??nh</th>
                                        <th>S??? l?????ng</th>
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
                                            <td><a href="" onClick="getDataToUpdate(<?php echo $product["id"]?>)">S???a</a></td>
                                        </tr>
                                    <?php }?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="inputId"  >
                        </div>
                        <div class="form-group">
                            <label for="inputName">T??n sp</label>
                            <input type="text" class="form-control" id="inputName" >
                        </div>
                        <div class="form-group">
                            <label for="inputImg">H??nh ???nh</label>
                            <input type="text" class="form-control" id="inputImg" >
                        </div>
                        <div class="form-group">
                            <label for="inputCategory">Lo???i sp</label>
                            <input type="text" class="form-control" id="inputCategory" >
                        </div>
                        <div class="form-group">
                            <label for="inputPrice">Gi??</label>
                            <input type="text" class="form-control" id="inputPrice" >
                        </div>
                        <div class="form-group">
                            <label for="inputQuantity">S??? l?????ng</label>
                            <input type="text" class="form-control" id="inputQuantity" >
                        </div>
                        <button type="submit" class="btn btn-primary" onClick="updateProduct()" >S???a</button>
                    </form>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
            <div class="modal" tabindex="-1" style="top: 20%;" id="show-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Th??nh c??ng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="font-weight-bolder">C???p nh???t th??nh c??ng</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onClick="reload()">?????ng ??</button>
                </div>
                </div>
            </div>
        </div>

        </div>
        <!-- END wrapper -->
        <script>
            function getDataToUpdate(id){
                event.preventDefault();
                console.log(id);
                $.ajax({
                    method: "POST",
                    url: "getDataToUpdate.php",
                    data: {
                        id
                    },
                    success: function(response){
                        console.log(response);
                        let obj = JSON.parse(response);
                        console.log("obj", obj);
                        document.getElementById('inputId').value = obj['id'];
                        document.getElementById('inputName').value = obj['name'];
                        document.getElementById('inputImg').value = obj['image'];
                        document.getElementById('inputCategory').value = obj['type'];
                        document.getElementById('inputPrice').value = obj['price'];
                        document.getElementById('inputQuantity').value = obj['quantity'];
                    }
                })
            }
            function updateProduct(){
                event.preventDefault();
                let id = document.getElementById('inputId').value;
                let name = document.getElementById('inputName').value;
                let image = document.getElementById('inputImg').value;
                let category = document.getElementById('inputCategory').value;
                let price = document.getElementById('inputPrice').value;
                let quantity = document.getElementById('inputQuantity').value;
                $.ajax({
                    method: "POST",
                    url: "updateProductMiddleware.php",
                    data: {
                        id,
                        name,
                        image,
                        category,
                        price,
                        quantity,
                    },
                    success: function (response) {
                        console.log(response);
                        document.getElementById('show-modal').style.display = 'block';
                    }
                })

            }
            function reload(){
                window.location.reload();
            }


        </script>







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