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
				
				<table class="table table-hover">
				<caption>Wheelset</caption>
				  <thead>
					<tr>
					  <th class="span1">No</th>
					  <th class="span9">Title</th>
					  <th class="span2">Action</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>1</td>
					  <td><a href="<?php echo base_url('/backoffice/wheelset/detail/1')?>">Legiun 1</a></td>
					  <td>
						<a href="<?php echo base_url('/backoffice/wheelset/detail/1')?>" title="Edit"><i class="icon-pencil"></i></a>
						<a href="<?php echo base_url('/backoffice/wheelset/delete/1')?>" title="Delete"><i class="icon-trash"></i></a>
					  </td>
					</tr>
				  </tbody>

				</table>
				<!-- pageing -->
				<?php require 'incs/pageing.php' ?>
				<!-- /pageing -->
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