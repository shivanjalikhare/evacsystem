<html>
	<head>

    <!---- include jquery file and stylesheets-->  
    <script src="http://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="css/flexslider.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
    <!-- end -->
		
	</head>

	<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  	<!-- Navigation -->
	  <div id="navigation">
	    <nav class="navbar navbar-custom" role="navigation">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-2 mob-logo">
	            <div class="row">
	              <div class="site-logo">
	                <?php echo $this->html->image('logo.jpg', array('alt'=>'','width'=>'120px','height'=>'80px'));?>
	              </div>
	            </div>
	          </div>
            <div class="col-md-10 mob-menu">
              <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu"><i class="fa fa-bars"></i></button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#service">Services</a></li>
  				          <li><a href="#login">Login</a></li>
                    <li><a href="#signup">Sign Up</a></li>
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

    <!-- Section: about -->
    <section id="about" class="home-section color-dark bg-white" style="margin-left: auto; margin-right:auto;">
    
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
              <div class="section-heading text-center">
  			
                <h2 class="h-bold"><span class="fa fa-hand-o-down"style="color:#ff9900;"></span>&nbsp&nbsp&nbsp About</h2>
                <div class="divider-header"></div>
                <p>Working together to ensure that Louisiana is prepared to respond to emergencies, recover from them, and mitigate against their impacts. We coordinate assistance provided to individuals, households, and businesses recovering from disaster or emergency impacts.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="text-center">
        <div class="container">
  	    
          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4">
              <div class="team-wrapper-big wow bounceInUp" data-wow-delay="0.2s">
                <div class="team-wrapper-overlay">
                  <h5>Government Organization</h5>
                  <p></p>
                </div>
                <?= $this->html->image('gov.jpg',array('alt'=>''));?>
              </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-4">
              <div class="team-wrapper-big wow bounceInUp" data-wow-delay="0.5s">
                <div class="team-wrapper-overlay">
                  <h5>Private Organization</h5>
                  <p></p>
                </div>
                
                 <?= $this->html->image('private.jpg',array('alt'=>''));?>
              </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4">
              <div class="team-wrapper-big wow bounceInUp" data-wow-delay="0.8s">
                <div class="team-wrapper-overlay">
                  <h5>Volunteer</h5>
                  <p></p>
                </div>
                <?= $this->html->image('volunteer.png',array('alt'=>''));?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: about -->

    <!-- Section: parallax 1 -->
    <section id="parallax1" class="home-section parallax text-light" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h2 class="big-heading highlight-dark wow bounceInDown" data-wow-delay="0.2s">Lets Prepare and Stay Aware !</h2>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: services -->
    <section id="service" class="home-section color-dark bg-white">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
              <div class="section-heading text-center">
                <h2 class="h-bold"><span class="fa fa-info-circle"style="color:#ff9900;"></span>&nbsp&nbsp&nbspServices</h2>
                <div class="divider-header"></div>
  				<div class="bodycontent">
  					Are you Ready? Lets get Started.
  				</div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="text-center">
        <div class="container">

          <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
                  <div class="service-icon">
                    <span class="fa fa-home fa-5x"style="color:#009900;"></span>
                  </div>
                  <div class="service-desc">
                    <h5>Safe Shelter</h5>
                    
                      <p>Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.</p>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                  <div class="service-icon">
                    <span class="fa fa-building-o fa-5x"style="color:#cc9900;"></span>
                  </div>
                  <div class="service-desc">
                    <h5>Safe Storage</h5>
                    
                      <p> denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.</p>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
                  <div class="service-icon">
                    <span class="fa fa-truck fa-5x"style="color:#800000;"></span>
                  </div>
                  <div class="service-desc">
                    <h5>Transportation</h5>
                    
                      <p>Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.</p>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
              <div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
                  <div class="service-icon">
                    <span class="fa fa-ambulance fa-5x" style="color:#ff0000;"></span>
                  </div>
                  <div class="service-desc">
                    <h5>Medical Aid</h5>
                    
                      <p>Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.</p>
                    
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: services -->

  <!-- Section: parallax 3 -->
  <section id="parallax3" class="home-section parallax text-light text-center" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="testimonialslide clearfix flexslider">
            <ul class="slides">
              <li>
                <blockquote> Create and practice an emergency plan so your family will know what to do in a crisis.</blockquote>
                <h4>Make a Plan</h4>
              </li>
			        <li>
                <blockquote>How will you take care for your pets in an emergency now?</blockquote>
              </li>
			        <li>
                <blockquote>What to do in case you are separated during an emergency?</blockquote>
				    <h4>Hence, Important to make a plan!</h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--login-->
  <section id="login" class="home-section nopadd-bot color-dark bg-white text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
            <div class="section-heading text-center">
              <h2 class="h-bold"><span class="fa fa-users"style="color:#ff9900;"></span>&nbsp&nbsp&nbspLogin</h2>
              <div class="divider-header"></div>
            </div>
          </div>
        </div>
      </div>

    </div>
	<div class="container">
		<div class="panel-body">
						<?= $this->Form->create() ?>
            <fieldset>
			    	  	<div class="form-group">
			    		    <?php 
			    		    echo $this->Form->control('email'); 
			    		    ?>
			    		</div>
			    		<div class="form-group">
			    			<?php
			    			echo $this->Form->control('password');
			    			?>
			    		</div> 			    	
			    		<?= $this->Form->button(__('Submit'),['class'=>"btn btn-lg btn-success btn-block"]) ?>
			    		<br><br>
			    		<span style="margin-left:160px;">
			    			<!--<?php echo $this->Html->link('New User? Sign Up Here',['controller'=>'users', 'action'=>'signup']); ?> &nbsp&nbsp&nbsp-->
                <h6><a href="#signup"> New User? Sign Up Here </a></h6>
			    		</span>
			    	</fieldset>
			      	<?= $this->Form->end() ?>
		</div>
		
	</div>
</section>
  <!--end-->


  <!-- Section: parallax 1 -->
  <section id="parallax1" class="home-section parallax text-light" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-center">
            <h2 class="big-heading highlight-dark wow bounceInDown" data-wow-delay="0.2s">Lets Prepare and Stay Aware !</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end-->

<!--signup -->
<section id="signup" class="home-section nopadd-bot color-dark bg-white text-center">
  

</section>
  <!--end of Sign up-->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <div class="text-center">
            <a href="#about" class="totop"><i class="fa fa-arrow-up" style="color:#ff9900;"></i></a>
            <p>&copy;<b>DES</b>&nbsp&nbsp<i>Disaster Evacuation System</i>. &nbsp&nbsp All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

<!-- core js files-->
<?= $this->Html->script('jquery.sticky.js') ?>
<?= $this->Html->script('slippry.min.js') ?>
<?= $this->Html->script('jquery.flexslider-min.js') ?>
<?= $this->Html->script('morphext.min.js') ?>
<?= $this->Html->script('gmap.js') ?>
<?= $this->Html->script('jquery.mb.YTPlayer.js') ?>
<?= $this->Html->script('jquery.easing.min.js') ?>
<?= $this->Html->script('jquery.scrollTo.js') ?>
<?= $this->Html->script('jquery.appear.js') ?>
<?= $this->Html->script('stellar.js') ?>
<?= $this->Html->script('wow.min.js') ?>
<?= $this->Html->script('owl.carousel.min.js') ?>
<?= $this->Html->script('nivo-lightbox.min.js') ?>
<?= $this->Html->script('jquery.nicescroll.min.js') ?>
<?= $this->Html->script('custom.js') ?>
<?= $this->Html->script('contactform.js"') ?>
</body>
</html>
