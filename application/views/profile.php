<div class="row">
	<?php if ($this->session->flashdata('data')) { ?>
					<div class="alert alert-success"><?php echo $this->session->flashdata('data'); ?></div>
				<?php } ?>
</div>

<h1>Welcome <?php echo $this->session->userdata('username'); ?></h1>
<br><br>
<a href="<?php echo site_url('login/logout'); ?>" class="btn btn-lg btn-danger">Logout</a> 