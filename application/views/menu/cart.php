<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target =".nav-collapse" data-toggle ="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		 
			
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="<?php echo site_url('');?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Check Out</li>
    </ul>
	<div class="well well-small">
		<h1>Check Out <small class="pull-right"> Items are in the cart </small></h1>
	<hr class="soften"/>	

	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Unit price</th>
                  <th>Qty</th>
				</tr>
              </thead>
              <tbody>
			  
			  <?php
			$no = 1;
			   foreach($tampil as $u){
			  ?>
			  
				<tr>
				  <td><?php echo $no;?></td>
				  
                  <td><?php echo $u->pname;?></td>
				  
                  <td><span class="shopBtn"><span class="icon-ok"></span></span> </td>
                  
				  <td><?php echo $u->unitprice;?></td>
                  <td>
				  <input class="span1" style="max-width:34px" placeholder="1" size="16" type="text">
				  </td>
				  
                  <td><?php echo $u->qty;?></td>
                
				</tr>
				
				<?php 
				$no++;
			   }?>
				</tbody>
            </table><br/>
		
		
            <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
				<!--<form class="form-inline">
				  <label style="min-width:159px"> VOUCHERS Code: </label> 
				<input type="text" class="input-medium" placeholder="CODE">
				<button type="submit" class="shopBtn"> ADD</button>
				</form>-->
				</td>
                </tr>
				
			</tbody>
			</table>
	<a href="<?php echo site_url('');?>" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
	<a href="<?php echo base_url();?>index.php/Masuk/rekening" class="shopBtn btn-large pull-right">Next <span class="icon-arrow-right"></span></a>

</div>
</div>
</div>
