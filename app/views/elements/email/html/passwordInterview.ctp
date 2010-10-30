<p>
Hi <?= $user['first_name'];?>,<br />
<br />
Welcome to Seaho Placement. Your account has been created, and now you are able to log into the system at 
<?= $html->link('Seaho Placement', 'http://placement.seaho.org'); ?> .  Need help getting started? When you log into the system make sure you check out the get started section.<br />
<br />
To get the most out of Seaho Placement, you will to:
<ul>
	<li>Keep your Employer information and positions current</li>
	<li>Check your messages, often</li>
	<li>Utilize the notes section so all interviewers will be on the same page</li>
	<li>Contact candidates and pre-schedule interviews</li>
</ul>. 
<hr />
<br />
Account information:
<strong>Username/E-mail:</strong> <?php echo $user['username'];?>
<strong>Password:</strong> <?php echo $user['password'];?><br />
<hr />
<br />
Thanks,
The Seaho Placement Team

</p>
