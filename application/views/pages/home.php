<?php $this->load->view('pages/header'); ?>

<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?=base_url()?>assets/image/banner/3.jpg" alt="Image">
          <!-- <div class="carousel-caption">
            <h3>Sell $</h3>
            <p>Money Money.</p>
          </div>   -->    
        </div>

        <div class="item">
          <img src="<?=base_url()?>assets/image/banner/1.jpg" alt="Image">
          <!-- <div class="carousel-caption">
            <h3>More Sell $</h3>
            <p>Lorem ipsum...</p>
          </div> -->      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
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
      </div>
    </div>


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

    <div class="well">
       <marquee>Terima kasih sudah mengunjungi E-vent Media </marquee>
    </div>
  </div>
</div>
<hr>
</div>

<?php $this->load->view('pages/event-minggu');?>

<?php $this->load->view('pages/event-terbaru');?>
<br>

<?php $this->load->view('pages/footer');?>