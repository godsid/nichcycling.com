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
			 $(".top-nav>ul>li:nth-child(4) a").addClass("selected");
		}); 
	  </script>
      <!-- /Header -->
      <!-- crumbs -->
	  <?php @include('incs/crumbs.html'); ?>
      <!-- /crumbs -->

      <!-- contents -->
      <div id="contents">
        
        <div class="_cd-shw-col-xs-12-sm-6 row thb-grid">
        	<? for($i=1;$i<=6;$i++) { ?>
            <article>
            	<a href="shop-detail.php" title="[NEWS] วิธีหนีเข้ากลุ่ม BREAKAWAY">
            	<figure class="thumb">
                	<img src="img/thumb/thumb3_371x243-0<? echo $i; ?>.jpg" alt="NEWS">
                    <figcaption><h2>item name<? echo $i ?></h2></figcaption>
                </figure>
                <div class="info">
                    <p>Ducking Tiger เองก็เลยอยากจะรู้จักร้านจักรยานให้มากกว่านี้ เราเลยตั้งเป้าหมายออกไปพูดคุยสนทนากับร้านจักรยานต่างๆ ในประเทศไทย <span class="txt-blue">EN1478<? echo $i; ?> testing</span></p>
                </div>
                <p class="more">Read more</p>
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
    <!-- /javascript -->
  </body>
</html>
