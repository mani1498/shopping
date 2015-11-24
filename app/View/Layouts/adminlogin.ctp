<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Yalachi Admin - Login</title>
    <link rel="icon" href="<?php echo BASE_URL; ?>favicon.ico" type="image/x-icon" />
    <!--<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<?php 
	echo $this->Html->css(array('validationEngine.jquery','admin','reset','uniform.default','jquery.confirm/jquery.confirm')); 
	echo $this->Html->script(array('jquery-1.7.2.min','jquery.datatables','bootstrap','jquery.validationEngine','languages/jquery.validationEngine-en','jquery.uniform','jquery.confirm','tabs','jquery.fancybox-1.3.4')); 
    ?>
  </head>
  <body style="background:#ececec;">
  	<div class="helpfade"></div>
	<div class="helptips"><div class="loader_block"><div class="loader_block_inner"></div><div class="loader_text">Please wait...</div></div></div>
	<?php //$settings = ClassRegistry::init('Setting')->find(array('sid'=>1)); ?>
    <div class="login-wrapper">
    		<?php 
                echo $this->Html->link($this->Html->image('logo.png',array('border'=>0,'alt'=>'logo')),array('action'=>'index'),array('escape'=>false));			
            ?>
		<?php echo $this->fetch('content'); ?>
    </div>
	<?php $msg=$this->Session->flash(); if(!empty($msg)) echo '<script type="text/javascript">message("'.$msg.'");</script>'; ?>
  </body>
</html>