<?php echo $this->element('sidemenus\volunteernavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organization $organization
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to Organization'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger')); ?>
        <?= $this->Html->link(__('Send Email and volunteer!'), ['action' => 'sendEmail', $organization->orgemail], array('class'=>'btn btn-lg btn-primary pull-right')); ?>
    </div>
    <div class="container">
        <h3 class="h-bold"><?= __('Emergency Contact') ?></h3>
       <div class="organization view large-9 medium-8 columns content">
            <h3><?= h($organization->name) ?></h3>
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Type') ?></th>
                    <td><?= h($organization->type) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($organization->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Address') ?></th>
                    <td><?= h($organization->address) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Orgemail') ?></th>
                    <td><?= h($organization->orgemail) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Webaddress') ?></th>
                    <td><?= h($organization->webaddress) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Orgid') ?></th>
                    <td><?= $this->Number->format($organization->orgid) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Phone') ?></th>
                    <td><?= $this->Number->format($organization->phone) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>





