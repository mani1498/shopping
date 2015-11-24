 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Adminsoft-Admin</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="copyright" content="" />
<meta name="BaseUrl" content="<?php echo BASE_URL;?>" />
<link rel="shortcut icon" href="<?php echo BASE_URL; ?>favicon.ico" />
	<script type="text/javascript" src="<?php echo BASE_URL; ?>scripts"></script>
<?php echo $this->Html->css(array('admin','reset','jqueryslidemenu','jquery.fancybox-1.3.4','validationEngine.jquery','jquery.confirm/jquery.confirm'));?>
<?php //echo $this->Html->script(array('jquery','jquery.min','jquery-ui-1.8.16.custom.min','accordion','tabs','jquery.uniform','jquery.fancybox-1.3.4.pack','charts/highcharts','jquery.validationEngine','languages/jquery.validationEngine-en','vtip','jquery.confirm'));
echo $this->Html->script(array('jquery','charts/highcharts','jquery-1.7.2.min','jqueryslidemenu','sliding_div','jquery.cookie','styleswitch','jquery.datatables','bootstrapold','jquery.validationEngine','languages/jquery.validationEngine-en','jquery.uniform','jquery.confirm','tabs','jquery.fancybox-1.3.4'));?>
<link rel="alternate stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/skins/blue.css" title="blue" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/skins/red.css" title="red" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/skins/orange.css" title="orange" media="screen"/>
<link rel="alternate stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/skins/black.css" title="black" media="screen"/>
<link rel="alternate stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/skins/grey.css" title="grey" media="screen"/>
<link rel="alternate stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/skins/green.css" title="green" media="screen"/>
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/uniform.default.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/smoothness/jquery-ui-1.8.16.custom.css" />
<?php 
if(isset($_COOKIE['style']))
echo '<link rel="stylesheet" type="text/css" href="'.BASE_URL.'css/skins/'.$_COOKIE['style'].'.css" title="'.$_COOKIE['style'].'" media="screen"/>';
?>
<?php //echo $this->Html->css(array('validationEngine.jquery','style','reset','uniform.default','jquery.confirm/jquery.confirm','jquery.fancybox-1.3.4','jqueryslidemenu')); ?>

<?php //echo $this->html->script(array('jquery','jquery.min','jqueryslidemenu','jquery.cookie','styleswitch','jquery.dataTables','jquery-ui-1.8.16.custom.min','accordion','tabs','jquery.uniform','jquery.confirm','jquery-alertbox','bootstrap','tabs'));
//echo $this->Html->script(array('jquery','charts/highcharts','jquery-1.7.2.min','jqueryslidemenu','jquery.confirm','jquery.datatables','bootstrap','jquery.validationEngine','languages/jquery.validationEngine-en','jquery.uniform','tabs','jquery.fancybox-1.3.4'));  
?>



</head>
<body>

<div class="helpfade"></div>
	<div class="helptips"><div class="loader_block"><div class="loader_block_inner"></div><div class="loader_text">Please wait...</div></div></div>
	<div id="mainContainer"> 	
		<div id="header" class="clearfix">
			<div id="topHeader" >			
				<div id="logo"><a href="<?php echo BASE_URL ?>webpage" target="_blank"><img src="<?php echo BASE_URL; ?>img/site-logo/big/logo.png" height="" width=""  /></a><?php //echo $this->Html->link($this->Html->image('site-logo/big/'.$settings['Setting']['logo'].'',array('border'=>0,'alt'=>'logo')),array('action'=>'index','controller'=>'webpage','admin'=>false),array('escape'=>false,'target'=>'blank')); ?></div>
				<!--<a href="<?php echo BASE_URL; ?>" class="viewSite">View Site</a> -->
				<div id="topLinks">
					<?php echo $this->Html->link('My Account',array('controller'=>'user','action'=>'profile'),array('class'=>'settings')); ?>                    
               		
                    <?php echo $this->Html->link('<span class="unreadMsg"></span>Messages',array('controller'=>'contactus','action'=>'index'),array('class'=>'messages','rel'=>2,'escape'=>false)); ?>
					<?php echo $this->Html->link('Logout',array('action'=>'logout'),array('class'=>'logout','rel'=>2)); ?>
                </div>
				<div id="colorstyle">
					<div>Change Color</div>
					<a rel="green" href="#" id="colorstyle" ></a>
					<a rel="blue" href="#"></a>
					<a rel="red" href="#"></a>
					<a rel="orange" href="#"></a>
					<a rel="black" href="#"></a>
					<a rel="grey" href="#"></a>
				</div>				
				<div id="welcomeUser" > Welcome, <?php //echo $adminuser['User']['first_name']; ?></div>
			</div>			
			<?php  echo  $this->element('sidebar'); ?>
		</div>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
<?php  echo  $this->element('footer'); ?>
</body>
</html>