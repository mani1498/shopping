
   
<div id="footer" class="clearfix">
    <div class="copyright">Copyright &copy; <?php echo date("Y"); ?> by <a href="http://www.aparajayah.com/">Aparajayah Technologies Pvt Ltd</a>. All rights reserved.</div>
    <div class="designInfo">Powered by <a href="http://www.aparajayah.com/" target="_blank">Aparajayah Technologies Pvt Ltd</a></div>
</div>
<?php $msg=$this->Session->flash(); if(!empty($msg)) echo '<script type="text/javascript">message("'.$msg.'");</script>'; ?>