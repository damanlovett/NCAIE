<div class="users index">
<h2><?php __('Members by Institution');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<br />
<table class="data" cellpadding="0" cellspacing="0">
<tr>
	<th>&nbsp</th>
    <th><?php echo $paginator->sort('institution');?></th>
    <th><?php echo $paginator->sort('name');?></th>
    <th><?php echo $paginator->sort('title');?></th>
    <th><?php echo $paginator->sort('E-mail/username', 'username');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$lastTFM_nest = "";
$i = 0;
foreach ($users as $user):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
        <td><?php echo $i;?></td>
		<td>
        	<?php 
			$TFM_nest = $user['User']['institution'];
if ($lastTFM_nest != $TFM_nest) { 
    $lastTFM_nest = $TFM_nest; ?>
            <?php echo $user['User']['institution']; ?>
		<?php }?>	
        </td>       
        <td>
            <?php echo $user['User']['name']; ?>
        </td>
		<td>
            <?php echo $user['User']['title']; ?>
        </td>       
        <td>
            <?php echo $user['User']['username']; ?>
        </td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $user['User']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $user['User']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $user['User']['first_name'])); ?>
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
		<li><?php echo $html->link(__('New User', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Areas', true), array('controller'=> 'areas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Area', true), array('controller'=> 'areas', 'action'=>'add')); ?> </li>
	</ul>
</div>
