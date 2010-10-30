<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?= $title_for_layout;?></title>
 		  <?php
        echo $html->css('ext-all');
        echo $javascript->link('ext-base');
        echo $javascript->link('ext-all');
        //echo $html->meta('icon');
        echo $scripts_for_layout;
    ?>       
	<?php echo $html->css('ncaie');?>
		
		<?php echo $html->css('cake.ncaie');?>
		
		<?php echo $html->css('sprite');?>

		<?php echo $html->css('forms');?>

        <?php echo $scripts_for_layout ?>

	</head>
    <body class="oneColElsCtrHdr">
        <div id="container">
            <div id="header">
            <?php echo $html->image('ncaie/header.jpg', array('alt'=>'banner'));?>
            </div>
            <div id="navbar">
                		
			</div>
            <div id="mainContent">
  <?php
    $session->flash();
    $session->flash('auth');
?>

                <?php echo $content_for_layout ?>
            </div>
<div id="footer"><p>Lovett Creations &copy <?php echo date('Y');?>.  All rights reserved.</p></div>
            <!-- end #container -->
        </div>

   </body>
    <!-- InstanceEnd -->
</html>
