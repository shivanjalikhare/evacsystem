<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $emergencychecklist->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $emergencychecklist->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Emergencychecklist'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="emergencychecklist form large-9 medium-8 columns content">
    <?= $this->Form->create($emergencychecklist) ?>
    <fieldset>
        <legend><?= __('Edit Emergencychecklist') ?></legend>
        <?php
            echo $this->Form->control('checklist');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
