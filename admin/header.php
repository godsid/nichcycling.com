<div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="<?=WWW_URL?>">BagsBugs Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="<?=WWW_URL?>"><img id="logo" src="<?=WWW_URL?>/imgs/logo.png" alt="BagsBugs Admin logo" width="230px" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile"><?=get_cookie('username');?></a><!-- , you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a> --><br />
				<br />
				<a href="<?=WWW_URL?>" title="View the Site">View the Site</a> | <a href="<?=ADMIN_URL?>/logout.php" title="Sign Out">Sign Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="<?=ADMIN_URL?>/products.php" class="nav-top-item no-submenu current"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Products
					</a>
					<a href="<?=ADMIN_URL?>/category.php" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Category
					</a>
				</li>
				<!-- <li> 
					<a href="#" class="nav-top-item"> 
					Pages
					</a>
					<ul>
						<li><a href="<?=ADMIN_URL?>/aboutus.php">About us</a></li>
						<li><a  href="<?=ADMIN_URL?>/contactis.php">Contact us</a></li> 
					</ul>
				</li> -->
				<!-- Add the class "current" to current menu item -->
				<!-- Add class "current" to sub menu items also -->
				<!--  
				<li> 
					<a href="#" class="nav-top-item current"> 
					Articles
					</a>
					<ul>
						<li><a href="#">Write a new Article</a></li>
						<li><a  href="#">Manage Articles</a></li> 
						<li><a href="#">Manage Comments</a></li>
						<li><a href="#">Manage Categories</a></li>
					</ul>
				</li>
				--> 
				
			</ul> <!-- End #main-nav -->
			<!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->

			<!-- <div id="messages" style="display: none"> 
				<h3>3 Messages</h3>
			 
				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
			 
				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>
				
				<form action="#" method="post">
					
					<h4>New Message</h4>
					
					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>
					
					<fieldset>
					
						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>
						
						<input class="button" type="submit" value="Send" />
						
					</fieldset>
					
				</form>
				
			</div>  -->
			<!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->