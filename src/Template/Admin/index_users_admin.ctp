<?php echo $this->element('sidemenus\admin_navbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?> 
<div class="container marginbot-50 home-section color-dark">
    
        
        <div class="container">
            <h3 class="h-bold"><?= __('Users') ?></h3>
            <div class="form-group">
                <?= $this->Html->link(__('Add New User'), ['action' => 'add'],array('class'=>'btn btn-lg btn-primary')); ?>
            </div>
            <div class="form-group">
                <p>
                    <div class="numberCircle">1</div>Individual
                    <div class="numberCircle">2</div> Volunteer
                    <div class="numberCircle">3</div> Organization
                </p>
            </div>
            <table class="table table-bordered table-hover bg-white">
                <thead>
                    <tr>
                        <th scope="col"><?= __('Email') ?></th>
                        <th scope="col"><?= __('Phone') ?></th>
                        <th scope="col"><?= __('Type') ?></th>
                        <th scope="col"><?= __('Actions') ?></th>
                     </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <?php if($user->Type!=0) { ?>
                    <tr>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->phone) ?></td>
                        <td><?= h($user->Type) ?></td>
                        <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?> |
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?> |
                        <?= $this->Form->postLink(__('Delete'), ['controller'=>'Admin','action' => 'admindelete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                        </td>
                    </tr>
                    <?php } ?>
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