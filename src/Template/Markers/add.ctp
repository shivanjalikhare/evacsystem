<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Markers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="markers form large-9 medium-8 columns content">
    <?= $this->Form->create($marker) ?>
    <fieldset>
        <legend><?= __('Add Marker') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('address');
            echo $this->Form->control('lat');
            echo $this->Form->control('lng');
            echo $this->Form->control('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
