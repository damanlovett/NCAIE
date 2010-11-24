<div class="users view">
<h2><?php  __($user['User']['name']);?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['last_name']; ?>
			&nbsp;
		</dd>
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('E-mail'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $switches->onOff($user['User']['active']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $switches->onOff($user['User']['role'],"Admin","Member"); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo  $time->format('m/d/Y h:i:s a', $user['User']['created']);?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $time->format('m/d/Y h:i:s a', $user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
	<div class="related">
		<h3><?php  __('Member Information');?></h3>
	<?php if (!empty($user['Profile'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Institution');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['institution'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['title'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['phone'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Service');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Profile']['service'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Account', true), array('action'=>'edit', $user['User']['id'])); ?> </li>
				<li><?php echo $html->link('Full Profile', '/profiles/view/'.$user['Profile']['id']);?>
				
				
				</li>
			</ul>
		</div>
	</div>
	
