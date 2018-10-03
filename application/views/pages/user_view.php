<?php $this->load->view('pages/header'); ?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
        
      <div class="panel panel-default">
          <div class="panel-body">
            <img src="<?=base_url()?>assets/image/profile/profile.jpg" class="img-circle" width="70">
              <br>
              <br>
              <a href="<?=site_url()?>/login/profile/<?=$profil[0]->id_user?>"><?=$profil[0]->nama_user?></a>
              
              <br>
              <br>
              <div class="list-group">
                <a href="<?=site_url()?>/profile/editprofile/<?=$profil[0]->id_user?>" class="list-group-item text-left"><span class="fa fa-user"></span> Edit Profile</a>
                <a href="<?=site_url()?>/profile/eventtersimpan/<?=$profil[0]->id_user?>" class="list-group-item text-left"><span class="fa fa-bookmark"></span> Event Tersimpan</a>
              </div>
          </div>
      </div>
    </div>
<!-- batas-->
    <div class="col-sm-9 text-left"> 
      <div class="row">
        <h1>Profile</h1>
        <div class="panel panel-default">
          <div class="panel-body text-right">
            <h3 align="center"><strong>Informasi Umum</strong></h3>
            <hr>
            <div class="row">
              <div class="col-sm-2 text-left">
                  <h4><span class="fa fa-user"></span> Jenis Kelamin </h4>
                  <h4><span class="fa fa-calendar"></span> Tanggal Lahir </h4>
                  <h4><span class="fa fa-home"></span> Alamat </h4>
              </div>
              <div class="col-sm-10 text-left">
                  <h4><?=$profil[0]->jenis_kelamin?></h4>
                  <h4><?=$profil[0]->tanggal?></h4>
                  <h4><?=$profil[0]->alamat?></h4>
              </div>
            </div>
            <h3 align="center"><strong>Informasi Akun</strong></h3>
            <hr>
            <div class="row">
              
              <div class="col-sm-2 text-left">
                  <h4><span class="fa fa-user"></span> Username </h4>
                  <h4><span class="fa fa-envelope-o"></span> Email </h4>
                  <h4><span class="fa fa-phone"></span> Telepon </h4>
              </div>
              <div class="col-sm-10 text-left">
                  <h4><?=$profil[0]->username?></h4>
                  <h4><?=$profil[0]->email?></h4>
                  <h4><?=$profil[0]->no_telp?></h4>
              </div>
            </div>
            


          </div>
      </div>
    </div>

  </div>

  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php $this->load->view('pages/footer'); ?>