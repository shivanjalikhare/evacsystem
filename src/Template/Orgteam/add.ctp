<?php echo $this->element('sidemenus\organizationnavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orgteam $orgteam
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to Team '), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger' )); ?>
    </div>
   <div class="orgteam form large-9 medium-8 columns content">
        <?= $this->Form->create($orgteam) ?>
        <fieldset>
            <h3><?= __('Add Team') ?></h3>
            
               <div class="form-group">
                        <?php echo $this->Form->control('teamname',['placeholder'=>'Enter the name of team', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('members',['placeholder'=>'Enter the number of members in team', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('details',['placeholder'=>'Enter the name of the members in this team', 'class'=>'form-control']); ?>
                    </div>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('contact',['placeholder'=>'Enter the team email id', 'class'=>'form-control']); ?>
                    </div>
        </fieldset>
        <div class="form-group">
            <?= $this->Form->button(__('Submit'), array('class'=>'btn btn-lg btn-primary' )); ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>




