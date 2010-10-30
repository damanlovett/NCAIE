<div class="expertises index">
<h2><?php __('Expertises');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('Expertise', 'area_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>

<?php
$lastTFM_nest = null;
$i = 0;
foreach ($expertises as $expertise):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	
				<?php 
			$TFM_nest = $expertise['Area']['title'];
if ($lastTFM_nest != $TFM_nest) { 
    $lastTFM_nest = $TFM_nest;?>
	
	<tr<?php echo $class;?>>
		<td>
			<?php echo $expertise['Expertise']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($expertise['Area']['title'], array('controller'=> 'areas', 'action'=>'view', $expertise['Area']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $expertise['Expertise']['id']), array('class'=>'button blue')); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $expertise['Expertise']['id']), array('class'=>'button blue'), sprintf(__('Are you sure you want to delete # %s?', true), $expertise['Expertise']['id'])); ?>
		</td>
	</tr>
	
				<?php } //End of Basic-UltraDev Simulated Nested Repeat?>

	
	
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
