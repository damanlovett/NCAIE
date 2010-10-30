<div class="expertises view">
<h2><?php  __('Expertise');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $expertise['Expertise']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($expertise['Area']['title'], array('controller'=> 'areas', 'action'=>'view', $expertise['Area']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit', true), array('action'=>'edit', $expertise['Expertise']['id'])); ?> </li>
		<li><?php echo $html->link(__('New', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $expertise['Expertise']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $expertise['Area']['title'])); ?> </li>
	</ul>
</div>
