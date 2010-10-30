<div class="profiles form">
<h2><?php echo "Edit: ".$this->data['Profile']['name'];?></h2>
<?php echo $form->create('Profile');?>
	<fieldset>
 		<legend><?php __('Edit Profile');?></legend>
	<?php
		echo $form->input('id');
		echo $form->hidden('user_id');
		echo $form->input('institution');
		echo $form->input('title');
		echo $form->input('phone');
		echo $form->input('service', array('options'=>array(
													'1'=>'1',
													'2'=>'2',
													'3'=>'3',
													'4'=>'4',
													'5'=>'5',
													'6'=>'6',
													'7'=>'7',
													'8'=>'8',
													'9'=>'9',
													'10'=>'10',
													'11'=>'11',
													'12'=>'12',
													'13'=>'13',
													'14'=>'14',
													'15'=>'15',
													'15+'=>'15+'
												)));
		echo $form->input('position_id');
		echo $form->input('size_of_office');
		echo $form->input('office_id');
		echo $form->input('volunteering_id');
		echo $form->input('permission');
		echo $form->input('Area');
		echo $form->input('Section');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Profile.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Profile.id'))); ?></li>
	</ul>
</div>
