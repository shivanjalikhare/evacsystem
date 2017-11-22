<?php echo $this->element('sidemenus\navbar_loggedin'); ?>
<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to Emergency Contacts'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger' )); ?>
    </div>
    <div class="emergencyContacts form large-9 medium-8 columns content">
        <?= $this->Form->create($emergencyContact) ?>
        <fieldset>
            <h3><?= __('Add Emergency Contact') ?></h3>
            
               <div class="form-group">
                        <?php echo $this->Form->control('etype',['placeholder'=>'Enter type of help', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('name',['placeholder'=>'Enter your email', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('phone',['placeholder'=>'Enter your email', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('email',['placeholder'=>'Enter your email', 'class'=>'form-control']);?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('Address',['placeholder'=>'Enter your email', 'class'=>'form-control']); ?>
                    </div>
        </fieldset>
        <div class="form-group">
            <?= $this->Form->button(__('Submit'), array('class'=>'btn btn-lg btn-primary' )); ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
