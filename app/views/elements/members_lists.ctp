<?php if ($this->params['controller'] == 'expertises'):?>

<div>
[&nbsp;<?php echo $html->link(__('All Members',true), array('controller'=>'profiles'))?>&nbsp;]</li>
[&nbsp;<?php echo $html->link(__('Members by NCAIE',true), array('controller'=>'ncaies'))?>&nbsp;]</li>
</div>

<?php elseif ($this->params['controller'] == 'ncaies'):?>

<div>
[&nbsp;<?php echo $html->link(__('All Members',true), array('controller'=>'profiles'))?>&nbsp;]</li>
[&nbsp;<?php echo $html->link(__('Members by Experience',true), array('controller'=>'expertises'))?>&nbsp;]</li>
</div>

<?php else:?>

<div id="membersList">
	<ul>
		<li>[&nbsp;<?php echo $html->link(__('Members by NCAIE',true), array('controller'=>'ncaies'))?>&nbsp;]</li>
		<li>[&nbsp;<?php echo $html->link(__('Members by Experience',true), array('controller'=>'expertises'))?>&nbsp;]</li>
		<li>[&nbsp;<?php echo $html->link(__('All Members',true), array('controller'=>'profiles'))?>&nbsp;]</li>
	</ul>
</div>
 
<?php endif; ?>