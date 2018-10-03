<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  &copy;2018 E-vent
</footer>
<script src="<?=base_url()?>assets/pages/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/pages/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>

<script src="<?=base_url()?>assets/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

<script src="<?=base_url()?>assets/datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script src="<?=base_url()?>assets/datetimepicker/js/locales/bootstrap-datetimepicker.id.js"></script>

<script type="text/javascript">
	$(function(){
        CKEDITOR.replace('ckeditor1');
    });

    $(document).ready(function(){
        $('#event-simpan').DataTable();
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