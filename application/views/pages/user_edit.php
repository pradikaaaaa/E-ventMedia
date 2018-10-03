<?php $this->load->view('pages/header'); ?>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
        
      <div class="panel panel-default">
          <div class="panel-body">
            <img src="<?=base_url()?>assets/image/profile/profile.jpg" class="img-circle" width="70">
              <br>
              <br>
              <a href="<?=site_url()?>/login/profile/<?=$user[0]->id_user?>"><?=$user[0]->nama_user?></a>
              <br>
              <br>
              <div class="list-group">
                <a href="<?=site_url()?>/profile/editprofile/<?=$user[0]->id_user?>" class="list-group-item text-left"><span class="fa fa-user"></span> Edit Profile</a>
                <a href="<?=site_url()?>/profile/eventtersimpan/<?=$user[0]->id_user?>" class="list-group-item text-left"><span class="fa fa-bookmark"></span> Event Tersimpan</a>
              </div>
          </div>
      </div>
    </div>
<!-- batas-->
    <div class="col-sm-9 text-left"> 
      <div class="row">
        <h1>Edit Profile</h1>
        <div class="panel panel-default">
          <div class="panel-body">
              <?php echo form_open('profile/edituser/'.$this->uri->segment(3));?>
                        <?=validation_errors();?>                        
                           <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="Enter text" style="width:500px" name="username" value="<?php echo $user[0]->username?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <br>
                                <a href="javascript:;" class="edit_password" data-id="<?=$user[0]->id_user?>">Klik disini untuk merubah password</a>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="Text" class="form-control" placeholder="Enter text" style="width:500px" name="nama" value="<?=$user[0]->nama_user?>">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="radio">
                                    <label class="radio-inline">
                                        <input type="radio" name="jk" id="optionsRadiosInline1" value="Laki-Laki" <?php if($user[0]->jenis_kelamin == 'Laki-Laki') echo "checked";?>>Laki - Laki
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="jk" id="optionsRadiosInline2" value="Perempuan" <?php if($user[0]->jenis_kelamin == 'Perempuan') echo "checked";?>>Perempuan
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" style="width:500px">
                                        <input class="form-control" size="16" type="text" value="<?=$user[0]->tanggal?>" readonly>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                  </div>
                                <input type="hidden" id="dtp_input2" value="<?=$user[0]->tanggal_lahir?>" name="tanggal" />
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter text" style="width:500px" name="email" value="<?=$user[0]->email?>">
                            </div>

                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="number" class="form-control" placeholder="Enter text" maxlength="12" style="width:500px" name="telp" value="<?=$user[0]->no_telp?>">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" id="ckeditor1"><?=$user[0]->alamat?></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-info" >Submit</button>

                            </div>
                        </form>
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


<!-- Modal Password -->
  <div class="modal fade" id="modalPassword" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit password</h4>
        </div>
        <div class="modal-body">
          <?=form_open('profile/editpassword')?>
            <input type="hidden" name="id">
            <p>Password Lama</p>
            <input type="password" name="password_lama" class="form-control placeholder-no-fix" required>
            <hr>
            <p>Password Baru</p>
            <input type="password" name="password_baru" class="form-control placeholder-no-fix" id="pw1" required>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-info" type="button">Cancel</button>
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
          </form>
      </div>
      
    </div>
  </div>



<footer class="container-fluid bg-4 text-center">
  &copy;2018 E-vent
</footer>
<script src="<?=base_url()?>assets/pages/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/pages/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
<script src="<?=base_url()?>assets/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script src="<?=base_url()?>assets/datetimepicker/js/locales/bootstrap-datetimepicker.id.js"></script>

<script type="text/javascript">
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

  $(document).on("click",".edit_password",function(){
        var id = $(this).data('id');
        $('#modalPassword').modal('show');
        $('[name="id"]').val(id);
    });
</script>

</body>
</html>