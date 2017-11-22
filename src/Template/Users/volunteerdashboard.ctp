<?php echo $this->element('sidemenus\navbar_loggedin'); ?>

<html >
	<body>
		<div class="container marginbot-50 home-section color-dark">	
			<h3 class="h-bold">Dashboard</h3>
			<h2>Hello</h2>

			<?php
			$user = $this->request->session()->read('Auth.User');
					if(!empty($user)) {
    				echo 'Hi ', $user['email'];
					}
					echo "<br />\n";
					echo 'Your Phone No is :',$user['phone'];
					echo "<br />\n";
					echo 'Your Phone No is :',$user['Type'];
			?>
			
		</div>
	  	<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
	    <script  src="js/index.js"></script>
	</body>
</html>