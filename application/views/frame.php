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
			 $(".top-nav>ul>li:nth-child(2) a").addClass("selected");
		}); 
	  </script>
      <!-- /Header -->
      <!-- crumbs -->
	  <?php @include('incs/crumbs.html'); ?>
      <!-- /crumbs -->
      <!-- Highlight -->
      <div id="highlight" class="box cat-hl">
      	<a href="frame-detail.php" title="Frame nich">
        <img src="img/thumb/hl-frame.jpg" alt="Frame nich">
        <div class="hl-detail _sf-col-sm-4">
        	<h2>Simple Lines.</h2>
            <p>ในช่วง 2-3 ปีที่ผ่านมา วงการจักรยานในบ้านเราเติบโตขึ้นแบบก้าวกระโดด และมีร้านจักรยานใหม่ๆ เปิดขึ้นเป็นจำนวนมาก สำหรับคนที่พึ่งหันมาสนใจปั่นจักรยานนั้น โจทย์แรกคือจะซื้ออะไร และซื้อที่ไหนดี? 
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
            	<a href="frame-detail.php" title="frame">
            	<figure class="thumb">
                	<img src="img/thumb/thumb_371x243-0<? echo $i; ?>.jpg" alt="NEWS">
                    <figcaption><h2>LEGEND <? echo $i; ?></h2></figcaption>
                </figure>
                <div class="info">
                    <p>Ducking Tiger เองก็เลยอยากจะรู้จักร้านจักรยานให้มากกว่านี้ เราเลยตั้งเป้าหมายออกไปพูดคุยสนทนากับร้านจักรยานต่างๆ ในประเทศไทย <span class="txt-blue">EN1478<? echo $i; ?> testing</span></p>
                </div>
                <p class="more">View bike details</p>
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
