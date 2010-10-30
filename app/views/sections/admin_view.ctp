<div class="sections view">
<h2><?php  __('Section of NCAIE');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['Section']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Visible'); ?></dt>
        <dd<?php if ($i++ % 2 == 0) echo $class;?>>
            <?php echo $switches->onOff($section['Section']['visible']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="bottomactions">
	<ul>
		<li><?php echo $html->link(__('Edit Section', true), array('action'=>'edit', $section['Section']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Section', true), array('action'=>'delete', $section['Section']['id']), null, sprintf(__('Are you sure you want to delete %s?', true), $section['Section']['title'])); ?> </li>
		<li><?php echo $html->link(__('List Sections', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Section', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
