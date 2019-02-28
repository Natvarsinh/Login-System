<div class="container">
	<div class="row">
		<div class="col-md-3">

		</div>
		<div class="col-md-6">

			<div class="row">
				<?php if ($this->session->flashdata('error')) { ?>
					<div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
				<?php } ?>	
			</div>

			<form action="<?php echo site_url('login/loginsystem'); ?>" method="post" class="jumbotron">
				<div class="form-group">
					<label for="Username">Username :</label>
					<input type="text" name="txt_username" class="form-control" placeholder="Enter Your Username">
					<?php echo form_error('txt_username'); ?>
				</div>
				<div class="form-group">
					<label for="Password">Password :</label>
					<input type="password" name="txt_password" class="form-control" placeholder="Enter Your Password">
					<?php echo form_error('txt_password'); ?>
				</div><br>
				<div class="btn-group btn-group-justified">
					<div class="btn-group">
						<input type="submit" name="btn_login" class="btn btn-success btn-group" value="Login">
					</div>
					<div class="btn-group">
						<a href="<?php echo site_url('login/register'); ?>" class="btn btn-warning btn-group">Register</a>
					</div>
				</div>
				
			</form>
		</div>
		<div class="col-md-3">

		</div>
	</div>
</div>