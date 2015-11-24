 <!--CLient section-->

     <div class="ourclient">
     <div class="ourblog">
     
           <!--<h1>Our Reference</h1>-->
      
      
     <div class="clientlogo" id="slides">
     
     <ul class="most_content">
     <?php if(!empty($footers)) { foreach($footers as $footer) {?>
     <li><a href="<?php echo $footer['Refrence']['link'] ?>" target="_blank"><img src="<?php echo BASE_URL; ?>img/refrence/small/<?php echo $footer['Refrence']['logo'] ?>" height="70" width="130" alt="" title="Adminsoft"  /></a></li>
     <?php }}?>
   
     </ul>
     
     
     </div> 
    
     </div>
     </div>
<div class="footer">
<div class="footer_inner">
  <div class="footer_menu">
  <div class="getintouch">
  <h2><?php echo __('Get In Touch'); ?></h2>
  <ul>
   <li><span><img src="<?php echo BASE_URL ?>img/Layer-42.png" height="" width="" alt="" title="Adminsoft" /></span><span><?php echo $settings['Setting']['phone']; ?></span></li>
   <li><span><img src="<?php echo BASE_URL ?>img/Layer-42.png" height="" width="" alt="" title="Adminsoft" /></span><span><?php echo $settings['Setting']['aphone']; ?></span></li>
   <li><span><img src="<?php echo BASE_URL ?>img/Layer-41.png" height="" width="" alt="" title="Adminsoft" /></span><a href="mailto:<?php echo $settings['Setting']['email']; ?>"><?php echo $settings['Setting']['email']; ?></a></li>
  </ul>
  </div>
  <div class="quicklinks"><h2><?php echo __('Quick Links'); ?></h2> <ul>
   <li><a href="<?php echo BASE_URL ?><?php echo $blogtitle['Staticpage']['link'] ?>"><?php echo $blogtitle['Staticpage']['title'] ?> </a> / <a href="<?php echo BASE_URL ?><?php echo $forumtitle['Staticpage']['link'] ?>"><?php echo $forumtitle['Staticpage']['title'] ?> </a></li>
   <li><a href="<?php echo BASE_URL ?><?php echo $qandatitle['Staticpage']['link'] ?>"><?php echo $qandatitle['Staticpage']['title'] ?></a> / <a href="<?php echo BASE_URL ?><?php echo $sertitle['Staticpage']['link'] ?>"><?php echo $sertitle['Staticpage']['title'] ?></a></li>
   <li><a href="<?php echo BASE_URL ?><?php echo $reftitle['Staticpage']['link'] ?>"><?php echo $reftitle['Staticpage']['title'] ?></a> / <a href="<?php echo BASE_URL ?><?php echo $solutitle['Staticpage']['link'] ?>"><?php echo $solutitle['Staticpage']['title'] ?></a></li>
   <li><a href="<?php echo BASE_URL ?><?php echo $commtitle['Staticpage']['link'] ?>"><?php echo $commtitle['Staticpage']['title'] ?></a></li>
  </ul></div>
  <div class="followus"><h2><?php echo __('Follow Us'); ?> !</h2> <ul>
   <li><a href="<?php echo $settings['Setting']['facebook']; ?>" target="_blank"><img src="<?php echo BASE_URL ?>img/Layer-36.png" height="48" width="48" alt="" title="Facebook" /></a></li>
   <li><a href="<?php echo $settings['Setting']['twitter']; ?>" target="_blank"><img src="<?php echo BASE_URL ?>img/Layer-37.png" height="48" width="48" alt="" title="Twitter" /></a></li>
   <li><a href="<?php echo $settings['Setting']['google']; ?>" target="_blank"><img src="<?php echo BASE_URL ?>img/Layer-38.png" height="48" width="48" alt="" title="Google" /></a></li>
   <li><a href="<?php echo $settings['Setting']['linkedin']; ?>" target="_blank"><img src="<?php echo BASE_URL ?>img/Layer-39.png" height="48" width="48" alt="" title="Linkedin" /></a></li>
  </ul>
 
  <div class="savemakelist alert">
    <div class="input-append"> <form action="" method="post">
    <input id="nl-title"  minlength="2" type="text" name="data[Newslettermail][email]" class="new_list_name" placeholder="<?php echo __('Subscribe a News Letter') ?>" required />
    <button id="nl" type="submit" class="btn save_item_list" data-loading-text="Making..."><?php echo __('Subscribe'); ?></button>
    <div class="MakeListStatus"></div>
    </div>
  </div>
  </form>
  </div>
  </div>

  <div class="footer_content"> <?php echo $settings['Setting']['copyright']; ?>  </div>
  </div>
</div> 
<?php $msg=$this->Session->flash(); if(!empty($msg)) echo '<script type="text/javascript">message("'.$msg.'");</script>'; ?>