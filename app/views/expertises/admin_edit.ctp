<div class="expertises form">
<?php echo $form->create('Expertise');?>
	<fieldset>
 		<legend><?php __('Edit Expertise');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('area_id');
		echo $form->input('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Expertise.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Expertise.id'))); ?></li>
		<li><?php echo $html->link(__('List Expertises', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Areas', true), array('controller'=> 'areas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Area', true), array('controller'=> 'areas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
