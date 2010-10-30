<div class="profiles index">
<h2><?php __('Profiles');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Member', 'user_id');?></th>
	<th><?php echo $paginator->sort('institution');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($profiles as $profile):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td class="nowrap">
			<?php echo $html->link($profile['User']['name'], array('controller'=> 'users', 'action'=>'view', $profile['User']['id'])); ?>
		</td>
		<td>
			<?php echo $profile['Profile']['institution']; ?>
		</td>
		<td>
			<?php echo $profile['Profile']['title']; ?>
		</td>
		<td>
			<?php echo $time->format('m/d/Y', $profile['Profile']['created']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $profile['Profile']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $profile['Profile']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $profile['Profile']['id']), null, sprintf(__('Are you sure you want to delete this record?', true), $profile['Profile']['id'])); ?>
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