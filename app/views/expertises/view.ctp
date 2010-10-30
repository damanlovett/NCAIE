<div class="expertises view">
<h2><?php  __('Expertise');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Area'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($expertise['Area']['title'], array('controller'=> 'areas', 'action'=>'view', $expertise['Area']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($expertise['User']['name'], array('controller'=> 'users', 'action'=>'view', $expertise['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
    
    <?php if (!empty($expertise['User'])):?>
    <table cellpadding = "0" cellspacing = "0">
    <tr align="left">
        <th><?php __('Users');?></th>
    <?php
        $i = 0;
        foreach ($expertise['User'] as $user):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
        ?>
        <tr<?php echo $class;?>>
            <td><?php echo $user['first_name'];?></td>
        </tr>
    <?php endforeach; ?>
    </table>
<?php endif; ?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Expertise', true), array('action'=>'edit', $expertise['Expertise']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Expertise', true), array('action'=>'delete', $expertise['Expertise']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $expertise['Expertise']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Expertises', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Expertise', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Areas', true), array('controller'=> 'areas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Area', true), array('controller'=> 'areas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
