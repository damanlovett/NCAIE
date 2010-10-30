<div class="ncaies view">
<h2><?php  __('Ncaie');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ncaie['Ncaie']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Section'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($ncaie['Section']['title'], array('controller'=> 'sections', 'action'=>'view', $ncaie['Section']['id'])); ?>
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
		<li><?php echo $html->link(__('List Ncaies', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Ncaie', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Sections', true), array('controller'=> 'sections', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Section', true), array('controller'=> 'sections', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
