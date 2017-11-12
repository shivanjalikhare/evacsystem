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
                    <li><a href="#about"><span class="fa fa-hand-o-down"style="color:#ff9900;"></span>&nbsp&nbsp&nbspAbout Us</a></li>
                    <li><a href="#service"><span class="fa fa-info-circle"style="color:#ff9900;"></span>&nbsp&nbsp&nbspServices</a></li>
  				          <li><a href="#login"><span class="fa fa-users"style="color:#ff9900;"></span>&nbsp&nbsp&nbspLogin</a></li>
                    <li><a href="signup"><span class="fa fa-pencil"style="color:#ff9900;"></span>&nbsp&nbsp&nbspSign Up</a></li>
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