<div class="ncaies form">
<?php echo $form->create('Ncaie');?>
	<fieldset>
 		<legend><?php __('Add Ncaie');?></legend>
	<?php
		echo $form->input('section_id');
		echo $form->input('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Ncaies', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Sections', true), array('controller'=> 'sections', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Section', true), array('controller'=> 'sections', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
	</ul>
</div>
