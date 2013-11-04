<div class="sideleft span3">
	<ul class="nav nav-pills nav-stacked"><?php echo uri_segments(2);?>
		<li <?php echo uri_segments(2)=='frame'?"class=\"active\"":""?>><a href="<?php echo base_url('/backoffice/frame')?>">Frame</a></li>
		<li <?php echo uri_segments(2)=='wheelset'?"class=\"active\"":""?>><a href="<?php echo base_url('/backoffice/wheelset')?>">Wheelset</a></li>
		<li <?php echo uri_segments(2)=='news'?"class=\"active\"":""?>><a href="<?php echo base_url('/backoffice/news')?>">News</a></li>
		<li <?php echo uri_segments(2)=='video'?"class=\"active\"":""?>><a href="<?php echo base_url('/backoffice/video')?>">Video</a></li>
		<li <?php echo uri_segments(2)=='gallery'?"class=\"active\"":""?>><a href="<?php echo base_url('/backoffice/gallery')?>">Gallery</a></li>
		<li <?php echo uri_segments(2)=='shop'?"class=\"active\"":""?>><a href="<?php echo base_url('/backoffice/shop')?>">Shop</a></li>
	</ul>
</div>	