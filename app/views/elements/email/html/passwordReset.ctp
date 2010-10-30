<p>
<?= $user['User']['first_name'];?>,<br />
<br />
Your account has been updated by the NCAIE.org administrator, and now you are able to log into the system at 
<?= $html->link('NCAIE Members', 'http://members.ncaie.org'); ?> .  If you have any questions, please contact the NCAIE as soon as possible..<br />
<br />
<hr />
<br />
Account information:<br />
<strong>Username/E-mail:</strong> <?php echo $user['User']['username'];?><br />
<strong>Password:</strong> <?php echo $user['User']['password'];?><br />
<hr />
<br />
Thanks,
The NCAIE.org Team

</p>
