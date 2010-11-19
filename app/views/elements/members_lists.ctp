<?php if ($this->params['controller'] == 'expertises'):?>

<div>
[&nbsp;<?php echo $html->link(__('List by Sections of NCAIE',true), array('controller'=>'ncaies'))?>&nbsp;]</li>
</div>

<?php elseif ($this->params['controller'] == 'ncaies'):?>

<div>
[&nbsp;<?php echo $html->link(__('List by Area of Experience',true), array('controller'=>'expertises'))?>&nbsp;]</li>
</div>

<?php else:?>

<div id="membersList">
	<ul>
		<li>[&nbsp;<?php echo $html->link(__('List by Area of Experience',true), array('controller'=>'expertises'))?>&nbsp;]</li>
		<li>[&nbsp;<?php echo $html->link(__('List by Sections of NCAIE',true), array('controller'=>'ncaies'))?>&nbsp;]</li>
	</ul>
</div>
 
<?php endif; ?>