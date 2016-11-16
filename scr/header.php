<?php ob_start(); session_start(); $addjs='';
date_default_timezone_set('Asia/Jakarta');
/*
Name:  BKD Online
Description:  A simple and efficient concept for lecturer activity management.
Version:      0.1
Author:       muchad
Author URI:   http://muchad.com/
License:
MIT License
*/
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="private, max-age=5400, pre-check=5400">
    <meta http-equiv="expires" content="<?php echo gmdate('date_rfc822', strtotime("1 day")); ?>">
    <meta http-equiv="Content-Language" content="ID">
	<title>muchad CONCEPT</title>
	<meta name="description" content="visit muchad.com" />
	<meta name="keywords" content="muchad" />
	<meta name="author" content="muchad">
    <meta name="robots" content="FOLLOW,INDEX">
	<link rel="shortcut icon" href="lib/img/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="lib/css/bootstrap.min.css">
	<link rel="stylesheet" href="lib/css/login.css">
	<link rel="stylesheet" href="lib/css/patch.css">
</head>
<body role="document">
<div class="meta-nav">
	<div class="container-fluid">
	<ul class="pull-right">
	<li><a href="#">Features</a></li>
	<li><a href="#">How to</a></li>
	<li><a href="#">Support</a></li>
	</ul>
	</div>
</div>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="margin-top:-8px;" href="./"><img alt="Brand" src="lib/img/logo.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
	<?php if(isset($_SESSION['auth'])){
		if(basename($_SERVER['REQUEST_URI']) == 'home'){
			echo '<ul class="nav navbar-nav"><li class="active"><a href="home">Beranda</a></li><li><a href="logout">Keluar</a></li></ul>';
		}else{
		echo '<ul class="nav navbar-nav"><li><a href="home">Beranda</a></li><li><a href="identitas">Identitas</a></li><li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rencana  <span class="caret"></span></a><ul class="dropdown-menu"><li><a href="pendidikan">Kinerja Bidang Pendidikan</a></li><li><a href="404">Kinerja Bidang Penelitian</a></li><li><a href="404">Kinerja Bidang Pengabdian Masyarakat</a></li><li><a href="404">Kinerja Penunjang Lainnya</a></li><li><a href="404">Kewajiban Khusus Profesor</a></li></ul></li><li><a href="cetak">Cetak</a></li><li><a href="logout">Keluar</a></li></ul>';
		}
		}
	?>
        </div>
      </div>
    </nav>