
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Mamay | Admin Panel</title>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <link rel="stylesheet" href="{{ URL::asset('dist/css/adminlte.min.css') }}" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

  <!-- Ion Slider -->
   <!--Plugin CSS file with desired skin-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css"/>


</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
  <div id="app" class="wrapper">
      @include('includes.admin-navbar')
      @include('includes.admin-sidebar')
      @include('includes.admin-contentwrapper')
      @include('includes.admin-footer')
  </div> 

<!-- REQUIRED SCRIPTS -->
  @include('includes.admin-scripts')

</body>
</html>
