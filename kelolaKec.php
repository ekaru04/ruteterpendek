<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rute Terpendek Kabupaten Bondowoso</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
  session_start();
  if($_SESSION['status'] != "login"){
    header("location:kelolaKec.php");
  }
?>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./ruteTerpendek.php" class="brand-link">
      <img src="dist/img/loc.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Rute Terpendek</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Welcome <?php echo $_SESSION['username'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./kelolakec.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Data Kecamatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./tambahjarak.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Data Jarak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./tambahkec.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Kecamatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Rute Terpendek</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-6">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Data Kecamatan
                </h3>
              </div>
            <div class="card-body">
                <div class="tab-content p-0 ">
                  <!-- Morris chart - Sales -->
                  <div class=" active" id=""
                       style="position: relative; ">
                     <table class="table table-responsive">
                        <tr>
                          <th class="text-center">Nomor</th>
                          <th class="text-center">Nama Kecamatan</th>
                          <th colspan="2" class="text-center">Aksi</th>
                          
                        </tr>

                        <?php 
                        include "connection.php";
                        $no=1;
                        $ambildata = mysqli_query($conn, "select * from kecamatan");
                        while ($tampil = mysqli_fetch_array($ambildata)){
                          echo "
                          <tr>
                            <td>$no</td>
                            <td>$tampil[nama_kecamatan]</td>
                            <td><a class='btn btn-success' href='editkec.php?kode=$tampil[id_kecamatan]'>Edit</a></td>
                            <td><a class='btn btn-danger' href='?kode=$tampil[id_kecamatan]'>Hapus</a></td>
                          </tr>";
                          $no++;
                        }
                        ?>

                       
                        

                     </table>

                     <?php  
                     if(isset($_GET['kode'])){
                      mysqli_query($conn, "delete from kecamatan where id_kecamatan='$_GET[kode]'");
                      echo "<meta http-equiv=refresh content=0.1;URL='kelolaKec.php'>";

                      //echo "Data telah terhapus";
                     }
                     ?>

                   </div>
                   


                    <!-- <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas> -->                         
                  </div>  
                </div>
                </div>
              </div>

              <div class="col-lg-6">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Data Jarak
                </h3>
              </div>
            <div class="card-body">
                <div class="tab-content p-0 ">
                  <!-- Morris chart - Sales -->
                  <div class=" active" id=""
                       style="position: relative;">
                     <table class="table table-responsive">
                        <tr>
                          <th class="text-center">Nomor</th>
                          <th class="text-center">Kec. Awal</th>
                          <th class="text-center">Kec. Tujuan</th>
                          <th class="text-center">Jarak(meter)</th>
                          <th colspan="2" class="text-center">Aksi</th>
                        </tr>
                        <?php
                                  
                        $no = 1;
                        $datajarak =  mysqli_query($conn, "select * from jarak");
                        while($jarakkec = mysqli_fetch_array($datajarak)){
                        echo "
                          <tr>
                            <td class='text-center'>$no</td>
                            <td class='text-center'>$jarakkec[kec_awal]</td>
                            <td class='text-center'>$jarakkec[kec_tujuan]</td>
                            <td class='text-center'>$jarakkec[jarak]</td>
                            <td><a class='btn btn-success' href='editjarak.php?kode=$jarakkec[kode_jarak]'>Edit</a></td>
                            <td><a class='btn btn-danger' href='?kode=$jarakkec[kode_jarak]'>Hapus</a></td>
                          </tr>";
                          $no++;
                        } ?>

                     </table>
                     <?php  
                     if(isset($_GET['kode'])){
                      mysqli_query($conn, "delete from jarak where kode_jarak='$_GET[kode]'");
                      echo "<meta http-equiv=refresh content=0.1;URL='kelolaKec.php'>";

                      //echo "Data telah terhapus";
                     }
                     ?>
                      <!-- <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas> -->
                   </div>
                   


                    <!-- <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas> -->                         
                  </div>  
                </div>
                </div>
              </div>
          
          <!-- ./col -->

          <!-- ./col -->
          
          <!-- ./col -->
          
          <!-- ./col -->
      </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
