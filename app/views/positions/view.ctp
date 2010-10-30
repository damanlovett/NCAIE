<div class="positions view">
<h2><?php  __('Position');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['position']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Visible'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $switches->onOff($position['Position']['visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="bottomactions">
	<ul>
		<li><?php echo $html->link(__('Edit Position', true), array('action'=>'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Position', true), array('action'=>'delete', $position['Position']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $position['Position']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Position', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
