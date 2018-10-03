<?php
    $session_data = $this->session->userdata('logged_in');
    $data['id_user'] = $session_data['id_user'];
    $data['username'] = $session_data['username'];
?>

<?php $this->load->view('pages/header'); ?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

      <div class="panel panel-default">
          <div class="panel-heading">Simpan Event</div>
          <div class="panel-body">
            <?php
              if(empty($data['username'])){
            ?>
              Anda harus login terlebih dahulu
            <?php
              }else{
            ?>
              <a href="<?=site_url('')?>/profile/simpanevent/<?=$event[0]->idevent?>/<?=$data['id_user']?>" class="btn btn-success btn-block">
                <span class="glyphicon glyphicon-bookmark"></span> Simpan
              </a>
            <?php } ?>
          </div>
        </div>

      <div class="panel panel-default">
          <div class="panel-heading">Cetak Event</div>
          <div class="panel-body">
            <?php
              if(empty($data['username'])){
            ?>
              Anda harus login terlebih dahulu
            <?php
              }else{
            ?>
              <a href="<?=site_url('')?>/cetak/cetakevent/<?=$event[0]->idevent?>/<?=$event[0]->nama_event?>" class="btn btn-primary btn-block">
                <span class="glyphicon glyphicon-print"></span> Print
              </a>
            <?php } ?>
          </div>
        </div>



    

    </div>

    <div class="col-sm-8 text-left"> 
      <div class="row">
          <div class="col-sm-3">
            <img src="<?=base_url()?>assets/image/event/<?=$event[0]->image?>" class="img-thumbnail" style="width:100;" alt="Image">
          </div>
          <div class="col-sm-9">
            <div class="row">
              <div class="col-sm-12 ">
                  <h1><?=$event[0]->nama_event?></h1>
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
      
      <h3>Deskripsi</h3>
        <?=$event[0]->deskripsi?>
      <hr>


    </div>

    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Saran Event</div>
        <div class="panel-body">
          <a href="<?=site_url('')?>/login/detailevent/<?=$random[0]->idevent?>">
            <img src="<?=base_url()?>assets/image/event/<?=$random[0]->image?>" class="img-thumbnail" style="width:100;" alt="Image">
          </a>
        </div>
      </div>

    </div>
  </div>

</div>
<br><br><br><br>
<br>
<?php $this->load->view('pages/footer'); ?>