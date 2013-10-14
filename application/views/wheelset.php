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
			 $(".top-nav>ul>li:nth-child(3) a").addClass("selected");
		}); 
	  </script>
      <!-- /Header -->
      <!-- crumbs -->
	  <?php @include('incs/crumbs.html'); ?>
      <!-- /crumbs -->
      <!-- Highlight -->
      <div id="highlight" class="box cat-hl">
      	<a href="wheelset-detail.php" title="Frame nich">
        <img src="img/thumb/hl-wheelset.jpg" alt="wheelset nich">
        <div class="hl-detail _sf-col-sm-7">
        	<h2 class="small">For over 40 years NEILPRYDE has been ad the cutting edge of developing high performance products</h2>
            <p>We know a thing or two about speed. About the precise science of aerodynamics. About developing cutting edge technologies. And the rush of handling a machine that defies logic.
            </p>
            <span class="row ui-btn-blue">NEXT: TESTING OUR CARBON FRAMES</span>
        </div>
        </a>
      </div>
      <!-- /Highlight -->
	  
      <!-- contents -->
      <div id="contents">
        
        <div class="_cd-shw-col-xs-12-sm-6 row thb-grid">
        	<? for($i=1;$i<=4;$i++) { ?>
            <article>
            	<a href="wheelset-detail.php" title="wheelset">
            	<figure class="thumb">
                	<img src="img/thumb/thumb2_371x243-0<? echo $i; ?>.jpg" alt="NEWS">
                    <figcaption><h2><? echo $i*101; ?></h2></figcaption>
                </figure>
                <div class="info">
                    <p>Ducking Tiger เองก็เลยอยากจะรู้จักร้านจักรยานให้มากกว่านี้ เราเลยตั้งเป้าหมายออกไปพูดคุยสนทนากับร้านจักรยานต่างๆ ในประเทศไทย <span class="txt-blue">EN1478<? echo $i; ?> testing</span></p>
                </div>
                <p class="more">Read more</p>
                </a>
            </article>
            <? } ?>
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
    <!-- /javascript -->
  </body>
</html>
