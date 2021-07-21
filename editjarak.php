<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rute Terpendek</title>
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
    header("location:editjarak.php");
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
                <a href="./tambahjarak.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                ADMIN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./login.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Jarak</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      	<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12">
            	<div class="card">
            		<div class="card-header">
                		<h3 class="card-title">
                  			<i class="fas fa-chart-pie mr-1"></i>
                  Edit Data
                		</h3>
              		</div>

              		<div class="card-body">
                		<div class="tab-content p-0 ">

	                <?php 
									include "connection.php";
									$sql = mysqli_query($conn, "select * from jarak where kode_jarak='$_GET[kode]'");
									$data = mysqli_fetch_array($sql);
									?>

									<form action="" method="post">
										<div class="row">
											<div class="form-group col-6 col-sm-6">
										    <label>Kecamatan Awal</label>
										    <input class="form-control" type="text" name="kec_awal" value="<?php echo $data['kec_awal']; ?>">
                        <label>Kecamatan Tujuan</label>
                        <input class="form-control" type="text" name="kec_tujuan" value="<?php echo $data['kec_tujuan']; ?>">
											</div>

                      <div class="form-group col-6 col-sm-6">
                        <label>Jarak (Satuan Meter)</label>
                        <input class="form-control" type="text" name="jarak" value="<?php echo $data['jarak']; ?>">
                      </div>

                      <div>
										    <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                      </div>
										</div>
									</form>

									<?php  
									include "connection.php";
									if (isset($_POST['proses'])) {
										mysqli_query($conn, "update jarak set
											kec_awal = '$_POST[kec_awal]',
                      kec_tujuan = '$_POST[kec_tujuan]',
                      jarak = '$_POST[jarak]'
											where kode_jarak = '$_GET[kode]'");

										echo "<meta http-equiv=refresh content=0.1;URL='kelolaKec.php'>";
									}
									?>

	              		</div>
	          		</div>

          		</div>
      		</div>
  		</div>
		</div>
	</section>

