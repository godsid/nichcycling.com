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
			 $(".top-nav>ul>li:nth-child(5) a").addClass("selected");
		}); 
	  </script>
      <!-- /Header -->
      <!-- crumbs -->
	  <?php @include('incs/crumbs.html'); ?>
      <!-- /crumbs -->
      <!-- Main -->
      <div id="aboutus" class="box">
          <div class="row cb-af main-detail">
            <div class="_sf-col-xs-12-sm-8"><img src="img/aboutus.png" alt="Wheels nich"></div>
            <div class="_sf-col-xs-12-sm-4">
                <h1>OUR STORY.</h1>
                <p class="mb1">แต่อีกเหตุผลที่เราทำก็เพราะว่าต้องการรายได้เสริม ต้องวางรากฐานครอบครัว ชีวิตมีค่าใช้จ่ายเพิ่มมากขึ้น ด้วยที่เรารักจักรยานอยู่แล้วมันก็เลยทำได้ไม่เหนื่อย เพราะเรารักในสิ่งที่ทำ</p>
                <p class="mb1">&quot;เมื่อมีฐานลูกค้ามากขึ้นและกำไรมากขึ้น เราก็อยากจะเอาเงินส่วนนี้มาสนับสนุนทีมและนักกีฬาคนไทยบ้านเรา&quot;</p>
                <p class="mb1">ส่วนคำว่า OEM จริงๆ แล้วเนี่ยมันมีความหมายที่ดี แต่ในบ้านเราเอาคำว่า OEM มาใช้แทนสินค้าก๊อปปี้ ทำให้ความหมายผิดเพี้ยนไป คำว่า OEM เลยกลายเป็นชื่อแทนของก๊อป ซึ่งจริงๆ แล้วไม่ใช่แบบนั้นเลย​</p>
                <div class="bar _sf-col-xs-4 _cd-col-xs-4 txt-c">
                    <a href="#contactus" title="CONTACT US" class="ui-btn-blue">CONTACT US</a>
                    <a href="#dealer" title="DEALER" class="ui-btn-blue">DEALER</a>
                    <a href="#warranty" title="WARRANTY" class="ui-btn-blue">WARRANTY</a>
                </div>
                
            </div>
          
          </div>
      </div>
      <!-- /Main -->
	  
      <!-- contents -->
      <div id="contents">
      	<div id="contactus" class="box">
        	<div class="row cb-af main-detail">
            <div class="_sf-col-xs-12-sm-8"><img src="img/map.png" alt="Wheels nich"></div>
            <div class="_sf-col-xs-12-sm-4">
                <h1>CONTACT.</h1>
                <h2>Nich Cycling Co., Ltd.</h2>
                <p class="mb1">
                <strong>ก่อตั้ง</strong>: กรกฏาคม 2010<br>
                <strong>ที่ตั้ง</strong>: รามคำแหง 24 แยก 32 ตรงข้ามมหาวิทยาลัย ABAC<br>
                <strong>ติดต่อ</strong>: 083 248 5558 / <a href="#" title="Facebook">Facebook</a> / <a href="#" title="Instagram">Instagram</a> / <a href="#" title="Line – nichcycling">Line – nichcycling</a><br>
                <strong>แผนที่</strong>: Google Map<br>
                </p>
                <p class="mb1">
                <strong>Nich Cycling</strong> ฝ่าย RoadBike 083-248-5558 Line : nichcycling Whatsapp : 083-248-5558 /ฝ่าย Fixed 080-244-2482<br>
<strong>GPS</strong> : 13.754481,100.627325</p>
            </div>
          
          </div>
        </div>
        
        <div id="dealer" class="box">
        	<div class="row cb-af main-detail">
            <div class="_sf-col-xs-12-sm-8"><img src="img/map-world.png" alt="Wheels nich"></div>
            <div class="_sf-col-xs-12-sm-4">
                <h1>FIND A DEALER:</h1>
                <form action="#" method="post">
                	<fieldset>
                    	<legend class="hid">FIND A DEALER.</legend>
                        <p class="mb1"><label for="cont-01">CITY/TOWN:</label><br><input type="text" value="" title="" id="cont-01" name="cont-01" class="txt-box"></p>
                        <p class="mb1"><label for="cont-02">STATE/COUNTY:</label><br><input type="text" value="" title="" id="cont-02" name="cont-02" class="txt-box"></p>
                        <p class="mb1"><label for="cont-03">ZIP/PASSCODE:</label><br><input type="text" value="" title="" id="cont-03" name="cont-03" class="txt-box"></p>
                        <p class="mb1"><label for="cont-04">COUNTY:</label><br><input type="text" value="" title="" id="cont-04" name="cont-04" class="txt-box"></p>
                        <p class="mb1"><label for="cont-05">SELECT A DISTANCE:</label><br><select id="cont-05" name="cont-05" class="select-box fix">
                    	<option value="0">km.</option>
                    	<? for($i=1;$i<=10;$i++) { ?><option value="<? echo $i; ?>"><? echo $i*100; ?> km.</option><? } ?>
                    </select></p>
                        <p><input type="submit" value="SEARCH" id="deal-srh" class="btn-srh"></p>
                    </fieldset>
                </form>
            </div>
          
          </div>
        </div>
        
        <div id="warranty" class="box">
        	<div class="row cb-af main-detail">
            <div class="_sf-col-xs-12-sm-8">
            	<div class="info">
                	<h1>WARRANTY.</h1>
                    <p>เรื่อง QC – ของที่ส่งมาจากโรงงานไต้หวัน / จีนมีปัญหาบ้างหรือเปล่า เราเช็ค QC ยังไง?
ชิน: สินค้าแต่ละอย่างต้องมีปัญหาบ้างอยู่แล้ว เวลารับของมาแล้วเราก็จะเช็คอีกที ถ้าเป็นปัญหาหลังการขายเราก็มีประกัน warranty ให้อยู่แล้ว เหมือนบริษัทอินเตอร์ คือถ้าเสียเราก็เปลี่ยนให้ใหม่เลย เฟรม 3 ปี ล้อ 1 ปี โดยรวมแล้วปัญหาที่เจอถือว่าน้อยมาก แค่ราวๆ 1% เท่านั้น</p>
                    <ol class="show-list mt2">
                    	<li>Traditional 3:1 airfoil in head tube to manage relatively smooth</li>
                        <li>Airfoil shape combining a blunt leading edge with a longer trailing edge cleans up the turbulent airflow coming from the fork and rotating front wheel.</li>
                        <li>Relatively smooth, laminar airflow.</li>
                        <li>Airfoil shape combining a blunt leading edge with a longer trailing edge cleans up the turbulent airflow coming from the fork and rotating front wheel.</li>
                        <li>coming from the fork and rotating front wheel.</li>
                    </ol>
                </div>
            </div>
            <div class="_sf-col-xs-12-sm-4">
				&nbsp; 
            </div>
          
          </div>
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
