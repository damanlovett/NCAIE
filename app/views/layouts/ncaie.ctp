<!DOCTYPE HTML>
    <head>
        <meta charset="UTF-8">
        <title><?= $title_for_layout;?></title>
		
	<?php echo $html->meta('icon');?>        
	<?php echo $javascript->link('ext-base');?>        
	<?php echo $javascript->link('ext-all');?>        
	<?php echo $javascript->link('jquery-1.3.2');?>        
	<?php echo $scripts_for_layout;?>         
	<?php echo $html->css('ext-all');?>    
	<?php echo $html->css('ncaie');?>		
	<?php echo $html->css('cake.ncaie');?>		
	<?php echo $html->css('sprite');?>
	<?php echo $html->css('forms');?>

	</head>
    <body class="oneColElsCtrHdr">
        <div id="container">
		
            <div id="header">
            <?php echo $html->image('ncaie/header.jpg', array('alt'=>'banner'));?>
            </div>
			
            <div id="navbar">               		
            <?php echo $this->element('member');?>			
			</div>
			
            <div id="mainContent">
			
				<div id="userLogin">
				<?php echo "<h2><strong>".$session->read('Auth.User.first_name')."</strong>, welcome to the members only area.</h2>";?>
				</div>
  
				 <?php
					$session->flash();
					$session->flash('auth');
				?>

                <?php echo $content_for_layout ?>
				
            </div>
			
			<div id="footer">
			<p>Lovett Creations &copy <?php echo date('Y');?>.  All rights reserved.</p>
			</div>
            
        </div><!-- end #container -->

   </body>
</html>
