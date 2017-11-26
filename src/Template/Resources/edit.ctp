<?php echo $this->element('sidemenus\volunteernavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to List of Resources'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger')); ?>
    </div>
    <div class="container">
        <h3 class="h-bold"><?= __('Edit Volunteer Resource Details') ?></h3>
        <div class="resources form large-9 medium-8 columns content">
            <?= $this->Form->create($resource) ?>
            <fieldset>
                <div class="form-group">
                        <?php echo $this->Form->control('type',['placeholder'=>'Enter type of help', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('description',['placeholder'=>'Describe the type of help in brief', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('quantity',['placeholder'=>'Enter the number of people you can help', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('volunteeremail',['placeholder'=>'Enter your email', 'class'=>'form-control']);?>
                    </div>
            </fieldset>
            <?= $this->Form->button(__('Submit'), array('class'=>'btn btn-lg btn-primary' )); ?>
            <?= $this->Form->end() ?>
        </div> 
    </div>
</div>