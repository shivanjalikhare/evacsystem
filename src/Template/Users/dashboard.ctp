<?php echo $this->element('sidemenus\navbar_loggedin'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?> 
<html >

	<body>
		<div class="container marginbot-50 home-section color-dark">	
			<h3 class="h-bold">User Dashboard</h3>
			<?php $user = $this->request->session()->read('Auth.User');
					if(!empty($user)) {
    				echo 'Hi ', $user['email'];
					}
					echo "<br />\n";
					echo 'Your Phone No is :',$user['phone'];
					echo "<br />\n";
					echo 'Your Type is :',$user['Type'];
					
			?>
		</div>

			<!--end of view-->
		</div>
	  	<script  src="js/index.js"></script>
	</body>
</html>
