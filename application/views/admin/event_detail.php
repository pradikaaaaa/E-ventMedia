<?php $this->load->view('admin/header'); ?>       
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Management Event</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-sm-12 text-left"> 
                              <div class="row">
                                  <div class="col-sm-3">
                                    <a href="javascript:;" class="edit_image" data-id="<?=$event[0]->idevent?>" >
                                    <img src="<?=base_url()?>assets/image/event/<?=$event[0]->image?>" class="img-thumbnail" style="width:100;" alt="Image">
                                    </a>
                                    <h6>Klik gambar untuk mengedit gambar</h6>
                                  </div>
                                  <div class="col-sm-9">
                                    <div class="row">
                                      <div class="col-sm-10">
                                          <h1><?=$event[0]->nama_event?></h1>
                                      </div>
                                      <div class="col-sm-2 text-right">
                                           <a href="javascript:;" class="btn btn-primary btn-sm edit_event" style="padding-top:20;"  
                                           data-id="<?=$event[0]->idevent?>" 
                                           data-tanggal="<?=$event[0]->tanggal_event?>"
                                           data-nama="<?=$event[0]->nama_event?>"
                                           data-lokasi="<?=$event[0]->lokasi?>"
                                           data-tiket="<?=$event[0]->tiket?>"
                                           data-kapasitas="<?=$event[0]->kapasitas?>">
                                              <i class="fa fa-pencil fa-fw"></i> Edit Event
                                           </a>
                                      </div>
                                    </div>
                                    <hr>
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
                                <div class="col-sm-3"><h3>Deskripsi</h3></div>
                                <!-- <div class="col-sm-9 text-right">
                                  <a href="javascript:;" class="btn btn-primary btn-sm edit_deskripsi">
                                    <i class="fa fa-pencil fa-fw"></i> Edit Deskripsi
                                  </a>
                                </div> -->
                              </div> 
                              <?=form_open('event/editdeskripsi');?>
                              <input type="hidden" name="id" value="<?=$event[0]->idevent?>">
                              <div class="form-group">
                                <textarea name="deskripsi" class="form-control" id="ckeditor1"><?=$event[0]->deskripsi?></textarea>
                              </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary" ><i class="fa fa-pencil fa-fw"></i> Edit Deskripsi</button>
                              </div>
                              </form>
                            </div>



                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



<!-- Modal Edit Event -->
  <div class="modal fade" id="modalEditEvent" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Event</h4>
        </div>
        <div class="modal-body">
          <?=form_open('event/editevent')?>
            <input type="hidden" name="id">
            <label>Nama Event</label>
            <input type="text" name="nama_event" class="form-control placeholder-no-fix" required>
            <br>
            <div class="form-group">
              <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option>----Pilih Kategori----</option>
                  <?php foreach ($kategori as $key) { ?>
                  <option value="<?=$key->kode_kategori?>" <?php if($key->kategori_event==$event[0]->kategori_event){ echo "selected"; } ?> >
                    <?=$key->kategori_event?>
                  </option>
                  <?php } ?>
                </select>
            </div>
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control placeholder-no-fix" required>
            <br>
            <label>Tanggal Event</label>
            <div class="input-group date form_datetime" data-date="" data-date-format="dd MM yyyy - HH:ii" data-link-field="dtp_input1">
              <input class="form-control" size="16" type="text" value="" name="tgl" readonly>
              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
            </div>
            <input type="hidden" id="dtp_input1" value="" name="tanggal" /><br/>
            <label>Kapasitas</label>
            <div class="form-group input-group">
                <input type="number" class="form-control" placeholder="Jumlah Kapasitas" name="kapasitas">
                <span class="input-group-addon">orang</span>
            </div>
            <label>Tiket</label>
            <div class="form-group input-group">
              <span class="input-group-addon">Rp.</span>
              <input type="number" class="form-control" placeholder="Enter text" maxlength="12" name="tiket">
            </div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-info" type="button">Cancel</button>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
          </form>
      </div>
      
    </div>
  </div>

<!-- Modal Image -->
  <div class="modal fade" id="modalImage" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Gambar</h4>
        </div>
        <div class="modal-body">
          <?=form_open_multipart('event/editgambar')?>
            <label>Image</label>
            <input type="file" name="userfile" size="20" class="form-control" required>
            <input type="hidden" name="id">
            <br>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-info" type="button">Cancel</button>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
          </form>
      </div>
      
    </div>
  </div>








<?php $this->load->view('admin/file_js'); ?>

<script src="<?=base_url()?>assets/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script src="<?=base_url()?>assets/datetimepicker/js/locales/bootstrap-datetimepicker.id.js"></script>

<script>
  $(document).on("click",".edit_event",function(){
    var id = $(this).data('id');
    var nama = $(this).data('nama');
    var lokasi = $(this).data('lokasi');
    var tanggal = $(this).data('tanggal');
    var tiket = $(this).data('tiket');
    var kapasitas = $(this).data('kapasitas');

    $('#modalEditEvent').modal('show');
    $('[name="id"]').val(id);
    $('[name="nama_event"]').val(nama);
    $('[name="lokasi"]').val(lokasi);
    $('[name="tanggal"]').val(tanggal);
    $('[name="tgl"]').val(tanggal);
    $('[name="tiket"]').val(tiket);
    $('[name="kapasitas"]').val(kapasitas);
  });

  $(document).on("click",".edit_image",function(){
    var id = $(this).data('id');
    $('#modalImage').modal('show');
    $('[name="id"]').val(id);
  });


  $(function(){
    CKEDITOR.replace('ckeditor1');
  });

  $('.form_datetime').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });

</script>
 
</body>

</html>

