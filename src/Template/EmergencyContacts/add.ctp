<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Emergency Contacts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="emergencyContacts form large-9 medium-8 columns content">
    <?= $this->Form->create($emergencyContact) ?>
    <fieldset>
        <legend><?= __('Add Emergency Contact') ?></legend>
        <?php
            echo $this->Form->control('etype');
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('Address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
