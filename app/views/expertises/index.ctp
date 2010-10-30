<div class="expertises index">
<h2><?php __('Areas of Expertise');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Area of Expertise', 'area_id');?></th>
	<th><?php echo $paginator->sort('Member', 'profile_id');?></th>
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
	<tr<?php echo $class;?>>
		<td>
			<?php 
			$TFM_nest = $expertise['Area']['title'];
if ($lastTFM_nest != $TFM_nest) { 
    $lastTFM_nest = $TFM_nest;?>
			
			<?php echo $html->link($expertise['Area']['title'], array('action'=>'search', $expertise['Area']['id']));?> 
			
			<?php } //End of Basic-UltraDev Simulated Nested Repeat?>
			
			</td>
		<td>
			<?php echo $html->link($expertise['Profile']['name'], array('controller'=> 'profiles', 'action'=>'view', $expertise['Profile']['id'])); ?>
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
<li><?php echo $html->link(__('Compose Mail', true), array('action'=>'post')); ?>
</li>
</ul></div>