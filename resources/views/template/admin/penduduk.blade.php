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

<style type="text/css">
  

.dataTables_filter {
display: none; 
}

</style>

<!-- Theme style -->
<link rel="stylesheet" href="{{ url('dist/css/style.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/et-line-font/et-line-font.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/simple-lineicon/simple-line-icons.css') }}">

<!-- Chartist CSS -->
<link rel="stylesheet" href="{{ url('dist/plugins/chartist-js/chartist.min.css') }}">
<link rel="stylesheet" href="{{ url('dist/plugins/chartist-js/chartist-plugin-tooltip.css') }}">

<link rel="stylesheet" href="{{ url('dist/plugins/datatables/css/dataTables.bootstrap.min.css') }} ">




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
        <li class="treeview"> <a href="#"> <i class="icon-paper-clip"></i> <span>Identitas Desa</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/info-desa/identitas') }}"><i class="icon-layers"></i> Informasi Desa </a></li>
            <li><a href="{{ url('admin/info-desa/wilayah') }}"><i class="icon-menu"></i> Daftar Dusun </a></li>
            <li><a href="{{ url('admin/info-desa/pegawai') }}"><i class="icon-direction"></i> Pegawai </a></li>
          </ul>
        </li>
        <li  class="active treeview"> <a href="#"> <i class="icon-people"></i> <span>Penduduk Desa</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ url('admin/penduduk/list') }}"><i class="icon-menu"></i> Daftar Penduduk </a></li>
            <li><a href="{{ url('admin/penduduk/keluarga') }}"><i class="icon-user-following"></i> Daftar Keluarga </a></li>
            <li><a href="{{ url('admin/penduduk/pemilu') }}"><i class="icon-user-follow"></i> Siap Pemilu </a></li>
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
      <h1>Daftar Penduduk</h1>
      <ol class="breadcrumb">
        <li><a href="#">Informasi Desa</a></li>
        <li><i class="fa fa-angle-right"></i> Daftar Dusun </li>
      </ol>
    </div>
    


    <div class="content">
    <div class="row">
        <div class="col-lg-12 m-b-3">
          
<!-- 

`id`, `nik`, `no_kk`, `nama_lengkap`, `nama_kk`, `tgl_lahir`, `jenis_kelamin`, `tempat_lahir`, `golongan_darah`, `agama`, `status_kawin`, `status_hbkel`, `kelainan`, `penyandang_cacat`, `pendidikan`, `pekerjaan`, `nama_ibu`, `nama_ayah`, `alamat`, `RT`, `RW`, `no_kecamatan`, `nama_kecamatan`, `no_kelurahan`, `nama_kelurahan`SELECT * FROM `data_warga` WHERE 1


-->
<div id="list" class="card m-t-3">
      <div class="card-body">
      <h4 class="text-black">Data Penduduk</h4>
      <p>Data Penduduk Desa Jatisobo</p>

      <br/>

<form id="search_nama" class="form-inline">
  <label class="sr-only" for="inlineFormInput">Cari Nama</label>
  <input id="nama" type="text" class="form-control mb-4 mr-sm-2 mb-sm-0 form-sm" id="inlineFormInput" placeholder="Masukan Nama">

  <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Cari</button>
</form>

      <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Status Kawin</th>
                  <th>Pendidikan</th>
                  <th>Pekerjaan</th>
                  <th>RT</th>
                  <th>RW</th>
                  <th>Alamat</th>
                  <th>Golongan Darah</th>
                </tr>
                </thead>
                <tbody>

               
                </tfoot>
              </table>
                  </div>
      </div></div>
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


<script type="text/javascript">
  
  





  
   
 



</script>

<script src="{{ url('dist/plugins/datatables/jquery.dataTables.min.js') }}"></script> 
<script src="{{ url('dist/plugins/datatables/dataTables.bootstrap.min.js') }}"></script> 
<script>
  
</script>

<script src="{{ url('dist/plugins/table-expo/filesaver.min.js') }}"></script>
<script src="{{ url('dist/plugins/table-expo/xls.core.min.js') }}"></script>
<script src="{{ url('dist/plugins/table-expo/tableexport.js') }}"></script>
<script>
$("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });

 var table = $('#example1').DataTable( {
        "ajax": '/api/admin/get_warga_bynama',
        fixedColumns: true,
        "paging":   false,
        "info":     false

    } );



 $('#search_nama').submit(function(e){

  e.preventDefault();

  var data =  $('#nama').val();

   $('#example1').dataTable().fnClearTable();
    $('#example1').dataTable().fnDestroy();
    $('#example1').DataTable( {
        "ajax": '/api/admin/get_warga_bynama?nama='+data,
        fixedColumns: true,
        "paging":   false,
        "info":     false
    } );

 });



</script>

</body>
</html>
