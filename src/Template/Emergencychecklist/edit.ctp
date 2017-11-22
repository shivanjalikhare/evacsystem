<?php echo $this->element('sidemenus\navbar_loggedin'); ?>
<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to Emergency checklist'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger')); ?>
    </div>
    <div class="container">
        <h3 class="h-bold"><?= __('Edit Emergency checklist') ?></h3>
        <div class="emergencychecklist form large-9 medium-8 columns content">
            <?= $this->Form->create($emergencychecklist) ?>
            <fieldset>
                <div class="form-group">
                    <?php
                        echo $this->Form->control('checklist',['placeholder'=>'Enter the item to be added', 'class'=>'form-control']);
                    ?>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit'), array('class'=>'btn btn-lg btn-primary' )); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>




