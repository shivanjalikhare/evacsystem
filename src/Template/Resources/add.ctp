<?php echo $this->element('sidemenus\volunteernavbar'); ?>
<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container marginbot-50 home-section color-dark">
    <div class="form-group">
        <?= $this->Html->link(__('Back To List of Resources'), ['action' => 'index'], array('class'=>'btn btn-lg btn-danger' )); ?>
    </div>
   <div class="resources form large-9 medium-8 columns content">
        <?= $this->Form->create($resource) ?>
        <fieldset>
            <h3><?= __('Add Resource') ?></h3>
            
               <div class="form-group">
                        <?php echo $this->Form->control('type',['placeholder'=>'Enter type of help', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('description',['placeholder'=>'Describe in brief', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->control('quantity',['placeholder'=>'Enter the number of people you can support for', 'class'=>'form-control']); ?>
                    </div>
                    <div class="form-group">
                         <?php $user = $this->request->session()->read('Auth.User'); ?>
                        <?php echo $this->Form->control('volunteer email',['value'=>$user['email'], 'class'=>'form-control']);?>
                    </div>
        </fieldset>
        <div class="form-group">
            <?= $this->Form->button(__('Submit'), array('class'=>'btn btn-lg btn-primary' )); ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>





