<?php
require_once('header_top.php');
require_once('header.php');
require_once(CLASS_PATH.'/category.class.php');
$category  =new Category();
?>
	<body>
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
			
			<?=notifications()?>
			<div class="content-box column-left">
				
				<div class="content-box-header">
					
					<h3>Add category</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab">
						<form action="<?=WWW_URL?>/function/fn_category.php?action=new" method="post" id="category_form">
							<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
								<p>
									<label>Category Name</label>
										<input class="text-input medium-input" type="text" id="category_name" name="category_name" /> 
									<label>Category Order</label>
										<input class="text-input medium-input" type="text" id="category_sort" name="category_sort" value="0" /> 
										<input type="hidden" id="category_id" name="category_id" /> 
								</p>
								<p>
									<input class="button" type="submit" value="Save" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab3 -->        
					
				</div> <!-- End .content-box-content -->
			
			</div> <!-- End .content-box -->		
			<div class="clear"></div> <!-- End .clear -->
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Category Management</h3>
					
					<ul class="content-box-tabs">
						<li><a href="#tab1" class="default-tab">Category</a></li> <!-- href must be unique and match the id of target div -->
						<!-- <li><a href="#tab2">Forms</a></li> -->
					</ul>
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<!-- <div class="notification attention png_bg">
							<a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>
								This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
							</div>
						</div> -->
						
						<table>
							<thead>
								<tr>
									<th>&nbsp;</th>
								   <th>Name</th>
								   <th>Order</th>
								   <th>Manage</th>
								</tr>
								
							</thead>
						 
							<tbody>
<?php
$categoryItem = $category->getAdmin();
foreach( $categoryItem as $one){
?>

								<tr>
									<td>&nbsp;</td>
									<td><a href="#" title="title"><?=$one['name']?></a></td>
									<td><?=$one['sort']?></td>
									<td>
										<!-- Icons -->
										 <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" onclick="return editcategory(<?=$one['id']?>,'<?=$one['name']?>',<?=$one['sort']?>);" /></a>
										 <a href="<?=WWW_URL?>/function/fn_category.php?action=delete&id=<?=$one['id']?>" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a> 
									</td>
								</tr>
<?php
}
?>
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			

			<div class="clear"></div>
<?php			
require_once('footer.php');			
?>