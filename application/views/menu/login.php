<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo site_url('');?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	
	<h3>Login</h3>	
	<hr class="soft"/>

<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<form action="<?= base_url();?>index.php/Masuk/login_user" method="POST">
			
			  <div class="control-group">
				<label class="control-label">Account</label>
				<div class="controls">
				  <input class="span3"  type="text" name="account" placeholder="Account">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
				  <input type="password" class="span3" name="password" placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="defaultBtn">Sign in</button> <a href="#">Forget password?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>
	</div>