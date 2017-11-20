<?php echo $this->element('sidemenus\navbar_loggedin'); ?>
<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="container">
        <h3 class="h-bold"><?= __('Add Emergencychecklist') ?></h3>
        <?php
            echo $this->Form->control('checklist');
        ?>
        <?= $this->Html->link(__('Back to Checklist'), ['action' => 'index']) ?>
        <table class="table table-bordered table-hover bg-white">
            <?= $this->Form->create($emergencychecklist) ?>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </table>
    </div>
</div>
