<?php echo $this->element('sidemenus\navbar_loggedin'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emergencychecklist[]|\Cake\Collection\CollectionInterface $emergencychecklist
 */
?>

<div class="container marginbot-50 home-section color-dark">
    <div class="container">
        <h3 class="h-bold"><?= __('Emergency Checklist') ?></h3>
        <div class="form-group">
            <?= $this->Html->link(__('Add new item'), ['action' => 'add'], array('class'=>'btn btn-lg btn-primary')); ?>
        </div>
    
    <table class="table table-hover bg-white" style="border-radius=25px;">
        <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Checklist') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
             <?php $i = 0; ?>
            <?php foreach ($emergencychecklist as $emergencychecklist): ?>
            <tr>
               
                <td><?php echo ++$i; ?></td>
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
