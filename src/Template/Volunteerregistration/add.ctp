<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Volunteerregistration $volunteerregistration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Volunteerregistration'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="volunteerregistration form large-9 medium-8 columns content">
    <?= $this->Form->create($volunteerregistration) ?>
    <fieldset>
        <legend><?= __('Add Volunteerregistration') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('emailid');
            echo $this->Form->control('profession');
            echo $this->Form->control('supporttype');
            echo $this->Form->control('location');
            echo $this->Form->control('notes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
