<div class="profiles form">
<?php echo $form->create('Profile');?>
	<fieldset>
 		<legend><?php __('Add Profile');?></legend>
	<?php
		echo $form->input('user_id');
		echo $form->input('institution');
		echo $form->input('title');
		echo $form->input('phone');
		echo $form->input('service');
		echo $form->input('position_id');
		echo $form->input('size_of_office');
		echo $form->input('office_id');
		echo $form->input('volunteering_id');
		echo $form->input('section_ids');
		echo $form->input('permission');
		echo $form->input('Area');
		echo $form->input('Section');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Profiles', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller'=> 'users', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Positions', true), array('controller'=> 'positions', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Position', true), array('controller'=> 'positions', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Offices', true), array('controller'=> 'offices', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Office', true), array('controller'=> 'offices', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Volunteerings', true), array('controller'=> 'volunteerings', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Volunteering', true), array('controller'=> 'volunteerings', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Areas', true), array('controller'=> 'areas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Area', true), array('controller'=> 'areas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Sections', true), array('controller'=> 'sections', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Section', true), array('controller'=> 'sections', 'action'=>'add')); ?> </li>
	</ul>
</div>
