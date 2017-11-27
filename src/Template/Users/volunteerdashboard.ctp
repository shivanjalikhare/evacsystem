<?php echo $this->element('sidemenus\volunteernavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<html >
	<body>
		<div class="container marginbot-50 home-section color-dark">	
			<h3 class="h-bold">Volunteer Dashboard<?= $this->Html->link(__('Register'), ['controller' => 'Volunteerregistration','action' => 'index'], array('class'=>'btn btn-lg btn-primary pull-right')); ?></h3>
			<?php $user = $this->request->session()->read('Auth.User');
					if(!empty($user)) {
    				echo 'Hi ', $user['email'];
					}
					echo "<br />\n";
					echo 'Your Phone No is :',$user['phone'];
					echo "<br />\n";
					echo 'Your Phone No is :',$user['Type'];
			?>
			<img src="webroot/Picture1.png"/>
		</div>

		 <script  src="js/index.js"></script>
	</body>
</html>