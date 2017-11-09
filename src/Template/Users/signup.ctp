<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
   

<?= $this->Form->create($user) ?>
  <fieldset>
    <legend>Signup</legend>
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
        <?php echo $this->Form->control('password',['type'=>'password', 'placeholder'=>'Enter your phone number', 'class'=>'form-control']) ?>
        
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
 



