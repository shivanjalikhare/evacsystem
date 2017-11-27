<?php echo $this->element('sidemenus\navbar_loggedin'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmergencyContact $emergencyContact
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to Emergency Contacts'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger')); ?>
        <?= $this->Html->link(__('Edit Details'), ['action' => 'edit', $emergencyContact->eid], array('class'=>'btn btn-lg btn-primary pull-right')); ?>
    </div>
    <div class="container">
        <h3 class="h-bold"><?= __('Emergency Contact') ?></h3>
        <div class="emergencyContacts view large-9 medium-8 columns content">
            <h3><?= h($emergencyContact->name) ?></h3>
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Etype') ?></th>
                    <td><?= h($emergencyContact->etype) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($emergencyContact->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Phone') ?></th>
                    <td><?= h($emergencyContact->phone) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Email') ?></th>
                    <td><?= h($emergencyContact->email) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Address') ?></th>
                    <td><?= h($emergencyContact->Address) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Eid') ?></th>
                    <td><?= $this->Number->format($emergencyContact->eid) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>


