<?php
    $session_data = $this->session->userdata('logged_in');
    $data['id_user'] = $session_data['id_user'];
    $data['username'] = $session_data['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Media</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url()?>assets/pages/css/bootstrap.min.css">
  <link href="<?=base_url()?>assets/admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url()?>assets/datetimepicker/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">

  <style>
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
      font-size: 12px;
      letter-spacing: 5px;
    }

   
    .navbar-nav  li a:hover {
      color: #1abc9c !important;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="<?=base_url()?>assets/image/logo.png" width="70" style="margin-top:-25px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="<?=site_url('login')?>">Home</a></li>
        <li><a href="<?=site_url('login/allevent')?>">Event</a></li>

        <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kategori
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php foreach ($kategori as $key) { ?>
                <li><a href="<?=site_url()?>/login/kategorievent/kode_kategori/<?=$key->kode_kategori?>"><?=$key->kategori_event?></a></li>
                <?php } ?>
              </ul>
        </li>

        <!-- <li><a href="#">Tentang Kami</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if(empty($data['username'])){
        ?>
        <li><a href="<?=site_url('login/login')?>"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <?php
            }else{
        ?>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?=$data['username']?>
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?=site_url()?>/login/profile/<?=$data['id_user']?>">Profile</a></li>
                <li class="divider"></li>
                <li><a href="<?=site_url('login/logout')?>">Logout</a></li>
              </ul>
          </li>

        <?php
            }
        ?>
        <!-- <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li> -->
      </ul>
    </div>
  </div>
</nav>