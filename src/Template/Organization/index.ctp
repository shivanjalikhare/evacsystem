<?php echo $this->element('sidemenus\volunteernavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organization[]|\Cake\Collection\CollectionInterface $organization
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="container">
        <h3 class="h-bold"><?= __('Organization') ?></h3>
        <table class="table table-bordered table-hover bg-white">
            <thead>
                <tr>
                    <th scope="col"><?= __('orgid') ?></th>
                    <th scope="col"><?= __('type') ?></th>
                    <th scope="col"><?= __('name') ?></th>
                    <th scope="col"><?= __('address') ?></th>
                    <th scope="col"><?= __('orgemail') ?></th>
                    <th scope="col"><?= __('phone') ?></th>
                    <th scope="col"><?= __('webaddress') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($organization as $organization): ?>
                <tr>
                    <td><?= $this->Number->format($organization->orgid) ?></td>
                    <td><?= h($organization->type) ?></td>
                    <td><?= h($organization->name) ?></td>
                    <td><?= h($organization->address) ?></td>
                    <td><?= h($organization->orgemail) ?></td>
                    <td><?= h($organization->phone) ?></td>
                    <td><?= h($organization->webaddress) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $organization->orgid]) ?> |
                        <?= $this->Html->link(__('Email'), ['action' => 'sendEmail', $organization->orgemail]) ?>
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