<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location:login.php');
    exit();
}
?>

<!DOCTYPE html>

<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Home</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for blank page layout" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        <style>
            .kotak{
            
                padding: 10px 0;
                text-align: center;
                margin-bottom: 10px;
            }
            .kotak h5{
                color: #fff;
            }
            .content-utama{
                margin-top: 15px;
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                grid-template-rows: repeat(1, 125px);
                gap: 15px;
            }
            .content-utama h4{
                font-weight: bold;
            }
            .content1{
                padding: 5px 10px;
          
                background-color:#f1476c;
                border-top-right-radius:26px ;
            }
            .content2{
                padding: 5px 10px;
                border-top-right-radius:26px ;
              
                background-color:#3aa3fe;
            }
            .content3{
                padding: 5px 10px;
                border-top-right-radius:26px ;
                
                background-color:#fc6201 ;
            }
            .content4{
                padding: 5px 10px;
                border-top-right-radius:26px ;
                /* background-image: linear-gradient(to right,rgb(246,83,124), rgb(253,109,2), steelblue); */
                background-color:#4dc8ac;
            }
            h4{
                color: #222;
            }
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper" >
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top"  style="background-color: rgb(255,255,255)">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo" style="display: flex; align-items:center; margin: top -5px;">
                        <h3 style="color: #222; margin-left:20px;">Informatika</h3>
                        <!-- <a href="index.html">
                            <img src="img/logodafi.jpeg" alt="logo" class="logo-default" /> </a> -->
                        <!-- <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div> -->
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                           
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container"  style="background-color:rgb(255,255,255);">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper"  style="border: 1px solid #a5a5a5;">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse"  style="background-color: rgb(255,255,255);">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px" >
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                           
                      
                         <div  class="kotak" style="margin-top: 10px;">
                            <img src="img/monitor.svg" alt="">
                            <h3>Lab Informatika</h3>
                         </div>
                                
                            <li class="nav-item  mt-1" style="border: 1px solid #a5a5a5; margin-top:32px;">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <img src="img/master.svg" alt="">
                                    <span class="title" >Data Master </span>
                                    <span class="arrow"></span>
                                </a>
        
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="komputer/komputer.php" class="nav-link ">
                        <span class="title"> Komputer</span>
                    </a>
                </li>
                
                <li class="nav-item  ">
                    <a href="mahasiswa/mahasiswa.php" class="nav-link ">
                        <span class="title">Mahasiswa</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="dosen/dosen.php" class="nav-link ">
                        <span class="title">Dosen</span>
                    </a>
                </li>
            <li class="nav-item  ">
                <a href="item/item.php" class="nav-link ">
                    <span class="title">item</span>
              
            </li>
                <li class="nav-item  ">
                        <a href="lab/lab.php" class="nav-link ">
                            <span class="title">lab</span> 
                         </a>
                </li>
                <li class="nav-item  ">
                        <a href="kondisi/kondisi.php" class="nav-link ">
                            <span class="title">lab</span> 
                         </a>
                </li>
                                    
                </ul>
                                </li>

                            <li class="nav-item" style="border: 1px solid #a5a5a5; margin-top:2px;">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <img src="img/transaction.svg" alt="">
                                    <span class="title">Data Transaksi</span>
                                    <span class="arrow"></span>
                                </a>
                           
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="ui_metronic_grid.html" class="nav-link ">
                                            <span class="title"> Komputer</span>
                                        </a>
                                    </li>
                                  
                                    <li class="nav-item  ">
                                        <a href="ui_metronic_grid.html" class="nav-link ">
                                            <span class="title">Detail Komputer</span>
                                        </a>
                                    </li>
                                </ul>
                                </li>

                            <li class="nav-item" style="border: 1px solid #a5a5a5; margin-top:2px;">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <img src="img/reports.svg" alt="">
                                    <span class="title">Laporan</span>
                                    <span class="arrow"></span>
                                </a>
                           
                                <ul class="sub-menu">
                                    <li class="nav-item  ">
                                        <a href="ui_metronic_grid.html" class="nav-link ">
                                            <span class="title"> Komputer</span>
                                        </a>
                                    </li>
                                  
                                    <li class="nav-item  ">
                                        <a href="ui_metronic_grid.html" class="nav-link ">
                                            <span class="title">Detail Komputer</span>
                                        </a>
                                    </li>
                                </ul>
                                </li>

                            <li class="nav-item" style="border: 1px solid #a5a5a5; margin-top:2px;">
                                <a href="logout.php" class="nav-link nav-toggle">
                                    <img src="img/logout.svg" alt="">
                                    <span class="title">Logout</span>
                                    <span class=""></span>
                                </a>
                                </li>
                               
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content" style="background-color: rgb(235,235,235);" >
                        <!-- BEGIN PAGE HEADER-->
                       
                    
                       
                        <!-- END PAGE HEADER-->
                        <div class="content-utama">
                            <div class="content1">
                                <img src="img/komputericon.svg" alt="">
                                <h4>Komputer</h4>
                            </div>
                            <div class="content2">
                            <img src="img/lab.svg" alt="" style="width: 50px;">
                                <h4 style="margin-top: 17px;">Lab</h4>
                            </div>
                            <div class="content3">
                                <img src="img/user.svg" alt="">
                                <h4 style="margin-top: 0px;">User</h4>
                            </div>
                            <div class="content4">
                                <img style="margin-top: 5px;" src="img/pinjam.svg" alt="">
                                <h4>Peminjam</h4>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
              
            </div>
            <!-- END CONTAINER -->
        </div>
        
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<script src="assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>