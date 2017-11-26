<?php echo $this->element('sidemenus\organizationnavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orgteam $orgteam
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to Team'), ['action' => 'index'],array('class'=>'btn btn-lg btn-danger')); ?>
        <?= $this->Html->link(__('Edit Team Information'), ['action' => 'edit', $orgteam->teamid], array('class'=>'btn btn-lg btn-primary')); ?>
    </div>
    <div class="container">
        <h3 class="h-bold"><?= __('Team Details') ?></h3>
        <div class="orgteam view large-9 medium-8 columns content">
        <table class="vertical-table">
            <tr>
                <th scope="row"><?= __('Teamname') ?></th>
                <td><?= h($orgteam->teamname) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Details') ?></th>
                <td><?= h($orgteam->details) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Contact') ?></th>
                <td><?= h($orgteam->contact) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Teamid') ?></th>
                <td><?= $this->Number->format($orgteam->teamid) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Members') ?></th>
                <td><?= $this->Number->format($orgteam->members) ?></td>
            </tr>
        </table>
        </div>
    </div>
</div>


