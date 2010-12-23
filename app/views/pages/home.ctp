<div id="loginBox">
	<div id="header"></div>
		
		<div id="loginForm">
			<?php

			$session->flash();
			$session->flash('auth');
			?>
		<div id="loginInfo">
			<p>Welcome to the members section of the NCAIE.
				<ul><?php echo $html->link('create an account','/users/add')?></li>
					
					<!-- Replace when reset password is implemented 
						
					<li><?php echo $html->link('reset password','#')?></li>
					
				   	-->
					
					
				</ul>			
			</p>
		</div>		
			<?php echo $form->create('User', array('action' => 'login')); ?>
			
			<?php echo $form->input('username', array('label'=>'E-mail:', 'class'=>'tinyBox')); ?>
			
			<?php echo $form->input('password', array('label'=>'Password:', 'class'=>'tinyBox')); ?>
			
			<?php echo $form->end('Login'); ?>
			

		</div>
	<div id="footer"><p>Copyright &copy; <?php echo date('Y');?> LCCM designed &AMP; by <?php echo $html->link('Lovett Creations', 'http://lovettcreations.org');?><p> </div>
</div>