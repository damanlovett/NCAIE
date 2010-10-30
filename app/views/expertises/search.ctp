<div class="expertises index">
<h2><?php __('Areas of Expertise List');?></h2>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('area_id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
</tr>
<?php
$i = 0;
foreach ($expertises as $expertise):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link($expertise['Area']['title'], array('controller'=> 'areas', 'action'=>'view', $expertise['Area']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($expertise['Profile']['name'], array('controller'=> 'profiles', 'action'=>'view', $expertise['Profile']['user_id'])); ?>
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
<li><?= $html->link('Back', array('controller'=>'expertises', 'action'=>'index'));?>
</li>
    </ul>
</div>
