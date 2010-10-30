Hi <?= $user['first_name'];?>,

Welcome to Seaho Placement. Your account has been created, and now you are able to log into the system at 
<?= $html->link('Seaho Placement', 'http://placement.seaho.org'); ?> .  Need help getting started? When you log into the system make sure you check out the get started section.<br />

To get the most out of Seaho Placement, you will to:

Keep your Employer information and positions current
Check your messages, often
Utilize the notes section so all interviewers will be on the same page
Contact candidates and pre-schedule interviews

Account information:

Username/E-mail: <?php echo $user['username'];?>

Password: <?php echo $user['password'];?>


Thanks,
The Seaho Placement Team

