<div class="ncaies index">
<h2><?php __('Sections of NCAIE');?></h2>
<?php echo $this->element('members_lists'); ?><br />
<?php echo $this->element('members_buttons'); ?>

<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('section_id');?></th>
	<th><?php echo $paginator->sort('Member', 'profile_id');?></th>
</tr>
<?php
$lastTFM_nest = null;
$i = 0;
foreach ($ncaies as $ncaie):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
		
	<?php 
			$TFM_nest = $ncaie['Section']['title'];
if ($lastTFM_nest != $TFM_nest) { 
    $lastTFM_nest = $TFM_nest;?>
			
			<?php echo $html->link($ncaie['Section']['title'], array('controller'=> 'ncaies', 'action'=>'search', $ncaie['Section']['id'])); ?>
					
			<?php } //End of Basic-UltraDev Simulated Nested Repeat?>
			
			</td>
		<td>
			<?php echo $html->link($ncaie['Profile']['name'], array('controller'=> 'profiles', 'action'=>'view', $ncaie['Profile']['id'])); ?>
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
		<li><?php echo $html->link(__('Compose Mail', true), array('action'=>'post')); ?></li>
	</ul>
</div>
