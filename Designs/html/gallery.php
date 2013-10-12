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
            <div class="_sf-col-xs-12-sm-8"><a href="gallery-detail.php"><img src="img/thumb/thumb_465x340-media.jpg" alt="Wheels nich"></a></div>
            <div class="_sf-col-xs-12-sm-4 txt-r">
            	<span class="time">14 JUNE 2013</span>
                <h1>NICH Cycling&amp; Jumm Bike Studio</h1>
                <p class="mb1">SUCCESS FOR TEAM<br>EUROPCAR AND COLNAGO</p>
                <p class="more"><a href="gallery-detail.php" title="View">View</a></p>
                
            </div>
          
          </article>
      </div>
      <!-- /Highlight -->
	  
      <!-- contents -->
      <div id="contents">
        
        <div class="_cd-shw-col-xs-12-sm-6 row thb-grid-media">
        	<? for($i=1;$i<=4;$i++) { ?>
            <article>
            	<a href="gallery-detail.php" title="Gallery">
            	<figure class="thumb">
                	<img src="img/thumb/thumb_330x218-0<? echo $i; ?>.jpg" alt="Gallery">
                    <figcaption><h2>NICH Cycling Gallery <? echo $i; ?></h2></figcaption>
                </figure>
                <div class="info">
                	<span class="time">14 JUNE 2013</span>
                    <p>Ducking Tiger เองก็เลยอยากจะรู้จักร้านจักรยานให้มากกว่านี้ เราเลยตั้งเป้าหมายออกไปพูดคุยสนทนากับร้านจักรยานต่างๆ ในประเทศไทย <span class="txt-blue">EN1478<? echo $i; ?> testing</span></p>
                </div>
                <p class="more">View</p>
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
