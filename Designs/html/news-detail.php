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
      <div id="contents" class="box">
        
        <div class="row">
            <article class="read-news  _sf-shw-col-xs-12">
            	<img src="img/thumb/News_714x473.jpg" alt="Highlight">
                <div>
                    <header>
                        <h1>NEWS</h1>
                        <span class="time">14 JUNE 2013</span>
                        <h2>NICH Cycling&amp; Jumm Bike Studio</h2>
                    </header>
                    <div class="detail">
                        <img class="ct-right" src="img/thumb/thumb_330x218-02.jpg" alt="NICH Cycling&amp; Jumm Bike Studio">
                        <p class="mb1">แต่อีกเหตุผลที่เราทำก็เพราะว่าต้องการรายได้เสริม ต้องวางรากฐานครอบครัว ชีวิตมีค่าใช้จ่ายเพิ่มมากขึ้น ด้วยที่เรารักจักรยานอยู่แล้วมันก็เลยทำได้ไม่เหนื่อย เพราะเรารักในสิ่งที่ทำ</p>
                        <p class="mb1">&quot;เมื่อมีฐานลูกค้ามากขึ้นและกำไรมากขึ้น เราก็อยากจะเอาเงินส่วนนี้มาสนับสนุนทีมและนักกีฬาคนไทยบ้านเรา&quot;</p>
                        <p class="mb1">ส่วนคำว่า OEM จริงๆ แล้วเนี่ยมันมีความหมายที่ดี แต่ในบ้านเราเอาคำว่า OEM มาใช้แทนสินค้าก๊อปปี้ ทำให้ความหมายผิดเพี้ยนไป คำว่า OEM เลยกลายเป็นชื่อแทนของก๊อป ซึ่งจริงๆ แล้วไม่ใช่แบบนั้นเลย​</p>
                    </div>
                    <footer class="share-ft">
                        <strong>share this:</strong>
                        <ul>
                            <li class="fb"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNichCycling&amp;width=80px&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe></li>
                            <li class="fb-sent">
                            <div class="fb-send" data-href="https://www.facebook.com/NichCycling" data-width="70" data-height="The pixel height of the plugin" data-colorscheme="light"></div>
                            </li>
                            <li class="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
                        </ul>
                    </footer>
                </div>
            </article>
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

<script src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="js/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.fancybox').fancybox();
});
</script>
    <!-- /javascript -->
  </body>
</html>
