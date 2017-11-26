<?php echo $this->element('sidemenus\volunteernavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resource $resource
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to List of Resources'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger')); ?>
        <?php $user = $this->request->session()->read('Auth.User');
            if($user['email'] == $resource->volunteeremail)
            { ?>
                 <?= $this->Html->link(__('Edit Resource'), ['action' => 'edit', $resource->id], array('class'=>'btn btn-lg btn-primary')); ?>
                <?= $this->Form->postLink(__('Delete Resource'), ['action' => 'delete', $resource->id],array('class'=>'btn btn-lg btn-danger'),['confirm' => __('Are you sure you want to delete # {0}?', $resource->id)]); ?>
        <?php } ?>
    </div>
    <div class="container">
        <h3 class="h-bold"><?= __('Volunteer Resource Details') ?></h3>
        <div class="resources view large-9 medium-8 columns content">
            <h3><?= h($resource->id) ?></h3>
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Type') ?></th>
                    <td><?= h($resource->type) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Description') ?></th>
                    <td><?= h($resource->description) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Volunteeremail') ?></th>
                    <td><?= h($resource->volunteeremail) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($resource->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($resource->quantity) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>