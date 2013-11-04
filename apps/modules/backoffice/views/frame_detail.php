<?php require 'incs/header.php' ?> 
	<!-- container -->
	<div class="container">
		<div class="row">
			<!-- sideleft -->
			<?php require 'incs/sideleft.php' ?>
			<!-- /sideleft -->
			<!-- sideright -->
			<div class="sideright span9">
				<!-- breadcrumb -->
				<?php require 'incs/breadcrumb.php' ?>
				<!-- /breadcrumb -->
				<!-- alert -->
				<?php require 'incs/alert.php' ?>
				<!-- /alert -->
				<form class="form-horizontal" method="post" action="<?php echo base_url('backoffice/frame/save'); ?>">
					 <div class="control-group">
						
						<label class="control-label" for="inputTitle">Title</label>
						<div class="controls">
						  <input class="span6" type="text" id="inputTitle"name="inputTitle" placeholder="Title">
						</div>
						
						<label class="control-label" for="inputShortDesc">Short Description</label>
						<div class="controls">
						  <input class="span6" type="text" id="inputShortDesc" name="inputShortDesc" placeholder="Short Description">
						</div>
						
						<label class="control-label" for="inputPrice">Price</label>
						<div class="controls">
							<div class="input-append">
							  <input class="span2" id="inputPrice" name="inputPrice" type="text" placeholder="Price">
							  <span class="add-on">฿</span>
							</div>
						</div>
						
						<label class="control-label" for="inputDesc">Desctiption</label>
						<div class="controls">
						  <textarea class="span6"  rows="5" name="inputDesc" id="inputDesc"></textarea>
						</div>
						
						<label class="control-label" for="inputFeatures">Features</label>
						<div class="controls">
						  <textarea class="span6"  rows="5" name="inputFeatures" id="inputFeatures"></textarea>
						</div>
						<label class="control-label" for="inputFeaturesImage">Image</label>
						<div class="controls">
						  <input type="file" id="inputFeaturesImage" name="inputFeaturesImage">
						</div>

						<label class="control-label" for="inputGeometry">Frame Geometry</label>
						<div class="controls">
						  <textarea class="span6"  rows="5" name="inputGeometry" id="inputGeometry"></textarea>
						</div>
						<label class="control-label" for="inputGeometryImage">Image</label>
						<div class="controls">
						  <input type="file" id="inputGeometryImage" name="inputGeometryImage" >
						</div>

						<label class="control-label" for="inputSpecs">Specs</label>
						<div class="controls">
						  <textarea class="span6"  rows="5" name="inputSpecs" id="inputSpecs"></textarea>
						</div>
						<label class="control-label" for="inputSpecsImage">Image</label>
						<div class="controls">
						  <input type="file" id="inputSpecsImage" name="inputSpecsImage" >
						</div>

					  </div>
					  <div class="control-group">
						<div class="controls">
							<input type="submit" class="btn btn-primary" />
							<input type="reset" class="btn" />
						</div>
					  </div>
				</form>
				
			</div>
			<!-- /sideright -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
	<!-- footer -->
	<?php require 'incs/footer.php' ?>
	<!-- /footer -->
  </body>
</html>