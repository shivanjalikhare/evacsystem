<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!--<?php echo $this->element('sidemenus\side_menu_logged_out'); ?>
-->

<div class="users form large-9 medium-8 columns content">
   

<?= $this->Form->create($user) ?>
  <fieldset>
    <legend>
      Signup
      <button class="btn btn-success" style="margin-left:550px; padding:15px; color:white; text-decoration: none;">
        <?php echo $this->Html->link('Go Back Home',['action'=>'login']); ?></button>
    </legend>
    

    <div class="form-group">  
      <div class="col-lg-10">
        <?php echo $this->Form->control('email',['placeholder'=>'Enter your email', 'class'=>'form-control']) ?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10">
        <?php echo $this->Form->control('phone',['placeholder'=>'Enter your phone number', 'class'=>'form-control']) ?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10">
        <?php $options = array(
          '1' =>'Individual',
          '2' => 'Volunteer',
          '3' => 'Orgainization'
        );
        echo $this->Form->input('Type of User', array('options' => $options));
        ?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10">
        <?php echo $this->Form->control('password',['type'=>'password', 'placeholder'=>'Enter your password', 'class'=>'form-control']) ?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10">
        <?php echo $this->Form->control('Confirm password',['type'=>'password', 'placeholder'=>'Enter your password again', 'class'=>'form-control', 'required'=>'required']) ?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?= $this->Form->button(__('Signup'),['class'=>'btn btn-primary'])?>
      </div>
    </div>
  </fieldset>
<?= $this->Form->end() ?>

<?php
 



