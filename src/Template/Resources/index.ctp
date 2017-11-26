<?php echo $this->element('sidemenus\volunteernavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resource[]|\Cake\Collection\CollectionInterface $resources
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="container">
        <h3 class="h-bold"><?= __('Resources') ?></h3>
        <div class="form-group">
            <?= $this->Html->link(__('Add Resource'), ['action' => 'add'],array('class'=>'btn btn-lg btn-primary')); ?>
        </div>
        <table class="table table-bordered table-hover bg-white">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                    <th scope="col" ><?= $this->Paginator->sort('volunteeremail') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resources as $resource): ?>
                <tr>
                    <td><?= $this->Number->format($resource->id) ?></td>
                    <td><?= h($resource->type) ?></td>
                    <td><?= h($resource->description) ?></td>
                    <td><?= $this->Number->format($resource->quantity) ?></td>
                    <td><?= h($resource->volunteeremail) ?></td>
                    <td class="actions">
                        <?php $user = $this->request->session()->read('Auth.User');
                            if($user['email'] == $resource->volunteeremail)
                                { ?>
                                 <?= $this->Html->link(__('View'), ['action' => 'view', $resource->id]) ?> |
                                 <?= $this->Html->link(__('Edit'), ['action' => 'edit', $resource->id]) ?> |
                                 <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $resource->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resource->id)]) ?>
                        
                        <?php } else { ?>
                             <?= $this->Html->link(__('View'), ['action' => 'view', $resource->id]) ?>
                        <?php } ?>
                    
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





