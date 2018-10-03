<!-- <div class="container text-center">    
  <h3>Event Minggu Ini</h3>
  <br>
 <?php 
      
      foreach ($minggu_ini as $key) {
    ?>
  <div class="row">
    <div class="col-sm-1">
      <img src="<?=base_url()?>assets/image/event/<?=$key->image?>" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-10 text-left">
      <h4><strong><a href="<?=site_url('login/detailevent')?>"><?=$key->nama_event?></a></strong></h4>
      <p><?=substr($key->deskripsi, 0,250)?></p>
    </div>
  </div>
  <?php } ?>
  <br>
  
  
  <button type="button" class="btn btn-primary">Lihat Semua</button>
</div>
<br> -->