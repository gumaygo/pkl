<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <style type="text/css">
    <!--
    body { font-family: Arial; font-size: 22.2px }
    .pos { position: absolute; z-index: 0; left: 0px; top: 0px }
    -->
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Majestic Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url('/assets/'); ?>images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="<?php echo base_url('login'); ?>"><img src="<?php echo base_url('/assets/'); ?>images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="<?php echo base_url('/login/'); ?>"><img src="<?php echo base_url('/assets/'); ?>images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-4 w-100">
          <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-1">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="<?php echo base_url('/assets/'); ?>#" data-toggle="dropdown">
              <i class="mdi mdi-message-text mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <img src="<?php echo base_url('/assets/'); ?>images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <img src="<?php echo base_url('/assets/'); ?>images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <img src="<?php echo base_url('/assets/'); ?>images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="item-content flex-grow">
                  <h6 class="ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="<?php echo base_url('/assets/'); ?>#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo base_url('/assets/'); ?>#" data-toggle="dropdown" id="profileDropdown">
              <img src="<?php echo base_url('/assets/'); ?>images/faces/face5.jpg" alt="profile"/>
              <span class="nav-profile-name"><?php echo $this->session->userdata("nama"); ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a href="<?php echo base_url('/login/logout'); ?>" class="dropdown-item">
                <i  class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/assets/'); ?>pages/forms/basic_elements.html">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Form elements</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/assets/'); ?>pages/charts/chartjs.html">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/assets/'); ?>pages/tables/basic-table.html">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/assets/'); ?>pages/icons/mdi.html">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="<?php echo base_url('/assets/'); ?>#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('/assets/'); ?>pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('/assets/'); ?>pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('/assets/'); ?>pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('/assets/'); ?>pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('/assets/'); ?>pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/assets/'); ?>documentation/documentation.html">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Welcome back,</h2>
                    <p class="mb-md-0">Your analytics dashboard template.</p>
                  </div>
                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                    <p class="text-primary mb-0 hover-cursor">Analytics</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                  <button onclick="window.location.href=''" type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button onclick="window.location.href=''" type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>
                  <button onclick="window.location.href=''" type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button>
                  <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                </div>
              </div>
            </div>
          </div>
          
<?php $query = $this->db->query("select request.id, request.npm, request.status, mahasiswa.nama, mahasiswa.semester, mahasiswa.prodi, mahasiswa.jurusan, mahasiswa.alamat, permintaan_surat.nama_permintaan, request.id_permintaan, request.nama_orangtua, request.nip_orangtua, request.pekerjaan_orangtua, request.pangkat_orangtua,request.instansi_orangtua, request.alamat_orangtua, request.foto_ukt, request.foto_daftarulang, request.tanggal FROM request INNER JOIN Permintaan_surat on Permintaan_surat.id = request.id_permintaan JOIN mahasiswa ON mahasiswa.npm = request.npm where request.id = '".$id_nyaadalah."'");

                          foreach ($query->result_array() as $row)
                        {
                          $id_request=$row['id'];
                          $npm = $row['npm'];
                          $nama = $row['nama'];
                          $semester = $row['semester'];
                          $prodi = $row['prodi'];
                          $jurusan = $row['jurusan'];
                          $alamat =$row['alamat'];
                          $nama_orangtua = $row['nama_orangtua'];
                          $nip_orangtua = $row['alamat_orangtua'];
                          $pekerjaan_orangtua = $row['pekerjaan_orangtua'];
                          $pangkat_orangtua = $row['pangkat_orangtua'];
                          $instansi_orangtua = $row['instansi_orangtua'];
                          $alamat_orangtua = $row['alamat_orangtua'];
                          $foto_daftarulang = $row['foto_daftarulang'];
                          $foto_ukt = $row['foto_ukt'];

                        }



