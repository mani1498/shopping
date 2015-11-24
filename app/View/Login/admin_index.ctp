<?php echo $this->Form->create('Adminuser',array('id'=>'myForm','type' => 'file')); ?>
    <div id="loginBox" class="loginBox clearfix" <?php echo $result!='forgot' ? ' style="display:block;"' :  ' style="display:none;"';?>>
        <div id="login">
            <dl class="inline-login">
                <?php
                echo $this->Form->input('email',array('div'=>false,'error'=>false,'label' => 'email', 'before' => '<dt>', 'after' => '</dd>', 'between' => '</dt><dd>', 'class'=>'validate[required]'));
                echo $this->Form->input('password',array('div'=>false,'error'=>false,'label' => 'password', 'before' => '<dt>', 'after' => '</dd>', 'between' => '</dt><dd>', 'class'=>'validate[required]'));
                ?>
                <?php echo $this->Form->submit(__('Login'),array('div'=>false, 'before' => '<dt class="logbtn">', 'after' => '</dt>'));	?>
            </dl>
        </div>
        <div class="forgottabs loginlink"><font>Can't access your account?</font></div>
    </div> 
    <div id="loginBox" class="forgotBox clearfix" <?php echo $result=='forgot' ? ' style="display:block;"' :  ' style="display:none;"';?>>
        <div id="login">
            <p>Forgot your username or password? No worries, enter your email address below and we will hook you up.</p>
            <dl class="inline-login">
                <?php
                echo $this->Form->input('email',array('div'=>false,'error'=>false,'label' => 'Email Address', 'before' => '<dt>', 'after' => '</dd>', 'between' => '</dt><dd>', 'class'=>'validate[required,custom[email]]'));
                ?>
                <?php echo $this->Form->submit(__('Get New Password'),array('div'=>false, 'before' => '<dt class="logbtn">', 'after' => '</dt>'));	?>
            </dl>
        </div>
        <div class="logintabs loginlink"><font>Back to login page</font></div>
    </div>
<?php echo $this->Form->end(); ?>

<script>
$(".logintabs").click(function () {
		$('.emailformError').remove();
		$('#email').val('');
		$('.forgotBox').slideUp('normal', function() {
			$('.loginBox').slideDown(function() {
			});
		});
	});
	
	$(".forgottabs").click(function () {
		$('.usernameformError').remove();
		$('.passwordformError').remove();
		$('#username').val('');
		$('#password').val('');
		$('.loginBox').slideUp('normal', function() { 
			$('.forgotBox').slideDown(function() {
			});
		});
	});
	

</script>