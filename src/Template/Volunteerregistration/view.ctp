<?php echo $this->element('sidemenus\volunteernavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Volunteerregistration $volunteerregistration
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to Volunteer'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger')); ?>
    </div>
    <div class="container">
        <h3 class="h-bold"><?= __('Volunteer Information') ?></h3>
        <div class="volunteerregistration view large-9 medium-8 columns content">
            <h3><?= h($volunteerregistration->name) ?></h3>
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($volunteerregistration->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Emailid') ?></th>
                    <td><?= h($volunteerregistration->emailid) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Profession') ?></th>
                    <td><?= h($volunteerregistration->profession) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Supporttype') ?></th>
                    <td><?= h($volunteerregistration->supporttype) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Location') ?></th>
                    <td><?= h($volunteerregistration->location) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Notes') ?></th>
                    <td><?= h($volunteerregistration->notes) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Regid') ?></th>
                    <td><?= $this->Number->format($volunteerregistration->regid) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>