?>

          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Recent Request</p>
                  </br></br></br></br></br></br></br></br></br></br></br></br>
                  <nobr><nowrap>
    <div class="pos" id="_0:0" style="top:0">
      <img name="_1170:828" src="<?php echo base_url('/assets/'); ?>page_001.jpg" height="1170" width="828" border="0" usemap="#Map"></div>
      <div class="pos" id="_527:63" style="top:63;left:527">
        <span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
        Halaman</span>
      </div>
      <div class="pos" id="_640:63" style="top:63;left:640">
        <span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
        1 dari 1</span>
      </div>
      <div class="pos" id="_341:72" style="top:72;left:341">
        <span id="_19.1" style="font-weight:bold; font-family:Times New Roman; font-size:19.1px; color:#000000">
        Form</span>
      </div>
      <div class="pos" id="_527:85" style="top:85;left:527">
        <span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
        No Dok.</span>
      </div>
      <div class="pos" id="_640:85" style="top:85;left:640">
        <span id="_13.9" style=" font-family:Arial; font-size:13.9px; color:#000000">
        F-..............</span>
      </div>
      <div class="pos" id="_245:107" style="top:107;left:245">
        <span id="_21.5" style="font-weight:bold; font-family:Times New Roman; font-size:21.5px; color:#000000">
        Surat Keterangan Masih </span>
      </div>
      <div class="pos" id="_527:107" style="top:107;left:527">
        <span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
        Revisi</span>
      </div>
      <div class="pos" id="_640:107" style="top:107;left:640">
        <span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
        0</span>
      </div>
      <div class="pos" id="_334:130" style="top:130;left:334">
        <span id="_19.1" style="font-weight:bold; font-family:Times New Roman; font-size:19.1px; color:#000000">
        Kuliah</span>
      </div>
      <div class="pos" id="_527:131" style="top:131;left:527">
        <span id="_15.0" style=" font-family:Arial; font-size:15.0px; color:#000000">
        Tanggal</span>
      </div>
      <div class="pos" id="_640:131" style="top:131;left:640">
        <span id="_14.0" style=" font-family:Arial; font-size:14.0px; color:#000000">
        ................ 2019</span>
      </div>
      <div class="pos" id="_118:192" style="top:192;left:118">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        Perihal</span>
      </div>
      <div class="pos" id="_218:192" style="top:192;left:218">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :  PERMOHONAN SURAT KETERANGAN MASIH KULIAH</span>
      </div>
      <div class="pos" id="_118:236" style="top:236;left:118">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        Yang Bertanda tangan dibawah ini  :</span>
      </div>
      <div class="pos" id="_143:258" style="top:258;left:143">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        A. DATA MAHASISWA</span>
      </div>
      <div class="pos" id="_171:280" style="top:280;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        1. Nama</span>
      </div>
      <div class="pos" id="_364:280" style="top:280;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_396:280" style="top:280;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        <?php echo $id_nyaadalah; ?></span>
      </div>
      <div class="pos" id="_171:302" style="top:302;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        2. NPM</span>
      </div>
      <div class="pos" id="_364:302" style="top:302;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_396:302" style="top:302;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        <?php echo $npm; ?></span>
      </div>
      <div class="pos" id="_171:324" style="top:324;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        3. Tingkat / Semester</span>
      </div>
      <div class="pos" id="_364:324" style="top:324;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_396:324" style="top:324;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        <?php echo $semester; ?></span>
      </div>
      <div class="pos" id="_171:346" style="top:346;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        4. Jurusan</span>
      </div>
      <div class="pos" id="_364:346" style="top:346;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_396:346" style="top:346;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        Ekonomi dan Bisnis  </span>
      </div>
      <div class="pos" id="_171:368" style="top:368;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        5. Program Studi</span>
      </div>
      <div class="pos" id="_364:368" style="top:368;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_396:368" style="top:368;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
       <?php echo $prodi; ?></span>
      </div>
      <div class="pos" id="_171:390" style="top:390;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        6. Alamat / Tempat Tinggal    :</span>
      </div>
      <div class="pos" id="_396:390" style="top:390;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        ...........................................................................</span>
      </div>
      <div class="pos" id="_396:412" style="top:412;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        ...........................................................................</span>
      </div>
      <div class="pos" id="_396:434" style="top:434;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        ...........................................................................</span>
      </div>
      <div class="pos" id="_143:456" style="top:456;left:143">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        B. DATA ORANG TUA</span>
      </div>
      <div class="pos" id="_364:456" style="top:456;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_171:479" style="top:479;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        1. Nama</span>
      </div>
      <div class="pos" id="_364:479" style="top:479;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_396:479" style="top:479;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        <?php echo $nama_orangtua; ?></span>
      </div>
      <div class="pos" id="_171:501" style="top:501;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        2. NIP/NRP</span>
      </div>
      <div class="pos" id="_364:501" style="top:501;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_396:501" style="top:501;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        <?php echo $nip_orangtua; ?></span>
      </div>
      <div class="pos" id="_171:523" style="top:523;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        3. Pekerjaan</span>
      </div>
      <div class="pos" id="_364:523" style="top:523;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_396:523" style="top:523;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        <?php echo $pekerjaan_orangtua; ?></span>
      </div>
      <div class="pos" id="_171:545" style="top:545;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        4. Pangkat/Golongan</span>
      </div>
      <div class="pos" id="_364:545" style="top:545;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_396:545" style="top:545;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        <?php echo $pangkat_orangtua; ?></span>
      </div>
      <div class="pos" id="_171:567" style="top:567;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        5. Instansi</span>
      </div>
      <div class="pos" id="_364:567" style="top:567;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_396:567" style="top:567;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        <?php echo $instansi_orangtua; ?></span>
      </div>
      <div class="pos" id="_171:589" style="top:589;left:171">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        6. Alamat Orang Tua</span>
      </div>
      <div class="pos" id="_364:589" style="top:589;left:364">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        :</span>
      </div>
      <div class="pos" id="_396:589" style="top:589;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        <?php echo $alamat_orangtua; ?></span>
      </div>
      <div class="pos" id="_396:611" style="top:611;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        ...........................................................................</span>
      </div>
      <div class="pos" id="_396:633" style="top:633;left:396">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        ...........................................................................</span>
      </div>
      <div class="pos" id="_118:677" style="top:677;left:118">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        Syarat yang dilampirkan  :</span>
      </div>
      <div class="pos" id="_132:699" style="top:699;left:132">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        1. Foto Kopi Slip Pembayaran UKT</span>
      </div>
      <div class="pos" id="_132:721" style="top:721;left:132">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        2. Foto copi registrasi</span>
      </div>
      <div class="pos" id="_118:787" style="top:787;left:118">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        Mengetahui,</span>
      </div>
      <div class="pos" id="_393:787" style="top:787;left:393">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        </span>
      </div>
      <div class="pos" id="_468:787" style="top:787;left:468">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        Bandar Lampung</span>
      </div>
      <div class="pos" id="_118:809" style="top:809;left:118">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        Orang Tua</span>
      </div>
      <div class="pos" id="_468:809" style="top:809;left:468">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        Yang Memohon</span>
      </div>
      <div class="pos" id="_118:919" style="top:919;left:118">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        <?php echo $nip_orangtua; ?></span>
      </div>
      <div class="pos" id="_468:919" style="top:919;left:468">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        <?php echo $npm; ?></span>
      </div>
      <div class="pos" id="_118:941" style="top:941;left:118">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        NIP/NRP</span></br></br></br></br></br></br>
        <a href="<?php echo base_url('baakpsi/terima/'). $id_request; ?>"  class="btn btn-success">Setujui</a>
      </div>
      <div class="pos" id="_468:941" style="top:941;left:468">
        <span id="_16.3" style=" font-family:Times New Roman; font-size:16.3px; color:#000000">
        NPM</span>
</br></br></br></br></br></br>
        <a href="<?php echo base_url('baakpsi/tolak/'). $id_request; ?>" class="btn btn-danger">Tolak</a>
      </div>

    </nowrap></nobr></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
               </div>
             </div>
           </div>
         </div> 

       </div>
       <!-- content-wrapper ends -->
       <!-- partial:partials/_footer.html -->
       <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="<?php echo base_url('/assets/'); ?>https://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?php echo base_url('/assets/'); ?>vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="<?php echo base_url('/assets/'); ?>vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url('/assets/'); ?>vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?php echo base_url('/assets/'); ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?php echo base_url('/assets/'); ?>js/off-canvas.js"></script>
<script src="<?php echo base_url('/assets/'); ?>js/hoverable-collapse.js"></script>
<script src="<?php echo base_url('/assets/'); ?>js/template.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo base_url('/assets/'); ?>js/dashboard.js"></script>
<script src="<?php echo base_url('/assets/'); ?>js/data-table.js"></script>
<script src="<?php echo base_url('/assets/'); ?>js/jquery.dataTables.js"></script>
<script src="<?php echo base_url('/assets/'); ?>js/dataTables.bootstrap4.js"></script>
<!-- End custom js for this page-->
</body>

</html>

