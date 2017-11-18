<!DOCTYPE html>
<html>
    <head>
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'> -->
            <script  src="http://code.jquery.com/jquery-2.2.4.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <?= $this->Html->css('font-awesome.min.css') ?>
        <?= $this->Html->css('sidenavstyle.css') ?>
    </head>
<body>
    <div id="responsive-admin-menu">
        <div class="site-logo">
            <?php echo $this->html->image('logo.jpg', array('alt'=>'','width'=>'200px'));?>
        </div>
        
        <!--Menu-->
        <div id="menu">
                <br/>
                <br/>
                <?= $this->Html->link(__('Profile'), ['controller'=>'users', 'action' => 'dashboard'], array('class'=>'icon-dashboard')); ?>
                <?= $this->Html->link(__('List Users'), ['controller'=>'users', 'action' => 'index'], array('class'=>'icon-user')); ?>
                <a href="#" title="Services" on click= "" class="submenu" name="media-sub"><i class="icon-eye-open"></i><span>  
                Services</span></a>
                <!-- Media Sub Menu -->
                    <div id="media-sub" style="display: none;">
                        <?= $this->Html->link(__('   Emergency Checklist'), ['action' => 'checklist'], array('class'=>'icon-dashboard')); ?>
                        <?= $this->Html->link(__('   Safe Shelter Information'), ['controller' => 'Markers', 'action' => 'view']) ?>
                        <?= $this->Html->link(__('   Emergency contact'), ['controller' => 'EmergencyContacts', 'action' => 'index']) ?>
                        <?= $this->Html->link(__('   Weather Forecast'), ['controller' => 'Users','action' => 'forecast']) ?>
                        <?= $this->Html->link(__('   Safe Storage Information'), ['controller' => 'Storagemarkers', 'action' => 'view']) ?>
                         
                    </div>
                <!-- Media Sub Menu -->
                <?= $this->Html->link('Logout',['controller'=>'users', 'action'=>'logout'], array('class'=>'icon-signout')); ?>
        </div>
        <!--Menu-->

    </div>
</body>
</html>












