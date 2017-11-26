<?php echo $this->element('sidemenus\admin_navbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to List of Users'), ['action' => 'index_users_admin'], array('class'=>'btn btn-lg btn-danger' )); ?>
    </div>
    <div class="users form large-9 medium-8 columns content">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <h3><?= __('Add User') ?></h3>
                    
                    <div class="form-group">
                        <?php echo $this->Form->control('email',['placeholder'=>'Enter Email ID', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('password',['placeholder'=>'Enter password', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('phone',['placeholder'=>'Enter your phone number', 'class'=>'form-control']); ?>
                    </div>
                    
                    <div class="form-group">
                        <?php echo $this->Form->control('Type',['placeholder'=>'Enter Type', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <p>
                            <div class="numberCircle">1</div>Individual
                            <div class="numberCircle">2</div> Volunteer
                            <div class="numberCircle">3</div> Organization
                        </p>
                    </div>
        </fieldset>
        <div class="form-group">
            <?= $this->Form->button(__('Submit'), array('class'=>'btn btn-lg btn-primary' )); ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
