<?php echo $this->element('sidemenus\navbar_loggedin'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmergencyContact[]|\Cake\Collection\CollectionInterface $emergencyContacts
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="container">
        <h3 class="h-bold"><?= __('Emergency Contacts') ?></h3>
        <div class="form-group">
            <?= $this->Html->link(__('New Emergency Contact'), ['action' => 'add'],array('class'=>'btn btn-lg btn-primary')); ?>
        </div>
        <table class="table table-bordered table-hover bg-white">
            <thead>
                <tr>
                    <th scope="col"><?= __('Eid') ?></th>
                    <th scope="col"><?= __('Etype') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Phone') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Address') ?></th>
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
                        <?= $this->Html->link(__('Email'), ['action' => 'sendEmail', $emergencyContact->email]) ?>                    
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
</div>
