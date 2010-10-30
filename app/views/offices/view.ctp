<div class="offices view">
<h2><?php  __('Office');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $office['Office']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $office['Office']['position']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Visible'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $switches->onOff($office['Office']['visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Office', true), array('action'=>'edit', $office['Office']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Office', true), array('action'=>'delete', $office['Office']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $office['Office']['name'])); ?> </li>
		<li><?php echo $html->link(__('List Offices', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Office', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
