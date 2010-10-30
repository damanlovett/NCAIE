<p>
<?= $profile['Profile']['first_name'];?>,<br />
<br />
Your account has been updated, and now you are able to log into the system at 
<?= $html->link('Seaho Placement', 'http://placement.seaho.org'); ?> .  If you did not request a
password change please contact the SEAHO Placement Coordinator as soon as possible..<br />
<br />
<hr />
<br />
Account information:<br />
<strong>Username/E-mail:</strong> <?php echo $profile['Profile']['username'];?><br />
<strong>Password:</strong> <?php echo $user['password'];?><br />
<hr />
<br />
Thanks,
The Seaho Placement Team

</p>
