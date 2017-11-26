<?php echo $this->element('sidemenus\organizationnavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orgteam $orgteam
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to Team'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger')); ?>
    </div>
    <div class="container">
        <h3 class="h-bold"><?= __('Edit Team Details') ?></h3>
        <div class="orgteam form large-9 medium-8 columns content">
            <?= $this->Form->create($orgteam) ?>
            <fieldset>
                <div class="form-group">
                        <?php echo $this->Form->control('teamname',['placeholder'=>'Enter the name of team', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('members',['placeholder'=>'Describe the number of members in the team', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('details',['placeholder'=>'Enter the details of the members in this team', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('contact',['placeholder'=>'Enter the contact email id of the team', 'class'=>'form-control']);?>
                    </div>
            </fieldset>
            <?= $this->Form->button(__('Submit'), array('class'=>'btn btn-lg btn-primary' )); ?>
            <?= $this->Form->end() ?>
        </div> 
    </div>
</div>


