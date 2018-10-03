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
                      <div class="panel-body">
                        <ul>
                          <li>Klik Nama Event untuk melihat detail event</li>
                          <li>Status digunakan untuk menampilkan atau menyembunyikan event</li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-send-o fa-fw"></i> Event
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?=validation_errors()?>
                            <p>
                                <a href="<?=site_url('event/event_tambah')?>">
                                <button type="button" class="btn btn-primary">
                                    <i class="fa fa-plus fa-fw"></i> Tambah Event
                                </button>
                                </a>
                            </p>


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dt-event">
                                <thead>
                                    <tr>
                                        <th>ID Event</th>
                                        <th>Nama Event</th>
                                        <th>Tanggal Event</th>
                                        <th>Lokasi</th>
                                        <th>Kapasitas</th>
                                        <th>Harga Tiket</th>
                                        <th>Status</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody id="show_data">
                                  <?php 
                                    foreach ($event as $key) {
                                  ?>
                                    <tr>
                                        <td><?=$key->idevent?></td>
                                        <td><a href="<?=site_url('')?>/event/event_detail/<?=$key->idevent?>"><?=$key->nama_event?></a></td>
                                        <td><?=$key->tanggal?></td>
                                        <td><?=$key->lokasi?></td>
                                        <td><?=$key->kapasitas?> orang</td>
                                        <td>Rp <?=$key->tiket?></td>
                                        <td>
                                          <?php 
                                              if($key->status_tampil == 0){
                                                echo "<a href='javascript:;' class='btn btn-info btn-block tampilkan_status' data-id='".$key->idevent."'>Tampilkan</a>";
                                              }else{
                                                echo "<a href='javascript:;' class='btn btn-warning btn-block sembunyikan_status' data-id='".$key->idevent."'>Sembunyikan</a>";
                                              }
                                          ?>
                                        </td>
                                        <td>
                                          <a href="javascript:;" class="btn btn-danger btn-block hapus_data" data-id="<?=$key->idevent?>">
                                            Hapus
                                          </a>
                                        </td>
                                    </tr>
                                  <?php } ?>
                                </tbody>
                            </table>
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

<!-- Modal Hapus -->
  <div class="modal fade" id="modalHapus" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Event</h4>
        </div>
        <div class="modal-body">
          <?=form_open('event/hapusevent')?>
            <input type="hidden" name="hapuskode" id="kode">
            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus data?</p></div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-info" type="button">Cancel</button>
            <button class="btn btn-danger" type="submit">Hapus</button>
        </div>
          </form>
      </div>
      
    </div>
  </div>


<!-- Modal Tampilkan -->
  <div class="modal fade" id="modalTampil" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tampilkan Event</h4>
        </div>
        <div class="modal-body">
          <?=form_open('event/status_tampil');?>
            <input type="hidden" name="idevent">
            <input type="hidden" name="status_tampil" value="1">
            <div class="alert alert-warning"><p>Tampilkan Event?</p></div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-info" type="submit">Ya</button>
            <button data-dismiss="modal" class="btn btn-danger" type="button">Tidak</button>
        </div>
          </form>
      </div>
      
    </div>
  </div>


<!-- Modal Sembunyikan -->
  <div class="modal fade" id="modalSembunyi" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sembunyikan Event</h4>
        </div>
        <div class="modal-body">
          <?=form_open('event/status_tampil');?>
            <input type="hidden" name="idevent">
            <input type="hidden" name="status_tampil" value="0">
            <div class="alert alert-warning"><p>Sembunyikan Event?</p></div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-warning" type="submit">Ya</button>
            <button data-dismiss="modal" class="btn btn-danger" type="button">Tidak</button>
        </div>
          </form>
      </div>
      
    </div>
  </div>






 <!-- jQuery -->
<?php $this->load->view('admin/file_js'); ?>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#dt-event').DataTable();
      });

      //show
      $('#show_data').on('click','.tampilkan_status',function(){
        var id = $(this).attr('data-id');
        $('#modalTampil').modal('show');
        $('[name="idevent"]').val(id);
      });

      //hide
      $('#show_data').on('click','.sembunyikan_status',function(){
        var id = $(this).attr('data-id');
        $('#modalSembunyi').modal('show');
        $('[name="idevent"]').val(id);
      });

      //hapus
      $('#show_data').on('click','.hapus_data',function(){
        var id = $(this).attr('data-id');
        $('#modalHapus').modal('show');
        $('[name="hapuskode"]').val(id);
      });

    </script>


</body>

</html>