<?php
/**
*
* Nav bar for user when user is logged in
*/
?>
<html>
	<head>

	    <!---- include jquery file and stylesheets-->  
	    
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	    <link href="/evacsystem/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	    <link href="/evacsystem/css/nivo-lightbox.css" rel="stylesheet" />
	    <link href="/evacsystem/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	    <link href="/evacsystem/css/owl.carousel.css" rel="stylesheet" media="screen" />
	    <link href="/evacsystem/css/owl.theme.css" rel="stylesheet" media="screen" />
	    <link href="/evacsystem/css/flexslider.css" rel="stylesheet" />
	    <link href="/evacsystem/css/animate.css" rel="stylesheet" />
	    <link href="/evacsystem/css/style.css" rel="stylesheet">
	    <!-- end -->
		
	</head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

  	<!-- Navigation -->
	  <div id="navigation">
	    <nav class="navbar navbar-custom" role="navigation">
	      <div class="container">
	        <div class="">
	          <div class="col-md-2 mob-logo">
	            <div class="">
	              <div class="site-logo">
	                <?php echo $this->html->image('logo.jpg', array('alt'=>'','width'=>'120px','height'=>'80px'));?>
	              </div>
	            </div>
	          </div>
            <div class="col-md-10 mob-menu">
              <div class="">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu"><i class="fa fa-bars"></i></button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                  <ul class="nav navbar-nav navbar-right">
                    <li><?= $this->Html->link(__('Dashboard'), ['controller' => 'Users','action' => 'organizationdashboard'], array('class'=>'fa fa-user')); ?></li>
                    <li><?= $this->Html->link(__('Team'), ['controller' => 'Orgteam','action' => 'index'], array('class'=>'fa fa-user					')); ?></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-shield"></i>Services <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><?= $this->Html->link(__('Safe Shelter Information'), [], array('class'=>'fa fa-home')); ?></li>
				          <li><?= $this->Html->link(__('Safe Storage Information'), [], array('class'=>'fa fa-building')); ?></li>
				        </ul>
				    </li>
                    <li><?= $this->Html->link('Logout',['controller'=>'users', 'action'=>'logout'], array('class'=>'fa fa-lock')); ?></a></li>
                  </ul>
                </div>
                <!-- /.Navbar-collapse -->
              </div>
            </div>
          </div>
        </div>
        <!-- /.container -->
      </nav>
    </div>
    <!-- /Navigation -->
  </body>
</html>
