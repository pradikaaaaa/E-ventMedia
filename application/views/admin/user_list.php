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
                            <i class="fa fa-users fa-fw"></i> User List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <p>
                                <a href="<?=site_url('user/user_tambah')?>">
                                <button type="button" class="btn btn-primary">
                                    <i class="fa fa-plus fa-fw"></i> Tambah User
                                </button>
                                </a>
                            </p>


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dt-user">
                                <thead>
                                    <tr>
                                        <th>ID User</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
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

 <!-- jQuery -->
    <?php $this->load->view('admin/file_js'); ?>
 

    <script>
    $(document).ready(function() {
        $('#dt-user').DataTable({
            "processing":true,
            "serverSide":true,
            "lengthMenu":[[5,10,15-1],[5,10,15,"All"]],
            "ajax":{
                url : "<?=site_url('user/user_list')?>",
                type : "POST"
            },
            "columnDefs":
            [
                {
                    "targets":0,
                    "data":"id_user",
                },
                {
                    "targets":1,
                    "data":"username",
                },
                {
                    "targets":2,
                    "data":"email",
                },
                {
                    "targets":3,
                    "data":"edit",
                },
                {
                    "targets":4,
                    "data":"hapus",
                },
            ]
        });
    });
    </script>

</body>

</html>