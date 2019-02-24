<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard || KEYTODOC POINT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="css/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php'); ?>

  <!-- Left side column. contains the logo and sidebar -->
  <?php include('sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-user-md" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><strong>Doctor <br> Appointment</strong></span>
              <hr style="margin: 3px;">
              <span class="info-box-number" style="font-size: 22px; color: #4834DF;">49<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-ambulance" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><strong>Order <br> Medicine</strong></span>
              <hr style="margin: 3px;">
              <span class="info-box-number" style="font-size: 22px; color: #4834DF;">23<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-flask" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><strong>Booked <br> Lab Test</strong></span>
              <hr style="margin: 3px;">
              <span class="info-box-number" style="font-size: 22px; color: #4834DF;">45<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-child" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><strong>KD Prime <br> Member</strong></span>
              <hr style="margin: 3px;">
              <span class="info-box-number" style="font-size: 22px; color: #4834DF;">20<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

       <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
			<div class="box-header with-border">
              <h3 class="box-title">dkldlkj</h3>
            </div>
            <div class="box-body">
            	dlkdjdl
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2019 </strong> All rights reserved.
  </footer>

  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<script>
  $('#dashboard').addClass('active');
</script>
</body>
</html>
