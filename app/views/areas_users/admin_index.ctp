<div class="areasUsers index">
<h2><?php __('AreasUsers');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('area_id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($areasUsers as $areasUser):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $areasUser['AreasUser']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($areasUser['Area']['title'], array('controller'=> 'areas', 'action'=>'view', $areasUser['Area']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($areasUser['User']['title'], array('controller'=> 'users', 'action'=>'view', $areasUser['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $areasUser['AreasUser']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $areasUser['AreasUser']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $areasUser['AreasUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $areasUser['AreasUser']['id'])); ?>
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
		<li><?php echo $html->link(__('New AreasUser', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Areas', true), array('controller'=> 'areas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Area', true), array('controller'=> 'areas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
