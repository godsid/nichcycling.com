<!DOCTYPE html>
<html lang="th">
  <!-- Top Head -->
  <?php @include('incs/header-top.html'); ?>
  <!-- /Top Head -->

  <body>

    <div class="container intro">
      <!-- Header -->
	  <?php @include('incs/header.html'); ?>
      <!-- /Header -->
      
      <!-- Highlight -->
      <div id="highlight" class="mt2 shw">
      	<a href="<?php echo base_url('/home')?>" title="เข้าสู่เว็บไซต์ Nich Cycling"><img src="<?php echo assets_url('/imgs/intro-nich.jpg')?>" alt="Nich Cycling"></a>
      </div>
      <!-- /Highlight -->
	
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
