<div class="areasUsers view">
<h2><?php  __('AreasUser');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $areasUser['AreasUser']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($areasUser['Area']['title'], array('controller'=> 'areas', 'action'=>'view', $areasUser['Area']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($areasUser['User']['title'], array('controller'=> 'users', 'action'=>'view', $areasUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AreasUser', true), array('action'=>'edit', $areasUser['AreasUser']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AreasUser', true), array('action'=>'delete', $areasUser['AreasUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $areasUser['AreasUser']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AreasUsers', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AreasUser', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Areas', true), array('controller'=> 'areas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Area', true), array('controller'=> 'areas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
