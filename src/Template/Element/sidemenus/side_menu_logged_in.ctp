<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: #ff9900;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    border-radius:10px;
    width:250px;
    padding:20px;
    text-decoration: none;
    height: 60px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    width:250px;
    border-radius:10px;
}

.dropdown-content a:hover {background-color: #007095}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>
<body>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <button class="dropbtn"><?= $this->Html->link(__('Profile'), ['controller'=>'users', 'action' => 'dashboard']) ?></button>
       <button class="dropbtn"><?= $this->Html->link(__('List Users'), ['controller'=>'users', 'action' => 'index']) ?></button>
       <button class="dropbtn"><?= $this->Html->link('Logout',['controller'=>'users', 'action'=>'logout']); ?></button>

        <div class="dropdown">
  		 <button class="dropbtn">Services</button>
  		 <div class="dropdown-content">
    		<a><?= $this->Html->link(__('Emergency Checklist'), ['action' => 'checklist']) ?></a>
    		<a href="#">Safe Route Information</a>
    		<a href="#">Weather Updates</a>
  		 </div>
		 </div>
		
    </ul>
</nav>
</body>
</html>












