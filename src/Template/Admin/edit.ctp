<?php echo $this->element('sidemenus\admin_navbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to List of Users'), ['action' => 'index_users_admin'], array('class'=>'btn btn-lg btn-danger')); ?>
    </div>
    <div class="container">
        <h3 class="h-bold"><?= __('Edit User Details') ?></h3>
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
            <?= $this->Form->button(__('Submit'), array('class'=>'btn btn-lg btn-primary' )); ?>
            <?= $this->Form->end() ?>
        </div> 
    </div>
</div>