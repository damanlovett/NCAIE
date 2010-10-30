<div class="ncaies index">
<h2><?php __('Sections of NCAIE List');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('section_id');?></th>
	<th><?php echo $paginator->sort('Member', 'user_id');?></th>
</tr>
<?php
$i = 0;
foreach ($ncaies as $ncaie):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $html->link($ncaie['Section']['title'], array('controller'=> 'sections', 'action'=>'view', $ncaie['Section']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($ncaie['Profile']['name'], array('controller'=> 'users', 'action'=>'view', $ncaie['User']['id'])); ?>
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
		<li><?php echo $html->link(__('Back', true), array('controller'=> 'ncaies', 'action'=>'index')); ?> </li>
	</ul>
</div>
