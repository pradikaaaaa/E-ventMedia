<?php $this->load->view('admin/header'); ?>       
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Managemen Event</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-send-o fa-fw"></i> Tambahkan Event
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <?=form_open_multipart('event/tambahEvent')?>
                        <?=validation_errors();?>                        
                           <div class="form-group">
                                <label>Nama Event</label>
                                <input type="text" class="form-control" placeholder="Enter text" style="width:500px" name="nama_event">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" style="width:500px" name="kategori">
                                    <option>----Pilih Kategori----</option>
                                    <?php foreach ($select_kategori as $key) { ?>
                                    <option value="<?=$key->kode_kategori?>"><?=$key->kategori_event?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input type="Text" class="form-control" placeholder="Enter text" style="width:500px" name="lokasi">
                            </div>

                            <!-- <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tanggal" style="width:230px" style="width:500px">
                            </div> -->

                            <div class="form-group">
                                <label>Tanggal Event</label>
                                <div class="input-group date form_datetime col-md-5" data-date="" data-date-format="dd MM yyyy - HH:ii" data-link-field="dtp_input1">
                                    <input class="form-control" size="16" type="text" value=""  readonly>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                </div>
                                <input type="hidden" id="dtp_input1" value="" name="tanggal" /><br/>
                            </div>

                            <div class="form-group">
                                <label>Kapasitas</label>
                                <div class="form-group input-group" style="width:500px">
                                    <input type="number" class="form-control" placeholder="Jumlah Kapasitas" name="kapasitas">
                                    <span class="input-group-addon">orang</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <div class="form-group input-group" style="width:500px">
                                    <span class="input-group-addon">Rp.</span>
                                    <input type="number" class="form-control" placeholder="Enter text" maxlength="12" name="harga_tiket">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="ckeditor1"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="userfile" size="20" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-info" >Submit</button>
                            </div>
                        </form>
                           
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

 <!-- jQuery -->
    <?php $this->load->view('admin/file_js'); ?>


    <script src="<?=base_url()?>assets/datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script src="<?=base_url()?>assets/datetimepicker/js/locales/bootstrap-datetimepicker.id.js"></script>

    <script type="text/javascript">
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