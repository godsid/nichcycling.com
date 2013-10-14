<?php
session_start();
require_once('header_top.php');

require_once(CLASS_PATH.'/product.class.php');
require_once(CLASS_PATH.'/category.class.php');

$product  =new Product();

$category  =new Category();

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$productItem  = $product->getAdmin($id);

}
$categoryItem = $category->getAdmin();
?>
	<body>
<script type="text/javascript" src="resources/scripts/imagemanager/js/mcimagemanager.js"></script>
<?php require_once('header.php');?>
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. </div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome <?=get_cookie('username')?></h2>
			<p id="page-intro">What would you like to do?</p>
			
			<ul class="shortcut-buttons-set">
				
				<!-- <li><a class="shortcut-button" href="#"><span>
					<img src="resources/images/icons/pencil_48.png" alt="icon" /><br />
					Write an Article
				</span></a></li> 
				-->
				
				<li><a class="shortcut-button" href="<?=ADMIN_URL?>/products_new.php"><span>
					<img src="resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Add a New Product
				</span></a></li>
				
				<!-- <li><a class="shortcut-button" href="#"><span>
					<img src="resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Add an Event
				</span></a></li>
				
				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Open Modal
				</span></a></li> -->
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>New Product</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Product</a></li> <!-- href must be unique and match the id of target div -->
					</ul>
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						<?php
						if(isset($_GET['status'])){
						?>
						<div class="notification <?=$_GET['status']?> png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								<?=$_GET['message']?>
							</div>
						</div> 
						<?php
						}
						?>

						<form action="<?=WWW_URL?>/function/fn_product.php?action=<?=isset($id)?'edit&id='.$id:'new'?>" method="post" id="product_form">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Code</label>
										<input class="text-input small-input" type="text" id="product_code" name="product_code" value="<?=$productItem['code']?>" /> <!-- <span class="input-notification success png_bg">Successful message</span> --> <!-- Classes for input-notification: success, error, information, attention -->
										<br /><small>Example: BB-NO001</small>
								</p>
								<p>
									<label>Category</label>              
									<select name="product_category" class="small-input">
									<?php
										
										foreach($categoryItem as $one){
											echo '<option value="',$one['id'],'" ',($productItem['category']==$one['id']?'selected="selected"':''),'>',$one['name'],'</option>';
										}
									?>
									</select> 
								</p>
								<p>
									<label>Price</label>
									<input class="text-input small-input" type="text" id="product_price" name="product_price" value="<?=$productItem['price']?>" />
									<br /><small>Example: 10000</small>
								</p>

								<p>
									<label>Quantity</label>
									<input class="text-input small-input" type="text" id="product_quantity" name="product_quantity" value="<?=isset($productItem['quantity'])?$productItem['quantity']:1?>" />
								</p>
								
								<p>
									<label>Color</label>
									<input class="text-input medium-input" type="text" id="product_color" name="product_color" value="<?=$productItem['color']?>" /> <!-- <span class="input-notification error png_bg">Error message</span> -->
									<br /><small>Example: Blue,Green,White</small>
								</p>
								
								<p>
									<label>Size</label>
									<input class="text-input medium-input" type="text" id="product_size" name="product_size" value="<?= $productItem['size']?>" />
									<br /><small>Example: 8.75" length x 5.75" height</small>
								</p>
								
								
								<p>
									<label>Images</label>
										
										<script type="text/javascript">
										<!--
											function insertImage(obj){
												obj.value = obj.value.replace('../','/');
											}

										//-->
										</script>
										<?php
											$images = unserialize($productItem['images']);
											if($images){
												foreach($images as $key=>$one){
										?>
													<img src="..<?=$one?>" width="50px" height="50px"  />
													<input class="text-input medium-input" type="text" id="product_image<?=$key?>" name="product_images[]" value="<?=$one?>" onchange="insertImage(this)" />
												<a href="javascript:void();" onclick="mcImageManager.browse({fields:'product_image<?=$key?>',relative_urls:true,disabled_tools:'filemanager'});return false;">[Uploads]</a><br/>
										<?php
												}
											}

											if($id){
												$_SESSION['mce_rootpath'] = '/products/'.$id;
												if(!is_dir(STATIC_PATH.'/products/'.$id)){
													@mkdir(STATIC_PATH.'/products/'.$id,0777);
													@chmod(STATIC_PATH.'/products/'.$id,0777);
												}

										?>
										<input class="text-input medium-input" type="text" id="product_image<?=time()?>" name="product_images[]" onchange="insertImage(this)" />
										<a href="javascript:void();" onclick="mcImageManager.browse({fields:'product_image<?=time()?>',relative_urls:true,disabled_tools:'filemanager'});return false;">[Uploads]</a> <a href="javascript:addImage();" id="addImageBt">[Add Image]</a>
										<?php
											}else{
												echo '<strong>ต้อง Save ก่อนนถึงจะ upload รูปได้</strong>';
											}
										?>
								</p>

								<p class="checkbox">
									<label>Status</label>
									<input type="radio" name="product_status" id="product_status_show" value="SHOW" <?=(isset($productItem['status'])&&$productItem['status']=='SHOW')?'checked="checked"':''?> /><label for="product_status_show"> Show</label>&nbsp;
									<input type="radio" name="product_status" id="product_status_hide" value="HIDE" <?=(!isset($productItem['status'])||$productItem['status']=='HIDE')?'checked="checked"':''?> /> <label for="product_status_hide"> Hide</label>
								</p>
								<p>
									<input class="button" type="submit" value="Save" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					
					</div> <!-- End #tab1 --> 
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
		
			<div class="clear"></div>
			

			
<?php			
require_once('footer.php');			
?>