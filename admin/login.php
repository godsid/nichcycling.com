<?php
require_once('header_top.php');
?>
<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>Simpla Admin</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="<?=WWW_URL?>/imgs/logo.png" alt="BagsBugs Admin logo" />
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
				
				<form action="<?=WWW_URL?>/function/fn_login.php" method="post">
					<?php
						if(isset($_GET['status'])&& $_GET['status'] == 'error'){
						
					?>
					<div class="notification error  png_bg">
						<div>
							<?=$_GET['message']?>
						</div>
					</div>
					<?php
						}
					?>
					<p>
						<label>Username</label>
						<input class="text-input" type="text" name="username" />
					</p>
					<div class="clear"></div>
					<p>
						<label>Password</label>
						<input class="text-input" type="password" name="password" />
					</p>
					<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" name="remember" />Remember me
					</p>
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Sign In" />
					</p>
					
				</form>
			</div> <!-- End #login-content -->
			
		</div> <!-- End #login-wrapper -->
		
  </body>
  </html>
