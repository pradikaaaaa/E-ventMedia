<?php $this->load->view('pages/header'); ?>
<div class="container">
	<div class="row">
		
		<div class="col-sm-6">
			<div class="panel panel-info">
		      <div class="panel-heading">Cari Event</div>
		      <div class="panel-body">
		        <?=form_open('login/carievent');?>
		          <div class="input-group">
		            <input type="text" class="form-control" placeholder="Cari Berdasarkan Nama" name="kata_kunci">
		            <input type="hidden" name="field" value="nama_event">
		            <div class="input-group-btn">
		              <button class="btn btn-default" type="submit">
		                <i class="glyphicon glyphicon-search"></i>
		              </button>
		            </div>
		          </div>
		        </form>
		        <br>
		        <br><br>
		      </div>
		    </div>
		</div>

		<div class="col-sm-6">
			<div class="panel panel-success">
		      <div class="panel-heading">Cari Tanggal Event</div>
		      <div class="panel-body">
		        <?=form_open('login/carievent');?>
		          <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
		                <input class="form-control" size="16" type="text" value="" readonly>
		                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
		                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
		          </div>
		        <input type="hidden" id="dtp_input2" value="" name="kata_kunci" />
		        <input type="hidden" name="field" value="tanggal_event">
		        <br/>
		        <button type="submit" class="btn btn-default btn-block">Cari</button>
		      </form>
		      </div>
		    </div>
		</div>

	</div>
</div>
<hr>
<div class="container text-center">    
  <h3>Hasil Pencarian : </h3>
  <br>
  <div class="row">
    <?php 
    	if(empty($search_event)){
   	?>
   		Tidak ditemukan
   	<?php
    	}else{
    		foreach ($search_event as $key) {
    ?>
		    <div class="col-sm-2">
		      <img src="<?=base_url()?>assets/image/event/<?=$key->image?>" class="img-thumbnail" width="900" alt="Image">
		      <p></p>
		      <a href="<?=site_url('')?>/login/detailevent/<?=$key->idevent?>"><?=$key->nama_event?></a>
		    </div>
    <?php
      		}
  		}
    ?>

  </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

<?php $this->load->view('pages/footer'); ?>