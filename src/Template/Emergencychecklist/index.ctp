<?php echo $this->element('sidemenus\navbar_loggedin'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emergencychecklist[]|\Cake\Collection\CollectionInterface $emergencychecklist
 */
?>

    
<div class="table table-hover">
    <h3><?= __('Emergency Checklist') ?></h3>
    <?= $this->Html->link(__('Add new item'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('checklist') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emergencychecklist as $emergencychecklist): ?>
            <tr>
                <td><?= $this->Number->format($emergencychecklist->id) ?></td>
                <td><?= h($emergencychecklist->checklist) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $emergencychecklist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $emergencychecklist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emergencychecklist->id)]) ?>
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
