<div class="profiles index">
<h2><?php __('NCAIE Members');?></h2>
<div class="pageButtons">
<br />
<table>	
   <tr><td class="actions"><?php echo $html->link(__('Expertise',true),array('controller'=>'expertises', 'action'=>'post'), array('escape' => false));?> &nbsp; Send a message to a specific area of Expertise</td> </tr>
  <!-- <li> &nbsp; </li> -->
   <td class="actions"><?php echo $html->link(__('NCAIE',true),array('controller'=>'ncaies', 'action'=>'post'), array('class'=>'add', 'escape' => false));?> &nbsp; Send a message to a specific NCAIE Group</td></tr>
</table>
<br />
<br />
</div>
<p>
<?php
// echo $paginator->counter(array(
//'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
//));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Member', 'user_id');?></th>
	<th><?php echo $paginator->sort('institution');?></th>
    <th><?php echo $paginator->sort('title');?></th>
    <th><?php echo $paginator->sort('position');?></th>
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
		<td>
			<span class="ss_sprite ss_user"><?php echo $html->link($profile['User']['name'], array('controller'=> 'profiles', 'action'=>'view', $profile['Profile']['id'])); ?></span>
		</td>
		<td> 
			<?php echo $profile['Profile']['institution']; ?>&nbsp;
		</td>
		<td>
			<?php echo $profile['Profile']['title']; ?>
		</td>
		<td>
			<?php echo $profile['Position']['name']; ?>&nbsp;
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
