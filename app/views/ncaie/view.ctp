<div class="ncaie view">
<h2><?php  __('Ncaie');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ncaie['Ncaie']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($ncaie['Area']['title'], array('controller'=> 'areas', 'action'=>'view', $ncaie['Area']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($ncaie['User']['title'], array('controller'=> 'users', 'action'=>'view', $ncaie['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Ncaie', true), array('action'=>'edit', $ncaie['Ncaie']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Ncaie', true), array('action'=>'delete', $ncaie['Ncaie']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ncaie['Ncaie']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Ncaie', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ncaie', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Areas', true), array('controller'=> 'areas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Area', true), array('controller'=> 'areas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
