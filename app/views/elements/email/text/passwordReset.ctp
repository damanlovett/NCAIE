
<?= $user['first_name'];?>,
	
Your account has been updated by the NCAIE.org administrator, and now you are able to log into the system at 
<?= $html->link('NCAIE Members', 'http://members.ncaie.org'); ?> .  If you have any questions, please contact the NCAIE as soon as possible..


Account information:

Username/E-mail: <?php echo $user['username'];?>

Password: <?php echo $user['password'];?>


Thanks,
The NCAIE.org Team

