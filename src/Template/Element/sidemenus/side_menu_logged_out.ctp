<?php
/**
*
* A side menu for user when user is logged out
*/
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar" >
    <ul class="side-nav" style="margin-left:-1px;">
    	<li><?= $this->Html->link(__('Login'), ['controller'=>'users', 'action' => 'login']) ?></li>
       <li><?= $this->Html->link(__('Sign Up'), ['controller'=>'users', 'action' => 'signup']) ?></li>
       <li><?= $this->Html->link(__('Forgot Password'), ['controller'=>'users', 'action' => 'forgot-password']) ?></li>
       <li><?= $this->Html->link(__('About Us'), ['controller'=>'users', 'action' => 'signup']) ?></li>
       <li><?= $this->Html->link(__('Contact Us'), ['controller'=>'users', 'action' => 'signup']) ?></li>
    </ul>
</nav>