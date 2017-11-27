<?php echo $this->element('sidemenus\volunteernavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Volunteerregistration $volunteerregistration
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to Volunteer'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger')); ?>
    </div>
    <div class="container">
        <h3 class="h-bold"><?= __('Edit Emergency Contact') ?></h3>
        <div class="volunteerregistration form large-9 medium-8 columns content">
            <?= $this->Form->create($volunteerregistration) ?>
            <fieldset>
                <div class="form-group">
                        <?php echo $this->Form->control('name',['placeholder'=>'Enter your name', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('emailid',['placeholder'=>'Enter your email id', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('profession',['placeholder'=>'Enter your profession', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('supporttype',['placeholder'=>'What kind of support can you extend', 'class'=>'form-control']);?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('notes',['placeholder'=>'Leave additional information here', 'class'=>'form-control']); ?>
                    </div>
            </fieldset>
            <?= $this->Form->button(__('Submit'), array('class'=>'btn btn-lg btn-primary' )); ?>
            <?= $this->Form->end() ?>
        </div> 
    </div>
</div>