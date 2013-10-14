<?php
require_once('incs/header_top.php');
?>
	<body>
	<?php require_once('incs/header.php');?>
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. </div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome <?php echo $user['username']?></h2>
			<p id="page-intro">What would you like to do?</p>
			
			<ul class="shortcut-buttons-set">
				
				<!-- <li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo assets_url('/backoffice/imgs/icons/pencil_48.png')?>" alt="icon" /><br />
					Write an Article
				</span></a></li> 
				-->
				
				<li><a class="shortcut-button" href="<?php base_url('/backoffice/fram/new')?>"><span>
					<img src="<?php echo assets_url('/backoffice/imgs/icons/paper_content_pencil_48.png')?>" alt="icon" /><br />
					Add a New Product
				</span></a></li>
				
				<!-- <li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo assets_url('/backoffice/imgs/icons/paper_content_pencil_48.png')?>" alt="icon" /><br />
					Add an Event
				</span></a></li>
				
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo assets_url('/backoffice/imgs/icons/paper_content_pencil_48.png')?>" alt="icon" /><br />
					Open Modal
				</span></a></li> -->
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Frames Management</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Product</a></li> <!-- href must be unique and match the id of target div -->
						<!-- <li><a href="#tab2">Forms</a></li> -->
					</ul>
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<?php
						if(isset($_GET['status'])){
						?>
						<div class="notification <?=$_GET['status']?> png_bg">
							<a href="#" class="close"><img src="<?php echo assets_url('/backoffice/imgs/icons/cross_grey_small.png')?>" title="Close this notification" alt="close" /></a>
							<div>
								<?=$_GET['message']?>
							</div>
						</div>
						<?php
						}
						?>
						<table>
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Image</th>
								   <th>Code</th>
								   <th>Price</th>
								   <th>Color/Size</th>
								   <th>Manage</th>
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<!-- <div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div> -->
										
										<div class="pagination">
											<a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
											<a href="#" class="number" title="1">1</a>
											<a href="#" class="number" title="2">2</a>
											<a href="#" class="number current" title="3">3</a>
											<a href="#" class="number" title="4">4</a>
											<a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
							
								
									<tr>
										<td><input type="checkbox" /></td>
										<td>
										<?php
											$images = unserialize($one['images']);
										?>
											<img src="<?=$images[0]?>" width="50px" height="50px" />
										
										</td>
										<td><a href="<?='/products_new.php?id='.$one['id']?>" title="<?=$one['code']?>"><?=$one['code']?></a></td>
										<td><?=number_format($one['price'])?></td>
										<td><strong>Color:</strong> <?=$one['color']?><br/><strong>Size:</strong> <?=$one['size']?></td>
										<td>
											<!-- Icons -->
											 <a href="/products_new.php?id=<?=$one['id']?>" title="Edit"><img src="<?php echo assets_url('/backoffice/imgs/icons/pencil.png')?>" alt="Edit" /></a>
											 <a href="" onclick="return window.confirm('Are u sure to delete this item')" title="Delete"><img src="<?php echo assets_url('/backoffice/imgs/icons/cross.png')?>" alt="Delete" /></a> 
										</td>
									</tr>
								
							</tbody>
						</table>
						
					</div> <!-- End #tab1 -->
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			<div class="clear"></div>
			
<?php			
require_once('incs/footer.php');
?>