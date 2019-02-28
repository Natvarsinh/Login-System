<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<form action="<?php echo site_url('login/registrationsystem') ?>" method="post" class="jumbotron">
				
				<div class="form-group">
					<label for="Username">Username :</label>
					<input type="text" name="txt_username" class="form-control" placeholder="Username">
					<?php echo form_error('txt_username'); ?>
				</div>
				<div class="form-group">
					<label for="Email">Email :</label>
					<input type="email" name="txt_email" class="form-control" placeholder="Email">
					<?php echo form_error('txt_email'); ?>
				</div>
				<div class="form-group">
					<label for="Password">Password :</label>
					<input type="password" name="txt_pass" class="form-control" placeholder="Password">
					<?php echo form_error('txt_pass'); ?>
				</div>
				<div class="form-group">
					<label for="Confirm Password">Confirm Password :</label>
					<input type="password" name="txt_c_pass" class="form-control" placeholder="re-enter password">
					<?php echo form_error('txt_c_pass'); ?>
				</div>
				<div class="btn-group btn-group-justified">
					<div class="btn-group">
						<input type="submit" name="btn_register" class="btn btn-success btn-group" value="Register">
					</div>
					<div class="btn-group">
						<a href="<?php echo site_url('login/index'); ?>" class="btn btn-primary btn-group">Login</a>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</div>