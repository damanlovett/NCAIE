<div class="volunteerings view">
<h2><?php  __('Volunteering');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $volunteering['Volunteering']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $volunteering['Volunteering']['position']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Visible'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $switches->onOff($volunteering['Volunteering']['visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Volunteering', true), array('action'=>'edit', $volunteering['Volunteering']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Volunteering', true), array('action'=>'delete', $volunteering['Volunteering']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $volunteering['Volunteering']['name'])); ?> </li>
		<li><?php echo $html->link(__('List Volunteerings', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Volunteering', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
