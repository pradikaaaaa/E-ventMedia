<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Login E-vent Media</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/pages/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url()?>assets/pages/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>assets/pages/custom/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/pages/custom/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	

	  		<?php echo form_open('login/cekLogin', 'class="form-login"');?>
		        <h2 class="form-login-heading">Login</h2>
		        <div class="login-wrap">
		        	<?php echo validation_errors(); ?>
		            <input type="text" class="form-control" placeholder="Username" autofocus name="username">
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password">
		            <br>
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Sign In</button>
		            <a href="<?=site_url('login')?>" class="btn btn-success btn-block">Kembali</a>
		            <hr>
		            
		            <div class="registration">
		                Belum memiliki akun?<br/>
		                <a data-toggle="modal" class="" href="#myModal">
		                    Daftar sekarang
		                </a>
		            </div>
		
		        </div>
		      </form>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Daftar</h4>
		                      </div>

		         
		                      <div class="modal-body">
		              			<?php echo form_open('login/registrasi');?>
		                      	<p>Username</p>
		                        <input type="text" name="username" placeholder="Username" autocomplete="off" class="form-control placeholder-no-fix" required>
		                        <br>
		                        <p>Password</p>
		                        <input type="password" name="password" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix" required>
		                        <br>
		                        <p>E-mail</p>
		                         <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" required>
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="submit">Submit</button>
		                      </div>
		                      	</form>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/pages/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/pages/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <!--
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>
	-->

  </body>
</html>
