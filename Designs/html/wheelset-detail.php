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
      <div id="highlight" class="box">
      <div class="row cb-af main-detail">
      	<div class="_sf-col-xs-12-sm-8"><img src="img/thumb/thumb_440x340-02.jpg" alt="Wheels nich"></div>
        <div class="_sf-col-xs-12-sm-4 txt-r">
        	<h1>808 Firecrast&reg; Carbon Clincher</h1>
            <p>Every bike starts with an idea. It comes from cyclists' needs and from our desire to create more efficient and innovative bikes. </p>
            <div class="price">
            	<b class="txt-blue">$ 1500.00</b>
                <form action="#" method="get">
                	<p><select id="model" name="model" class="select-box">
                    	<option value="0">Select Bike Model</option>
                    	<? for($i=1;$i<=8;$i++) { ?><option value="<? echo $i; ?>">Wheels <? echo $i*101; ?></option><? } ?>
                    </select></p>
                </form>
            </div>
            <div class="bar bt _sf-col-xs-4 _cd-col-xs-4 txt-c">
            	<a href="#features" title="FEATURES" class="ui-btn-blue">FEATURES</a>
                <a href="#geometry" title="GEOMETRY" class="ui-btn-blue">GEOMETRY</a>
                <a href="#specs" title="SPECS" class="ui-btn-blue">SPECS</a>
                <a href="#warranty" title="WARRANTY" class="ui-btn-blue">WARRANTY</a>
            </div>
            
        </div>
      
      </div>
      </div>
      <!-- /Highlight -->
	  
      <!-- contents -->
      <div id="contents">
      	<div class="box thb-list-spec imgl">
        	<article>
            	<figure class="thumb top">
                	<img src="img/thumb/detail-frame-01.jpg" alt="Wheels nich">
                    <figcaption class="hid">Wheels  nich</figcaption>
                </figure>
                <div class="info">
                	<h2 id="features">FEATURES.</h2>
                    <p>A number of changes were made to the BURAsl to further decrease the Wheels weight. The carbon lay-up was re-engineered to utilize longer strips of carbon pre-preg instead of shorter pieces, minimizing the number of overlapping layers. </p>
                </div>
                <footer>
					<strong>share this:</strong>
                    <ul>
                    	<li class="fb"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNichCycling&amp;width=80px&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" Wheelsborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe></li>
                        <li class="fb-sent">
                        <div class="fb-send" data-href="https://www.facebook.com/NichCycling" data-width="70" data-height="The pixel height of the plugin" data-colorscheme="light"></div>
                        </li>
                        <li class="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
                    </ul>
                </footer>
            </article>
        </div>
        
        <div class="box thb-list-spec imgl">
        	<article>
            	<figure class="thumb top">
                	<img src="img/thumb/detail-wheel-02.jpg" alt="Wheels nich">
                    <figcaption class="hid">Wheels nich</figcaption>
                </figure>
                <div class="info">
                	<h2 id="geometry">WHEELS GEOMETRY.</h2>
                    <p><img src="img/thumb/detail-frame-02-2.jpg" alt="Wheels nich"></p>
                </div>
                <footer>
					<strong>share this:</strong>
                    <ul>
                    	<li class="fb"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNichCycling&amp;width=80px&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" Wheelsborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe></li>
                        <li class="fb-sent">
                        <div class="fb-send" data-href="https://www.facebook.com/NichCycling" data-width="70" data-height="The pixel height of the plugin" data-colorscheme="light"></div>
                        </li>
                        <li class="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
                    </ul>
                </footer>
            </article>
        </div>
        
        <div class="box thb-list-spec imgl">
        	<article>
            	<figure class="thumb top">
                	<img src="img/thumb/detail-wheel-03.jpg" alt="Wheels nich">
                    <figcaption class="hid">Wheels nich</figcaption>
                </figure>
                <div class="info">
                	<h2 id="specs">SPECS.</h2>
                    <ul class="row">
                    	<li>
                            <strong class="_sf-col-xs-4">Wheels Geometry</strong>
                            <span class="_sf-col-xs-8">Traditional 3:1 airfoil in head tube</span>
                        </li>
                        <li>
                            <strong class="_sf-col-xs-4">Wheels size</strong>
                            <span class="_sf-col-xs-8">Airfoil shape combining a blunt leading edge with a longer trailing edge cleans up the turbulent airflow coming from the fork and rotating front wheel.</span>
                        </li>
                        <li>
                            <strong class="_sf-col-xs-4">Wheels color</strong>
                            <span class="_sf-col-xs-8">airfoil in head tube</span>
                        </li>
                        <li>
                            <strong class="_sf-col-xs-4">Wheels weight</strong>
                            <span class="_sf-col-xs-8">Kammtail airfoil, with a wide and truncated tail, combined with a narrower seat tube</span>
                        </li>
                        <li>
                            <strong class="_sf-col-xs-4">Finish</strong>
                            <span class="_sf-col-xs-8">Traditional tube</span>
                        </li>
                        <li>
                            <strong class="_sf-col-xs-4">Handset</strong>
                            <span class="_sf-col-xs-8">Traditional kammtail airfoil shields rear wheel.</span>
                        </li>
                    </ul>
                </div>
                <footer>
					<strong>share this:</strong>
                    <ul>
                    	<li class="fb"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNichCycling&amp;width=80px&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" Wheelsborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe></li>
                        <li class="fb-sent">
                        <div class="fb-send" data-href="https://www.facebook.com/NichCycling" data-width="70" data-height="The pixel height of the plugin" data-colorscheme="light"></div>
                        </li>
                        <li class="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
                    </ul>
                </footer>
            </article>
        </div>
        
        <div class="box thb-list-spec imgl">
        	<article>
            	<figure class="thumb top">
                	<img src="img/thumb/detail-wheel-04.jpg" alt="Wheels nich">
                    <figcaption class="hid">Wheels  nich</figcaption>
                </figure>
                <div class="info">
                	<h2 id="warranty">WARRANTY.</h2>
                    <p>A number of changes were made to the BURAsl to further decrease the Wheels weight. The carbon lay-up was re-engineered to utilize longer strips of carbon</p>
                    <p>re-engineered to utilize longer strips of carbon pre-preg instead of shorter pieces, minimizing the number of overlapping layers. </p>
                    <ol class="mt2">
                    	<li>Traditional 3:1 airfoil in head tube to manage relatively smooth, laminar airflow.</li>
                        <li>Airfoil shape combining a blunt leading edge with a longer trailing edge cleans up the turbulent airflow coming from the fork and rotating front wheel.</li>
                    </ol>
                </div>
                <footer>
					<strong>share this:</strong>
                    <ul>
                    	<li class="fb"><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNichCycling&amp;width=80px&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" Wheelsborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe></li>
                        <li class="fb-sent">
                        <div class="fb-send" data-href="https://www.facebook.com/NichCycling" data-width="70" data-height="The pixel height of the plugin" data-colorscheme="light"></div>
                        </li>
                        <li class="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></li>
                    </ul>
                </footer>
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
    <!-- /javascript -->
  </body>
</html>
