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
      <div id="gallery" class="box">
          <article class="row cb-af main-detail">
            <div class="_sf-col-xs-12-sm-8"><a href="news-detail.php"><img src="img/thumb/thumb_465x340-media.jpg" alt="Wheels nich"></a></div>
            <div class="_sf-col-xs-12-sm-4">
                <h1>WE RIDE.</h1>
                <p class="mb1">แต่อีกเหตุผลที่เราทำก็เพราะว่าต้องการรายได้เสริม ต้องวางรากฐานครอบครัว ชีวิตมีค่าใช้จ่ายเพิ่มมากขึ้น ด้วยที่เรารักจักรยานอยู่แล้วมันก็เลยทำได้ไม่เหนื่อย เพราะเรารักในสิ่งที่ทำ</p>
                <p class="mb1">&quot;เมื่อมีฐานลูกค้ามากขึ้นและกำไรมากขึ้น เราก็อยากจะเอาเงินส่วนนี้มาสนับสนุนทีมและนักกีฬาคนไทยบ้านเรา&quot;</p>
                <p class="mb1">ส่วนคำว่า OEM จริงๆ แล้วเนี่ยมันมีความหมายที่ดี แต่ในบ้านเราเอาคำว่า OEM มาใช้แทนสินค้าก๊อปปี้ ทำให้ความหมายผิดเพี้ยนไป คำว่า OEM เลยกลายเป็นชื่อแทนของก๊อป ซึ่งจริงๆ แล้วไม่ใช่แบบนั้นเลย​</p>
                <p class="more"><a href="news-detail.php" title="Read more">Read more</a></p>
                
            </div>
          
          </article>
      </div>
      <!-- /Highlight -->
	  
      <!-- contents -->
      <div id="contents">
        
        <div class="_cd-shw-col-xs-12-sm-6 row thb-grid-media">
        	<? for($i=1;$i<=4;$i++) { ?>
            <article>
            	<a href="news-detail.php" title="NEWS">
            	<figure class="thumb">
                	<img src="img/thumb/thumb_330x218-0<? echo $i; ?>.jpg" alt="NEWS">
                    <figcaption><h2>NEWS <? echo $i; ?></h2></figcaption>
                </figure>
                <div class="info">
                	<span class="time">14 JUNE 2013</span>
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
