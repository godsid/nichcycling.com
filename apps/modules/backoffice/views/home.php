<?php require 'header.php' ?> 
	<!-- container -->
	<div class="container">
		<div class="row">
			<!-- sideleft -->
			<?php require 'sideleft.php' ?>
			<!-- /sideleft -->
			<!-- sideright -->
			<div class="sideright span9">
				<!-- breadcrumb -->
				<?php require 'breadcrumb.php' ?>
				<!-- /breadcrumb -->
				<div class="alert alert-info"><!-- alert-block, alert-error, alert-success, alert-info-->
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Warning!</strong> Best check yo self, you're not looking too good.
				</div>
				<table class="table table-hover">
				<caption>Frame</caption>
				  <thead>
					<tr>
					  <th class="span1">No</th>
					  <th class="span9">Title</th>
					  <th class="span2">Action</th>
					</tr>
				  </thead>
				  <tbody>
				  <?php
				  
				  foreach (range(0, 12) as $number) {
				  ?>
					<tr>
					  <td>1</td>
					  <td><a href="<?php echo base_url()?>backoffice/frame/detail">LEGEND 1</a></td>
					  <td>
						<div class="btn-group">
						  <a class="btn btn-primary" href="#">Action</a>
						  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
							<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
							<!-- <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>-->
						  </ul>
						</div>
					  </td>
					</tr>
					<?php
					}
					?>
				  </tbody>

				</table>
				<!-- pageing -->
				<?php require 'pageing.php' ?>
				<!-- /pageing -->
			</div>
			<!-- /sideright -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
	<!-- footer -->
	<?php require 'footer.php' ?>
	<!-- /footer -->
  </body>
</html>