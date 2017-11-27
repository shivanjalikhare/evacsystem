<?php echo $this->element('sidemenus\volunteernavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Volunteerregistration[]|\Cake\Collection\CollectionInterface $volunteerregistration
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="container">
        <h3 class="h-bold"><?= __('Volunteer') ?></h3>
        <div class="form-group">
            
        </div>
    
    <table class="table table-hover bg-white" style="border-radius=25px;">
        <thead>
            <tr>
                <th scope="col"><?= __('No.') ?></th>
                <th scope="col"><?= __('name') ?></th>
                <th scope="col"><?= __('emailid') ?></th>
                <th scope="col"><?= __('profession') ?></th>
                <th scope="col"><?= __('supporttype') ?></th>
                <th scope="col"><?= __('location') ?></th>
                <th scope="col"><?= __('notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0 ?>
            <?php foreach ($volunteerregistration as $volunteerregistration): ?>
            <tr>
                <td><?php echo ++$i ?></td>
                <td><?= h($volunteerregistration->name) ?></td>
                <td><?= h($volunteerregistration->emailid) ?></td>
                <td><?= h($volunteerregistration->profession) ?></td>
                <td><?= h($volunteerregistration->supporttype) ?></td>
                <td><?= h($volunteerregistration->location) ?></td>
                <td><?= h($volunteerregistration->notes) ?></td>
                <td class="actions">
                    <?php $user = $this->request->session()->read('Auth.User');
                            if($user['email'] == $volunteerregistration->emailid)
                                { ?>
                        <?= $this->Html->link(__('View'), ['action' => 'view', $volunteerregistration->regid]) ?> |
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $volunteerregistration->regid]) ?> |
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $volunteerregistration->regid], ['confirm' => __('Are you sure you want to delete # {0}?', $volunteerregistration->regid)]) ?>
                    <?php } else { ?>
                             <?= $this->Html->link(__('View'), ['action' => 'view',  $volunteerregistration->regid]) ?> |
                             <?= $this->Html->link(__('Email'), ['action' => 'sendEmail',  $volunteerregistration->emailid]) ?>
                        <?php } ?>


                        
                </td>
            </tr>
            <?php endforeach; ?>
            <?php $user = $this->request->session()->read('Auth.User');
                            if($user['email'] != $volunteerregistration->emailid)
                                            { ?>
                            <?= $this->Html->link(__('Register'), ['action' => 'add'], array('class'=>'btn btn-lg btn-primary')); ?>
            <?php } ?>
            <br>
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