<?php echo $this->element('sidemenus\navbar_loggedin'); ?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?> 
<div class="container marginbot-50 home-section color-dark">
    
        
        <div class="container">
            <h3 class="h-bold"><?= __('Users') ?></h3>
            <table class="table table-bordered table-hover bg-white">
                <thead>
                    <tr>
                        <th scope="col"><?= __('email') ?></th>
                        <th scope="col"><?= __('phone') ?></th>
                        <th scope="col"><?= __('Type') ?></th>
                     </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->phone) ?></td>
                        <td><?= h($user->Type) ?></td>
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
 