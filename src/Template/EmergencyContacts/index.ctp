<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmergencyContact[]|\Cake\Collection\CollectionInterface $emergencyContacts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Emergency Contact'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Go to Dashboard'), ['controller' => 'Users','action' => 'dashboard']) ?></li>

    </ul>
</nav>
<div class="emergencyContacts index large-9 medium-8 columns content">
    <h3><?= __('Emergency Contacts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('eid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emergencyContacts as $emergencyContact): ?>
            <tr>
                <td><?= $this->Number->format($emergencyContact->eid) ?></td>
                <td><?= h($emergencyContact->etype) ?></td>
                <td><?= h($emergencyContact->name) ?></td>
                <td><?= h($emergencyContact->phone) ?></td>
                <td><?= h($emergencyContact->email) ?></td>
                <td><?= h($emergencyContact->Address) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $emergencyContact->eid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emergencyContact->eid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emergencyContact->eid], ['confirm' => __('Are you sure you want to delete # {0}?', $emergencyContact->eid)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
