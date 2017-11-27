<?php echo $this->element('sidemenus\volunteernavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Volunteerregistration $volunteerregistration
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back to Volunteer List'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger fa fa-tasks' )); ?>
    </div>
    <div class="volunteerregistration form large-9 medium-8 columns content">
        <div class="container">
            <?= $this->Form->create($volunteerregistration) ?>
            <h3 class="h-bold"><?= __('Register Here') ?></h3>
                    <div class="form-group">
                        <?php echo $this->Form->control('name',['placeholder'=>'Enter your name', 'class'=>'form-control']); ?>
                    </div>

                     <div class="form-group">
                         <?php $user = $this->request->session()->read('Auth.User'); ?>
                        <?php echo $this->Form->control('emailid',['value'=>$user['email'], 'class'=>'form-control']);?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('profession',['placeholder'=>'Enter your profession', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('supporttype',['placeholder'=>'Enter the type of support you can extend', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('location',['placeholder'=>'Enter your location', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('notes',['placeholder'=>'Leave your additional information here', 'class'=>'form-control']); ?>
                    </div>
               
            <div class="form-group">
                <?= $this->Form->button(__('Submit'), array('class'=>'btn btn-lg btn-primary' )); ?>
            </div>
                <?= $this->Form->end() ?>
            
        </div>
    </div>
</div>


