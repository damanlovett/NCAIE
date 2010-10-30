<div class="announcements index">
<h2><?php __('Announcements');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('message');?></th>
	<th><?php echo $paginator->sort('admin', 'user_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($announcements as $announcement):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $announcement['Announcement']['title']; ?>
		</td>
		<td>
			<?php echo $announcement['Announcement']['message']; ?>
		</td>
		<td class="nowrap">
			<?php echo $html->link($announcement['User']['name'], array('controller'=> 'users', 'action'=>'view', $announcement['User']['id'])); ?>
		</td>
		<td>
			<?php echo $announcement['Announcement']['created']; ?>
		</td>
		<td>
			<?php echo $announcement['Announcement']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $announcement['Announcement']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $announcement['Announcement']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $announcement['Announcement']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $announcement['Announcement']['id'])); ?>
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
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New', true), array('action'=>'add')); ?></li>
	</ul>
</div>
