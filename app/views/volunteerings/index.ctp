<div class="volunteerings index">
<h2><?php __('List of Volunteering');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<br />
<table class="data" cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('position');?></th>
	<th><?php echo $paginator->sort('visible');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($volunteerings as $volunteering):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $volunteering['Volunteering']['name']; ?>
		</td>
		<td>
			<?php echo $volunteering['Volunteering']['position']; ?>
		</td>
		<td>
			<?php echo $switches->onOff($volunteering['Volunteering']['visible']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $volunteering['Volunteering']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $volunteering['Volunteering']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $volunteering['Volunteering']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $volunteering['Volunteering']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="bottomactions">
	<ul>
		<li><?php echo $html->link(__('New Volunteering', true), array('action'=>'add'), array('class'=>'long')); ?></li>
	</ul>
</div>
