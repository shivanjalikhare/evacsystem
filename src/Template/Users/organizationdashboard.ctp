<?php echo $this->element('sidemenus\organizationnavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<html >
	<body>
		<div class="container marginbot-50 home-section color-dark">	
			<h3 class="h-bold">Organization Dashboard 
				<span class="pull-right fa fa-user-circle"> <?php $user = $this->request->session()->read('Auth.User');
					if(!empty($user)) {
    				echo $user['email'] ;
					}
				?> </span><br/>
				<?= $this->Html->link(__('View Profile'), ['action' => 'organizationprofile'],array('class'=>'btn btn-lg btn-primary pull-right')); ?></h3>
        		<h3 class="h-bold">Weather Forecast</h3>
				<a href="https://www.accuweather.com/en/us/new-york-ny/10007/current-weather/349727" class="aw-widget-legal">
				<!--
					By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
					-->
				</a><div id="awtd1510635665174" class="aw-widget-36hour"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="true" data-uid="awtd1510635665174" data-editlocation="true"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
			</div>

		 <script  src="js/index.js"></script>
	</body>
</html>