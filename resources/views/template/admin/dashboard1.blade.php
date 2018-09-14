<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adminkit - Multipurpose bootstrap 4.0 admin templates</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0 -->
<link rel="stylesheet" href="{{ url('dist/bootstrap/css/bootstrap.min.css') }}">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{ url('dist/img/favicon-16x16.png') }}">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{ url('dist/css/style.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/et-line-font/et-line-font.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/simple-lineicon/simple-line-icons.css') }}">

<!-- Chartist CSS -->
<link rel="stylesheet" href="{{ url('dist/plugins/chartist-js/chartist.min.css') }}">
<link rel="stylesheet" href="{{ url('dist/plugins/chartist-js/chartist-plugin-tooltip.css') }}">

<!-- HTML5 Shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
<![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <header class="main-header"> 
    <!-- Logo --> 
    <a href="index.html" class="logo blue-bg"> 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"><img src="{{ url('dist/img/logo-n.png') }}" alt=""></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg"><img src="{{ url('dist/img/logo.png') }}" alt=""></span> </a> 
    <!-- Header Navbar -->
    <nav class="navbar blue-bg navbar-static-top"> 
      <!-- Sidebar toggle button-->
      <ul class="nav navbar-nav pull-left">
        <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
      </ul>
      <div class="pull-left search-box">
        <form action="#" method="get" class="search-form">
          <div class="input-group">
            <input name="search" class="form-control" placeholder="" type="text">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
            </span></div>
        </form>
        <!-- search form --> </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages -->
          <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 new messages</li>
              <li>
                <ul class="menu">
                  <li><a href="#">
                    <div class="pull-left"><img src="{{ url('dist/img/img1.jpg') }}" class="img-circle" alt="User Image"> <span class="profile-status online pull-right"></span></div>
                    <h4>Alex C. Patton</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">9:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="{{ url('dist/img/img3.jpg') }}" class="img-circle" alt="User Image"> <span class="profile-status offline pull-right"></span></div>
                    <h4>Nikolaj S. Henriksen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">10:15 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="{{ url('dist/img/img2.jpg') }}" class="img-circle" alt="User Image"> <span class="profile-status away pull-right"></span></div>
                    <h4>Kasper S. Jessen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">8:45 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="{{ url('dist/img/img4.jpg') }}" class="img-circle" alt="User Image"> <span class="profile-status busy pull-right"></span></div>
                    <h4>Florence S. Kasper</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">12:15 AM</span></p>
                    </a></li>
                </ul>
              </li>
              <li class="footer"><a href="#">View All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications  -->
          <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notifications</li>
              <li>
                <ul class="menu">
                  <li><a href="#">
                    <div class="pull-left icon-circle red"><i class="icon-lightbulb"></i></div>
                    <h4>Alex C. Patton</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">9:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle blue"><i class="fa fa-coffee"></i></div>
                    <h4>Nikolaj S. Henriksen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">1:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle green"><i class="fa fa-paperclip"></i></div>
                    <h4>Kasper S. Jessen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">9:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle yellow"><i class="fa  fa-plane"></i></div>
                    <h4>Florence S. Kasper</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">11:10 AM</span></p>
                    </a></li>
                </ul>
              </li>
              <li class="footer"><a href="#">Check all Notifications</a></li>
            </ul>
          </li>
          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{ url('dist/img/img1.jpg') }}" class="user-image" alt="User Image"> <span class="hidden-xs">{{ Session::get('SessionAdminData')['nama'] }}</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="{{ url('dist/img/img1.jpg') }}" class="img-responsive img-circle" alt="User"></div>
                <p class="text-left">Florence Douglas <small>florence@gmail.com</small> </p>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
              <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
              <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    <!-- sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar user panel -->
     
      <br/>
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Main</li>
        <li><a href="index.html"><i class="icon-home"></i> Dashboard </a></li>
        <li class="treeview"> <a href="#"> <i class="icon-paper-clip"></i> <span>Informasi Desa</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="icon-layers"></i> Informasi Desa </a></li>
            <li><a href="index-crm.html"><i class="icon-menu"></i> Daftar Dusun </a></li>
            <li><a href="index-analytics.html"><i class="icon-direction"></i> Pegawai </a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="icon-people"></i> <span>Penduduk Desa</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="icon-menu"></i> Daftar Penduduk </a></li>
            <li><a href="index-crm.html"><i class="icon-user-following"></i> Daftar Keluarga </a></li>
            <li><a href="index-analytics.html"><i class="icon-user-follow"></i> Siap Pemilu </a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="icon-envelope-open"></i> <span>Surat dan Ijin</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="icon-note"></i> Pembuatan Surat </a></li>
            <li><a href="index-crm.html"><i class="icon-share-alt"></i> Pengajuan Surat </a></li>
            <li><a href="index-analytics.html"><i class="icon-printer"></i> Cetak Surat Manual </a></li>
          </ul>
        </li>
        <li class="treeview"> <a href="#"> <i class="icon-support"></i> <span>Laporan dan Statistik</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="icon-tag"></i> Laporan Warga </a></li>
            <li><a href="index-crm.html"><i class="icon-shuffle"></i> Statistik </a></li>
          </ul>
        </li>

        <li class="treeview"> <a href="#"> <i class=" icon-settings"></i> <span>Pengaturan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="icon-tag"></i> Daftar Admin </a></li>
            <li><a href="index-crm.html"><i class="icon-shuffle"></i> Database </a></li>
          </ul>
        </li>
        
      </ul>
    </div>
    <!-- /.sidebar --> 
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Dashboard </li>
      </ol>
    </div>
    
    <!-- Main content -->



    <div class="content">

      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
          <div class="card">
            <div class="card-body box-rounded box-gradient"> <span class="info-box-icon bg-transparent"><i class="ti-user text-white"></i></span>
              <div class="info-box-content">
                <h6 class="info-box-text text-white">Data Warga</h6>
                <h1 class="text-white" id="jumlah_data_warga"></h1>
                <span class="progress-description text-white"> Data warga di database </span> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
          <div class="card">
            <div class="card-body box-rounded box-gradient-4"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile text-white"></i></span>
              <div class="info-box-content">
                <h6 class="info-box-text text-white">Admin Desa</h6>
                <h1 class="text-white" id="jumlah_admin_desa"></h1>
                <span class="progress-description text-white"> Total admin desa </span> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
          <div class="card">
            <div class="card-body box-rounded box-gradient-2"> <span class="info-box-icon bg-transparent"><i class="ti-email text-white"></i></span>
              <div class="info-box-content">
                <h6 class="info-box-text text-white">Pengajuan Surat</h6>
                <h1 class="text-white">10</h1>
                <span class="progress-description text-white"> Surat yang belum disetujui </span> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 m-b-3">
          <div class="card">
            <div class="card-body box-rounded box-gradient-3"> <span class="info-box-icon bg-transparent"><i class="ti-id-badge text-white"></i></span>
              <div class="info-box-content">
                <h6 class="info-box-text text-white">Surat Dibuat</h6>
                <h1 class="text-white">30</h1>
                <span class="progress-description text-white"> Total surat yang telah dibuat </span> </div>
            </div>
          </div>
        </div>
      </div>


       <div class="row">
        <div class="col-lg-6">
          <div class="info-box">
            <div class="col-12">
              <div class="d-flex flex-wrap">
                <div class="m-b-3">
                  <h5>Statistik Warga</h5>
                </div>
              </div>
            </div>
            <div class="ct-bar-chart" style="height:350px;"></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info-box">
            <div class="col-12">
              <div class="d-flex flex-wrap">
                <div class="m-b-3">
                  <h5>Pengunjung Harian</h5>
                </div>
              </div>
            </div>
            <div class="ct-line-area-chart" style="height:350px;"></div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    <div class="row">
        <div class="col-lg-12 m-b-3">
          <div class="box box-info">
            <div class="box-header with-border p-t-1">
              <h3 class="box-title text-black">Pengajuan Surat</h3>
              <div class="pull-right"> <a href="#">View More <i class="fa fa-long-arrow-right"></i></a> </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                    <tr>
                      <th>Patient ID</th>
                      <th>Patient Name</th>
                      <th>Age</th>
                      <th>Doctor Name</th>
                      <th>Date</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#">OR9842</a></td>
                      <td>John Deo</td>
                      <td>45</td>
                      <td>John Deo</td>
                      <td> 12-05-2018 </td>
                      <td><span class="label label-success">view</span></td>
                    </tr>
                    <tr>
                      <td><a href="#">OR1848</a></td>
                      <td>Sr. John Deo</td>
                      <td>25</td>
                      <td>Sr. John Deo</td>
                      <td>12-05-2018 </td>
                      <td><span class="label label-primary">view</span></td>
                    </tr>
                    <tr>
                      <td><a href="#">OR7429</a></td>
                      <td>Sr. John Deo</td>
                      <td>32</td>
                      <td>Sr. John Deo</td>
                      <td>12-05-2018 </td>
                      <td><span class="label label-warning">view</span></td>
                    </tr>
                    <tr>
                      <td><a href="#">OR7429</a></td>
                      <td>John Deo</td>
                      <td>30</td>
                      <td>John Deo</td>
                      <td>12-05-2018 </td>
                      <td><span class="label label-success">view</span></td>
                    </tr>
                    <tr>
                      <td><a href="#">OR1848</a></td>
                      <td>Sr. John Deo</td>
                      <td>25</td>
                      <td>Sr. John Deo</td>
                      <td>12-05-2018 </td>
                      <td><span class="label label-success">view</span></td>
                    </tr>
                    <tr>
                      <td><a href="#">OR7429</a></td>
                      <td>John Deo</td>
                      <td>36</td>
                      <td>John Deo</td>
                      <td>12-05-2018 </td>
                      <td><span class="label label-default">view</span></td>
                    </tr>
                    <tr>
                      <td><a href="#">OR9842</a></td>
                      <td>Sr. John Deo</td>
                      <td>42</td>
                      <td>Sr. John Deo</td>
                      <td>12-05-2018</td>
                      <td><span class="label label-success">view</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive --> 
            </div>
          </div>
        </div>
      </div>



    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2018 Sidesa. MIT License.</footer>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="{{ url('dist/js/jquery.min.js') }}"></script>
 
<script src="{{ url('dist/plugins/popper/popper.min.js') }}"></script>

<!-- v4.0.0-alpha.6 -->
<script src="{{ url('dist/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- template --> 
<script src="{{ url('dist/js/adminkit.js') }}"></script>

<!-- Chart Peity JavaScript --> 
<script src="{{ url('dist/plugins/peity/jquery.peity.min.js') }}"></script> 
<script src="{{ url('dist/plugins/functions/jquery.peity.init.js') }}"></script>


<!-- Chartist JavaScript --> 
<script src="{{ url('dist/plugins/chartist-js/chartist.min.js') }}"></script> 
<script src="{{ url('dist/plugins/chartist-js/chartist-plugin-tooltip.js') }}"></script> 
<script src="{{ url('dist/plugins/functions/chartist-init.js') }}"></script>

<script type="text/javascript">
  
  $.ajax({

    url : '/api/admin/main_data',
    type : 'GET',
    dataType : 'JSON',
    success : function(data){
      $('#jumlah_data_warga').html(data.jumlah_db_warga);
      $('#jumlah_admin_desa').html(data.jumlah_db_admin);
    },
    error : function()
    {
        console.log('tidak bisa mengambil main data');
    }

  });

</script>

</body>
</html>
