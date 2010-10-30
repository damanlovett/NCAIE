<div class="areas form">
<?php echo $form->create('Area');?>
	<fieldset>
 		<legend><?php __('Edit Area');?></legend>
	<?php
		echo $form->input('title');
		echo $form->input('visible', array(
		                              'type'=>'radio',
									  'options'=>array(
									  '1'=>'Yes',
									  '0'=>'No')
		                                  ));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="bottomactions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Area.id')), null, sprintf(__('Are you sure you want to delete %s?', true), $form->value('Area.title'))); ?></li>
		<li><?php echo $html->link(__('List Areas', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
