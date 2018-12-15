<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target =".nav-collapse" data-toggle ="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		 
			
		<div class="nav-collapse">
		<ul class="nav">
		<li class="<?php if($title=='TRUSH SHOP') echo 'active'; ?>"><a href="<?php echo site_url('');?>">Home</a></li>
		<li class="<?php if($title=='LIST') echo 'active'; ?>"><a href="<?php echo base_url();?>index.php/Masuk/listt">List View</a></li>
		</ul>
			
			
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->


<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		<li><a href="<?php if($title=='Products Laptop') echo 'active'; ?>"><a href="<?php echo base_url();?>index.php/Masuk/laptop"><span class="icon-chevron-right"></span>Laptop</a></li>
		<li><a href="<?php if($title=='Products Mouse') echo 'active'; ?>"><a href="<?php echo base_url();?>index.php/Masuk/mouse"><span class="icon-chevron-right"></span>Mouse</a></li>
		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="cart.html"><strong>Total Amount <span class="badge badge-warning pull-right" style="line-height:18px;">Rp.- </span></strong></a></li>
	</ul>
</div>


<!-- samping -->
			
			<div class="well well-small" ><a href="#"><img src="<?php echo base_url();?>assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Produk Mendatang<br><small>-</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url();?>assets/gambar/produk upcoming1.png" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">-</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url();?>assets/gambar/produk upcoming2.png" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">-</span></h4>
				</div>
			  </div>
			</li>
		  </ul>
	</div>
	