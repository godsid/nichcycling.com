<!DOCTYPE html>
<html lang="th">
  <!-- Top Head -->
  <?php @include('incs/header-top.html'); ?>
  <!-- /Top Head -->

  <body>

    <div class="container">
      <!-- Header -->
	  <?php @include('incs/header.html'); ?>
      <script>
	  $(document).ready(function(){
			 $(".top-nav li a").removeClass("selected");
			 $(".top-nav>ul>li:nth-child(6)>a").addClass("selected");
		}); 
	  </script>
      <!-- /Header -->
      <!-- crumbs -->
	  <?php @include('incs/crumbs.html'); ?>
      <!-- /crumbs -->
      <!-- Highlight -->
      <div id="video" class="box">
          <div class="player">
          	<img src="img/thumb/vdo-player.jpg" align="VIDEO">
          </div>
      </div>
      <!-- /Highlight -->
	  
      <!-- contents -->
      <div id="contents">
        
        <div class="_cd-shw-col-xs-12-sm-6 row thb-grid-media-pa2">
        	<? for($i=1;$i<=4;$i++) { ?>
            <article>
            	<a class="fancybox-media" href="http://www.youtube.com/watch?v=opj24KnzrWo" title="VIDEO">
            	<figure class="thumb">
                	<img src="img/thumb/thumb_330x218-0<? echo $i; ?>.jpg" alt="Gallery">
                    <figcaption><h2>VIDEO <? echo $i; ?></h2></figcaption>
                </figure>
                <div class="info">
                	<span class="time">14 JUNE 2013</span>
                    <p>Ducking Tiger เองก็เลยอยากจะรู้จักร้านจักรยานให้มากกว่านี้ เราเลยตั้งเป้าหมายออกไปพูดคุยสนทนากับร้านจักรยานต่างๆ ในประเทศไทย <span class="txt-blue">EN1478<? echo $i; ?> testing</span></p>
                </div>
                <p class="more">Watch video</p>
                </a>
            </article>
            <? } ?>
        </div>
        
        <div class="mv1">
        <?php @include('incs/paging.html'); ?>    
        </div>
        
      </div>
      <!-- /contents -->
	
    <!-- Header -->
	<?php @include('incs/footer.html'); ?>
    <!-- /Header -->

    </div>
    <!-- /container -->
	<!-- javascript -->
	<?php @include('incs/js.html'); ?>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript">
//<![CDATA[
	document.write('<link href="css/jquery.fancybox.css?v=2.1.5" rel="stylesheet">');
//]]>
</script>
<script src="js/jquery.fancybox.js?v=2.1.5"></script>
<!-- Add Media helper (this is optional) -->
<script src="js/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});

});
</script>
    
    <!-- /javascript -->
  </body>
</html>
