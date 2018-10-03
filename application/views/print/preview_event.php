<html>
<head>
	<title></title>
</head>
 	<link rel="stylesheet" href="<?=base_url()?>assets/pages/css/bootstrap.min.css">
  	<link rel="stylesheet" href="<?=base_url()?>assets/datetimepicker/css/bootstrap-datetimepicker.min.css">
  	<link rel="stylesheet" href="<?=base_url()?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">
<body>
<div class="container">
	<hr>
	<div class="row">
		<div class="col-sm-2">
			<img src="<?=base_url()?>assets/image/logo.png" style="margin-left:50px;" width="100px;">
		</div>

		<div class="cols-m-10">
			<h1><?=$event[0]->nama_event?></h1>
		</div>
		
		
	</div>
	<hr>

	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-sm-3">
            		<img src="<?=base_url()?>assets/image/event/<?=$event[0]->image?>" class="img-thumbnail"  alt="Image">
          		</div>
          		<div class="col-sm-9">

          			<div class="row">
              			<div class="col-sm-12 ">
                  			<!-- <h1><?=$event[0]->nama_event?></h1> -->
              			</div>
            		</div>
             
              		<div class="row">
                		<ul type="none">
		                  <li><h4><span class="fa fa-calendar"></span> Tanggal <?=$event[0]->tanggal?></h4></li>
		                  <li><h4><span class="fa fa-clock-o"></span> Waktu <?=$event[0]->jam?></h4></li>
		                  <li><h4><span class="fa fa-tag"></span> Kategori <?=$event[0]->kategori_event?></h4></li>
		                  <li><h4><span class="fa fa-building-o"></span> Lokasi <?=$event[0]->lokasi?></h4></li>
		                  <li><h4><span class="fa fa-group"></span> Kapasitas <?=$event[0]->kapasitas?> Orang</h4></li>
		                  <li><h4><span class="fa fa-money"></span> Tiket Rp <?=$event[0]->tiket?></h4></li>
		                </ul>
              		</div>

          		</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h3>Deskripsi</h3>
        			<?=$event[0]->deskripsi?>
				</div>
			</div>
		</div>
		

	</div>
</div>




<script src="<?=base_url()?>assets/pages/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/pages/js/bootstrap.min.js"></script>
</body>
</html>