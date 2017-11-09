<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmergencyContact $emergencyContact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emergency Contact'), ['action' => 'edit', $emergencyContact->eid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emergency Contact'), ['action' => 'delete', $emergencyContact->eid], ['confirm' => __('Are you sure you want to delete # {0}?', $emergencyContact->eid)]) ?> </li>
        <li><?= $this->Html->link(__('List Emergency Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emergency Contact'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emergencyContacts view large-9 medium-8 columns content">
    <h3><?= h($emergencyContact->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Etype') ?></th>
            <td><?= h($emergencyContact->etype) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($emergencyContact->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($emergencyContact->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($emergencyContact->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($emergencyContact->Address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eid') ?></th>
            <td><?= $this->Number->format($emergencyContact->eid) ?></td>
        </tr>
    </table>
</div>
