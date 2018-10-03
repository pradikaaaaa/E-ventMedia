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
                <a href="#" class="list-group-item text-left"><span class="fa fa-bookmark"></span> Event Tersimpan</a>
              </div>
          </div>
      </div>
    </div>
<!-- batas-->
    <div class="col-sm-9 text-left"> 
      <div class="row">
        <h1>Event Tersimpan</h1>
        <div class="panel panel-default">
          <div class="panel-body">
              <table width="100%" class="table table-striped table-bordered table-hover" id="event-simpan">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Event</th>
                  <th>Image</th>
                  <th>Cetak</th>
                  <th>Hapus</th>
                </tr>
              </thead>
              <?php $no=0; foreach ($simpan as $key) { $no++ ?>
              <tbody>
                <tr>
                  <td><?=$no?></td>
                  <td><a href="<?=site_url('')?>/login/detailevent/<?=$key->id_event?>"><?=$key->nama_event?></a></td>
                  <td><img src="<?=base_url()?>assets/image/event/<?=$key->image?>" width="100px" style="width:100;" alt="Image"></td>
                  <td>
                    <a href="<?=site_url('')?>/cetak/cetakevent/<?=$key->id_event?>/<?=$key->nama_event?>" class="btn btn-primary btn-block">
                        <span class="glyphicon glyphicon-print"></span> Print
                    </a>
                  </td>
                  <td>
                    <a href="<?=site_url('')?>/profile/hapussimpan/<?=$key->id_simpan?>/<?=$profil[0]->id_user?>" class="btn btn-danger btn-block">
                      <span class="glyphicon glyphicon-trash"></span> Hapus
                    </a>
                  </td>
                </tr>

              </tbody>
              <?php } ?>
              </table>

          </div>
      </div>
    </div>

  </div>

  </div>
</div>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br>
<br>
<br>
<br>
<?php $this->load->view('pages/footer'); ?>