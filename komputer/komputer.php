<?php
require 'config.php';
$komputer = mysqli_query(
    $koneksi,
    'SELECT komputer.id_komputer, nama_komputer, nama_item FROM itemkom JOIN komputer ON itemkom.id_item=komputer.item_id'
);
?>
<!DOCTYPE html>
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
        
        <link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">

        
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
       
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
    
        <style>
            .kotak{
            
                padding: 10px 0;
                text-align: center;
                margin-bottom: 10px;
            }
            .kotak-cari{
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            .kotak-cari button{
                background-color: steelblue;
                color: #fff;
                border: none;
                padding: 5px;
                border-radius: 5px;
            }
            .kotak h5{
                color: #fff;
            }
                .content-utama{
                    margin-top: 1px;
                    height: 500px;
                    background-color: #fff;
                    border-top-left-radius: 15px;
                    border-top-right-radius: 15px;
                }
                table{
                    width: 100%;
                }
                td{
                    text-align:center;
                }
                th{
                   background-color: steelblue;
                   color: white;
                   text-align: center;
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
                        <h3 style="color: #222; margin-left:-450px;">Informatika</h3>
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
                            <img src="../img/monitor.svg" alt="">
                            <h3>Lab Informatika</h3>
                         </div>
                                
                            <li class="nav-item  mt-1" style="border: 1px solid #a5a5a5; margin-top:32px;">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                <img src="../img/master.svg" alt="">
                                    <span class="title" >Data Master </span>
                                    <span class="arrow"></span>
                                </a>
                           
                                <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="../komputer/komputer.php" class="nav-link ">
                        <span class="title"> Komputer</span>
                    </a>
                </li>
                
                <li class="nav-item  ">
                    <a href="../mahasiswa/mahasiswa.php" class="nav-link ">
                        <span class="title">Mahasiswa</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="../dosen/dosen.php" class="nav-link ">
                        <span class="title">Dosen</span>
                    </a>
                </li>
            <li class="nav-item  ">
                <a href="../item/item.php" class="nav-link ">
                    <span class="title">item</span>
              
            </li>
            <li class="nav-item  ">
                        <a href="../kondisi/kondisi.php" class="nav-link ">
                            <span class="title">Kondis</span> 
                         </a>
                </li>
                <li class="nav-item  ">
                        <a href="../lab/lab.php" class="nav-link ">
                            <span class="title">lab</span> 
                         </a>
                </li>
                                    
                </ul>
                                </li>

                            <li class="nav-item" style="border: 1px solid #a5a5a5; margin-top:2px;">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <img src="../img/transaction.svg" alt="">
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
                                    <img src="../img/reports.svg" alt="">
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
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <img src="../img/logout.svg" alt="">
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
                        <div class="kotak-cari">
                         <div class="tambah">
                            <!-- Button trigger modal -->
                      
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">
                                Tambah Data
                                </button>
                                
                         </div>
                         <div class="tambah">
                            <input type="text">
                            <button>Cari</button>
                            <button>Refresh</button>
                         </div>
                        </div>


                        <div class="content-utama">
                          <table  class="table table-striped">
                            <tr>
                                <th>No</th>
                                <th>nama komputer.</th>
                                <th>nama item</th>
                                <th>Aksi</th>
                            </tr>
                            <?php $i = 1; ?>
                            <?php while (
                                $row = mysqli_fetch_assoc($komputer)
                            ): ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['nama_komputer'] ?></td>
                                <td><?= $row['nama_item'] ?></td>
                                <td>  
                                    <a href="hapus.php?hapus=<?= $row[
                                        'id_komputer'
                                    ] ?>" onclick ="return confirm ('apakah ingin dihapus ?')">
                                        <button type="button" class="btn btn-primary" >
                                    hapus
                                    </button>
                                    </a>
                                    <a href="ubah.php?ubah=<?= $row[
                                        'id_komputer'
                                    ] ?>">
                                        <button type="button" class="btn btn-primary" >
                                    ubah
                                    </button>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            <?php endwhile; ?>
                          </table>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
              
            </div>
            <!-- END CONTAINER -->
        </div>

           <!-- Modal -->
<div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="tambah data" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambah data">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="tambah.php" method="post">

        <div class="form-group">
            <label for="id_komputer">id komputer</label>
            <input type="text" class="form-control" id="id_komputer" name="id_komputer">
        </div>
        <div class="form-group">
            <label for="nama_komputer">Nama Komputer</label>
            <input type="nama_komputer" class="form-control" id="nama_komputer" name="nama_komputer">
        </div>
        <div class="form-group">
            <label for="nama_item">Nama Item</label>
            <select name="nama_item">
         <option>pilih</option>
        <?php $itemkom = mysqli_query($koneksi, 'SELECT * FROM itemkom'); ?>
            <?php while ($row = mysqli_fetch_assoc($itemkom)): ?>
            <option value="<?= $row['id_item'] ?>"><?= $row[
    'nama_item'
] ?></option>
             <?php endwhile; ?>
        </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>


  

        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
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