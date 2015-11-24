<div class="header">
  <div class="headecontent">
    <div class="headerleft"><?php echo $this->Html->link($this->Html->image('site-logo/big/'.$settings['Setting']['logo'].'',array('border'=>0,'alt'=>'logo','width'=>200,'height'=>48)),array('action'=>'index'),array('escape'=>false)); ?></div>
    <div class="headerright">
    <div class="signup"><a type="button" href="<?php echo BASE_URL ?>chats" target="_blank"> <img src="<?php echo BASE_URL ?>img/live-chat-copy.png" height="30" width="160" alt="" title="Adminsoft"  /></a></div>
    
      <div class="login"><a href="<?php echo BASE_URL ?>webpage/change/en" <?php echo $this->Session->read('Config.language')=='en' ? 'class="active"' : '' ?>><?php echo __('EN') ?></a></div>
      <div class="login"><a href="<?php echo BASE_URL ?>webpage/change/tr" <?php echo $this->Session->read('Config.language')=='tr' ? 'class="active"' : '' ?>><?php echo __('TR') ?></a></div>
    </div>
  </div>

 <!--Menu section-->
<?php echo $this->element('menu'); ?>
  </div>