<?php echo $this->element('sidemenus\side_menu_logged_in'); ?>

<html >
	<body>
		<div id="content-wrapper">	
			<h3>Dashboard</h3>
			<button class="btn-btn-danger"><?php echo $this->html->link('Reset Password',['controller'=>'users','action'=>'password']);?> </button>
		</div>
	  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	  <script  src="js/index.js"></script>
	</body>
</html>
