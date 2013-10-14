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
      <!-- contents -->
      <div id="contents">
        
        <article class="box read-gr">
        	<h1>NICH Cycling&amp; Jumm Bike Studio</h1>
            <ul class="list-gr _cd-shw-col-xs-6-sm-3 row fix-img">
        	<? for($i=1;$i<=12;$i++) { ?>
            	<li>
                    <a class="fancybox" rel="gallery1" title="NICH Cycling Photo name" href="img/photos/photo<? echo $i; ?>.jpg" title="Gallery">
                    <figure class="thumb">
                        <img src="img/photos/photo<? echo $i; ?>.jpg" alt="Gallery">
                        <figcaption><h2>NICH Cycling Gallery <? echo $i; ?></h2></figcaption>
                    </figure>
                    </a>
                </li>
            <? } ?>
            </ul>
            <?php @include('incs/paging.html'); ?>
            
            <footer class="mt1 share-ft bt">
                <strong>share this:</strong>
                <ul>
                    <li class="fb"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNichCycling&amp;width=80px&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe></li>
                    <li class="fb-sent">
                    <div class="fb-send" data-href="https://www.facebook.com/NichCycling" data-width="70" data-height="The pixel height of the plugin" data-colorscheme="light"></div>
                    </li>
                    <li class="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
                </ul>
            </footer>
        </article>
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

<script src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="js/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.fancybox').fancybox();

	// Change title type, overlay closing speed
	/*$(".fancybox-effects-a").fancybox({
		helpers: {
			title : {
				type : 'outside'
			},
			overlay : {
				speedOut : 0
			}
		}
	});*/

});
</script>
    <!-- /javascript -->
  </body>
</html>
