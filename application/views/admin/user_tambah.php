<?php $this->load->view('admin/header'); ?>       
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Managemen User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-users fa-fw"></i> Tambahkan User
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <?php echo form_open('user/tambahUser');?>
                        <?=validation_errors();?>                        
                           <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Enter text" style="width:500px" name="username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Enter text" style="width:500px" name="password">
                            </div>
                            <hr>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="Text" class="form-control" placeholder="Enter text" style="width:500px" name="nama">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="radio">
                                    <label class="radio-inline">
                                        <input type="radio" name="jk" id="optionsRadiosInline1" value="Laki-Laki" checked>Laki - Laki
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="jk" id="optionsRadiosInline2" value="Perempuan">Perempuan
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="width:500px">
                                        <input class="form-control" size="16" type="text" value="" readonly>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                  </div>
                                <input type="hidden" id="dtp_input2" value="" name="tanggal" />
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter text" style="width:500px" name="email">
                            </div>

                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="number" class="form-control" placeholder="Enter text" maxlength="12" style="width:500px" name="telp">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" id="ckeditor1"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-info" >Submit</button>

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

 <!-- jQuery -->
<?php $this->load->view('admin/file_js'); ?>
<script src="<?=base_url()?>assets/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script src="<?=base_url()?>assets/datetimepicker/js/locales/bootstrap-datetimepicker.id.js"></script>

    <script>
    $(function(){
        CKEDITOR.replace('ckeditor1');
    });

    $('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    </script>


</body>

</html>