<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Regna Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

   <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <!--styles theme-->
  <link href="{{asset('css/web.min.css')}}" rel="stylesheet">
  <link href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  {{--
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet"> --}}

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  @include('web.header')

  <!--==========================
    Hero Section
  ============================-->
@include('web.hero')

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    @include('web.about')

    <!--==========================
      Facts Section
    ============================-->
    @include('web.facts')

    <!--==========================
      Services Section
    ============================-->
    @include('web.services')

    <!--==========================
    Call To Action Section
    ============================-->
    @include('web.call-to-action')

    <!--==========================
      Portfolio Section
    ============================-->
    @include('web.portfolio')

    <!--==========================
      Team Section
    ============================-->
    @include('web.team')

    <!--==========================
      Contact Section
    ============================-->
    @include('web.contact')

  </main>

  <!--==========================
    Footer
  ============================-->
  @include('web.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!--scripts theme-->
  <script src="{{asset('js/web.min.js')}}"></script>
</body>
</html>
