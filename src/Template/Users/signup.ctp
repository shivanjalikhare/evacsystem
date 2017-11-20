<?php echo $this->element('sidemenus\side_menu_logged_out'); ?>

<html>
  <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <!--sign up form-->
    <section id="#signupform" class="home-section nopadd-bot color-dark bg-white text-center">
      <div class="container">
        <div class="">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
              <div class="section-heading text-center">
                <h2 class="h-bold"><span class="fa fa-pencil"style="color:#ff9900;"></span>&nbsp&nbsp&nbspSign Up</h2>
                <div class="divider-header"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="panel-body">
          
            <?= $this->Form->create($user) ?> 
                <div class="form-group">  
                    <?php echo $this->Form->control('email',['placeholder'=>'Enter your email', 'class'=>'form-control']) ?>
                </div>

                <div class="form-group">
                    <?php echo $this->Form->control('phone',['placeholder'=>'Enter your phone number', 'class'=>'form-control']) ?>
                </div>

                <div class="form-group">
                    <?php $options = array(
                      '1' =>'Individual',
                      '2' => 'Volunteer',
                      '3' => 'Organization'
                    );
                    echo $this->Form->control('Type', array('options' => $options, 'class'=>'form-control', 'required'=>'required'));
                    ?>
                </div>

                <div class="form-group">
                    <?php echo $this->Form->control('password',['type'=>'password', 'placeholder'=>'Enter your password', 'class'=>'form-control']) ?>
                </div>

                <div class="form-group">
                    <?php echo $this->Form->control('Confirm password',['type'=>'password', 'placeholder'=>'Enter your password again', 'class'=>'form-control', 'required'=>'required']) ?>
                </div>

                <div class="form-group">
                    <?= $this->Form->button(__('Signup'),['class'=>'btn btn-primary'])?>
                </div>
            <?= $this->Form->end() ?>
          
        </div>
      </div>
    </section>
    <!--end signup form-->

    <!-- Section: parallax 1 -->
    <section id="parallax1" class="home-section parallax text-light" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="">
          <div class="col-md-12">
            <div class="text-center">
              <h2 class="big-heading highlight-dark wow bounceInDown" data-wow-delay="0.2s">Lets Prepare and Stay Aware !</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--end of parallax 1-->

    <!--footer-->
    <footer>
    <div class="container">
      <div class="">
        <div class="col-md-6 col-md-offset-3">

          <div class="text-center">
            <a href="#signupform" class="totop"><i class="fa fa-arrow-up" style="color:#ff9900;"></i></a>
            <p>&copy;<b>DES</b>&nbsp&nbsp<i>Disaster Evacuation System</i>. &nbsp&nbsp All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--end of footer-->

  </body>
</html>
 



