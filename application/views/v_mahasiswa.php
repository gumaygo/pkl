<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
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
                  <button onclick="window.location.href='<?php echo base_url('/mahasiswa/download'); ?>'" type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                    <i class="mdi mdi-download text-muted"></i>
                  </button>
                  <button onclick="window.location.href='<?php echo base_url('/mahasiswa/history'); ?>'" type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-clock-outline text-muted"></i>
                  </button>
                  <button onclick="window.location.href='<?php echo base_url('/mahasiswa/menu'); ?>'" type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                    <i class="mdi mdi-plus text-muted"></i>
                  </button>
                  <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Recent Request</p>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Permintaan</th>
                          <th>Tanggal</th>
                          <th>Status</th>
                          <th>Aksi</th>

                        </tr>
                      </thead>
                      <tbody>

                        <?php $query = $this->db->query("select request.id, request.npm, request.status,request.surat, permintaan_surat.nama_permintaan, request.id_permintaan, request.nama_orangtua, request.nip_orangtua, request.pekerjaan_orangtua,request.pangkat_orangtua,request.instansi_orangtua, request.alamat_orangtua, request.foto_ukt, request.foto_daftarulang, request.tanggal FROM request INNER JOIN Permintaan_surat on Permintaan_surat.id = request.id_permintaan where request.npm = '".$this->session->userdata("username")."'");
                        $ii=1;
                        foreach ($query->result_array() as $row)
                        {
                          echo "<tr>";
                          echo "<td>".$ii."</td>" ;
                          echo "<td>".$row['nama_permintaan']."</td>" ;
                          echo "<td>".$row['tanggal']."</td>" ;
                          if ($row['status'] == '0') {
                           echo "<td> <label class='badge badge-warning'>Dalam Prosses</label></td>" ;
                         }elseif ($row['status'] == '1') {
                          echo "<td> <label class='badge badge-info'>Dalam Prosses</label></td>" ;
                         }elseif ($row['status'] == '2') {
                           echo "<td> <label class='badge badge-success'>Di Terima</label></td>" ;
                           echo "<td> <a href ='".base_url('files/mahasiswa/').$row['surat']."'>download </td>" 
                           ;
                         }elseif ($row['status'] == '3') {
                           echo "<td> <label class='badge badge-danger '>Di Tolak</label></td>" ;
                         }




                         $ii++;
                       }

                       ?>

                     </tbody>
                   </table>
                 </div>
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

