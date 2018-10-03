<div class="container text-center">    
  <h3>Event Terbaru</h3>
  <br>
  <div class="row">
    <?php 
      foreach ($terbaru as $key) {
    ?>
    <div class="col-sm-2">
      <img src="<?=base_url()?>assets/image/event/<?=$key->image?>" class="img-thumbnail" width="900" alt="Image">
      <p></p>
      <a href="<?=site_url('')?>/login/detailevent/<?=$key->idevent?>"><?=$key->nama_event?></a>
    </div>
    <?php
      }
    ?>

   <!--  <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 2</p>    
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 3</p>
    </div>
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 4</p>
    </div> 
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 5</p>
    </div>     
    <div class="col-sm-2"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Partner 6</p>
    </div> 
 -->

  </div>
</div>