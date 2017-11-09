<?php
/**
 * @var \App\View\AppView $this
 */

?>
<head>
<?= $this->Html->css('login.css') ?>
</head>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<div class="container" >
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login</h3>
			 	</div>
			  	<div class="panel-body">
			    	
			    	<?= $this->Form->create() ?>
                    <fieldset>
			    	  	<div class="form-group">
			    		    <?php 
			    		    echo $this->Form->control('email'); 
			    		    ?>
			    		</div>
			    		<div class="form-group">
			    			<?php
			    			echo $this->Form->control('password');
			    			?>
			    		</div>
			    		<!-- <div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div> -->
			    		<?= $this->Form->button(__('Submit'),['class'=>"btn btn-lg btn-success btn-block"]) ?>
			    	</fieldset>
			      	<?= $this->Form->end() ?>
                      <hr/>
                    <center><h4>OR</h4></center>
                    <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Login via facebook">
			    </div>
			</div>
		</div>
	</div>
</div>