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
                        <div class="panel-heading">
                            <i class="fa fa-send-o fa-fw"></i> Kategori List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?=validation_errors()?>
                            <p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                                    <i class="fa fa-plus fa-fw"></i> Tambah Kategori
                                </button>
                            </p>


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dt-kategori">
                                <thead>
                                    <tr>
                                        <th>Kode Kategori</th>
                                        <th>Kategori Event</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody id="show_data">
                                    
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

<!-- Modal Tambah -->
  <div class="modal fade" id="modalTambah" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Kategori</h4>
        </div>
        <div class="modal-body">
          <?=form_open('event/tambahKategori')?>
            <p>Kode Kategori</p>
            <input type="text" name="newkode" placeholder="Kode Kategori" class="form-control placeholder-no-fix" required>
            <br>
            <p>Kategori Event</p>
            <input type="text" name="newkategori" placeholder="Kategori Event" class="form-control placeholder-no-fix" required>
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


<!-- Modal Edit -->
  <div class="modal fade" id="modalEdit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Kategori</h4>
        </div>
        <div class="modal-body">
          <?=form_open('event/editKategori')?>
            <p>Kode Kategori</p>
            <input type="text" name="kode" id="kode" class="form-control placeholder-no-fix" disabled>
            <input type="hidden" name="kode" id="kode">
            <br>
            <p>Kategori Event</p>
            <input type="text" name="kategori" id="kategori" class="form-control placeholder-no-fix" required>
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


<!-- Modal Hapus -->
  <div class="modal fade" id="modalHapus" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Kategori</h4>
        </div>
        <div class="modal-body">
          <?=form_open('event/hapuskategori')?>
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






 <!-- jQuery -->
    <?php $this->load->view('admin/file_js'); ?>


    <script>
        $(document).ready(function(){
            tampil_kategori();

            $('#dt-kategori').dataTable();

            function tampil_kategori(){
                $.ajax({
                    type : 'ajax',
                    url : '<?=site_url("event/kategori_data")?>',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0;i<data.length;i++){
                            html += '<tr>'+
                                    '<td>'+data[i].kode_kategori+'</td>'+
                                    '<td>'+data[i].kategori_event+'</td>'+
                                    '<td>'+
                                    '<a href="javascript:;" class="btn btn-info btn-sm btn-block kategori_edit" data-id="'+data[i].kode_kategori+'" data-kategori="'+data[i].kategori_event+'">Edit</a></td>'+
                                    '<td><a href="javascript:;" class="btn btn-danger btn-sm btn-block kategori_hapus " data-id="'+data[i].kode_kategori+'">Hapus</a></td>'+
                                    '</tr>';
                        }
                        $('#show_data').html(html);
                    } 
                });
            }

            //get update
             $('#show_data').on('click','.kategori_edit',function(){
                var id = $(this).attr('data-id');
                var a = $(this).attr('data-kategori');
                $('#modalEdit').modal('show');
                $('[name="kode"]').val(id);
                $('[name="kategori"]').val(a);
            });


            //get hapus
            $('#show_data').on('click','.kategori_hapus',function(){
                var id = $(this).attr('data-id');
                $('#modalHapus').modal('show');
                $('[name="hapuskode"]').val(id);
            });


        });
    </script>

</body>

</html>