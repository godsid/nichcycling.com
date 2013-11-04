<ul class="breadcrumb">
<?php
	$breadcrumbUrl = '';
	foreach($this->uri->segments as $segment){
		$breadcrumbUrl.='/'.$segment
?>
	<li><a href="<?php echo base_url($breadcrumbUrl)?>"><?php echo $segment?></a> <span class="divider">/</span></li>
	<?php
	}
?>
</ul>