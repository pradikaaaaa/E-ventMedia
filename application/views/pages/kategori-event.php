<?php $this->load->view('pages/header'); ?>
<div class="container text-center">    
  <h3>Kategori : <?=$nama_kategori[0]->kategori_event?> </h3>
  <br>
  <div class="row">
    <?php 
      foreach ($kategori_event as $key) {
    ?>
    <div class="col-sm-2">
      <img src="<?=base_url()?>assets/image/event/<?=$key->image?>" class="img-thumbnail" width="900" alt="Image">
      <p></p>
      <a href="<?=site_url('')?>/login/detailevent/<?=$key->idevent?>"><?=$key->nama_event?></a>
    </div>
    <?php
      }
    ?>

  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

<?php $this->load->view('pages/footer'); ?>