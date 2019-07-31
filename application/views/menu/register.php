<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo site_url('');?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	
	<h3> Registration</h3>	
	<hr class="soft"/>
	<div class="well">
	<form class="form-horizontal" action="<?= base_url();?>index.php/Masuk/register_save" method="POST">
	
		<h3>Your Personal Details</h3>
		
		
		<div class="control-group">
			<label class="control-label" >Account <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="account" placeholder="Account" required>
			</div>
		 </div>
		 
		 <div class="control-group">
			<label class="control-label" >Full Name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="fname" placeholder="Full Name" required>
			</div>
		 </div>
		 
		<div class="control-group">
		<label class="control-label" >Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="email" placeholder="Email">
		</div>
	  </div>
	  
		<div class="control-group">
		<label class="control-label" for="inputEmail"> Phone Number <sup>*</sup></label>
		<div class="controls">
		  <input type="number" name="pnumber" placeholder="Phone Number" required>
		</div>
	  </div>		  
	  
		<div class="control-group">
		<label class="control-label">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="password" placeholder="Password" required>
		</div>
	  </div>
	  
	<div class="control-group">
		<div class="controls">
		 <input type="submit" value="Register" class="exclusive shopBtn">
		</div>
	</div>
	
	</form>
</div>

</div>
</div>