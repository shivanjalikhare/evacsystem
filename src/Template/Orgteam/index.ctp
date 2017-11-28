<?php echo $this->element('sidemenus\organizationnavbar'); ?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orgteam[]|\Cake\Collection\CollectionInterface $orgteam
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="container">
        <h3 class="h-bold"><?= __('Team') ?></h3>
        <div class="form-group">
            <?= $this->Html->link(__('Add Team'), ['action' => 'add'],array('class'=>'btn btn-lg btn-primary')); ?>
        </div>
    
    <table class="table table-hover bg-white" style="border-radius=25px;">
        <thead>
            <tr>
                <th scope="col"><?= __('No.') ?></th>
                <th scope="col"><?= __('teamname') ?></th>
                <th scope="col"><?= __('members') ?></th>
                <th scope="col"><?= __('details') ?></th>
                <th scope="col"><?= __('contact') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0 ?>
            <?php foreach ($orgteam as $orgteam): ?>
                    <tr>
                        <td><?php echo ++$i ?></td>
                        <td><?= h($orgteam->teamname) ?></td>
                        <td><?= $this->Number->format($orgteam->members) ?></td>
                        <td><?= h($orgteam->details) ?></td>
                        <td><?= h($orgteam->contact) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $orgteam->teamid]) ?> |
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orgteam->teamid]) ?> |
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orgteam->teamid], ['confirm' => __('Are you sure you want to delete # {0}?', $orgteam->teamid)]) ?>
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














