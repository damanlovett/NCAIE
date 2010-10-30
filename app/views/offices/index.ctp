<div class="offices index">
<h2><?php __('List of Offices');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<br />
<?php echo $session->flash();?>

<table class="data" cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('position');?></th>
	<th><?php echo $paginator->sort('visible');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($offices as $office):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $office['Office']['name']; ?>
		</td>
		<td>
			<?php echo $office['Office']['position']; ?>
		</td>
		<td>
			<?php echo $switches->onOff($office['Office']['visible']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $office['Office']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $office['Office']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $office['Office']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $office['Office']['name'])); ?>
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
		<li><?php echo $html->link(__('New Office', true), array('action'=>'add')); ?></li>
	</ul>
</div>
