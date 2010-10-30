<?= $profile['Profile']['first_name'];?>,<br />
Your account has been updated, and now you are able to log into the system at 
<?= $html->link('Seaho Placement', 'http://placement.seaho.org'); ?> .  If you did not request a
password change please contact the SEAHO Placement Coordinator as soon as possible..

Account information:

Username/E-mail: <?php echo $profile['Profile']['username'];?>
Password: <?php echo $user['password'];?>


Thanks,
The Seaho Placement Team
