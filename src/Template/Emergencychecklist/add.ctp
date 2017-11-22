<?php echo $this->element('sidemenus\navbar_loggedin'); ?>
<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to Checklist'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger fa fa-tasks' )); ?>
    </div>
    <div class="Emergencychecklist form large-9 medium-8 columns content">
        <div class="container">
            <?= $this->Form->create($emergencychecklist) ?>
            <h3 class="h-bold"><?= __('Add Emergencychecklist') ?></h3>
            <div class="form-group">
                <?php
                    echo $this->Form->control('checklist',['placeholder'=>'Enter checklist item', 'class'=>'form-control']);
                ?>            
            </div>
               
            <div class="form-group">
                <?= $this->Form->button(__('Add'), array('class'=>'btn btn-lg btn-primary' )); ?>
            </div>
                <?= $this->Form->end() ?>
            
        </div>
    </div>
</div>
