<?php echo $this->element('sidemenus\navbar_loggedin'); ?>
<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container marginbot-50 home-section color-dark">
   
    <div class="container">
        <h3 class="h-bold"><?= __('Edit Your Details') ?></h3>
        <div class="users form large-9 medium-8 columns content">
           <?= $this->Form->create($user) ?>
            <fieldset>
                <div class="form-group">
                        <?php echo $this->Form->control('email',['placeholder'=>'Enter your email', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('password',['placeholder'=>'Enter password', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('phone',['placeholder'=>'Enter your email', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('Type',['placeholder'=>'Enter your type', 'class'=>'form-control']);?>
                    </div>
            </fieldset>
			<div class="form-group">
            <?= $this->Form->button(__('Submit'), array('class'=>'btn btn-lg btn-primary' )); ?>
			</div>
            <?= $this->Form->end() ?>
        </div> 
    </div>
</div>

