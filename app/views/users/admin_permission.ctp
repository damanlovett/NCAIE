<div class="users form">
<h2><?php __('Permission: '.$this->data['User']['name']);?></h2>
	<fieldset>
<?php echo $form->create('User', array('action'=>'permission'));?>
	<?php
		echo $form->input('id');
		//echo $form->input('name');
		//echo $form->input('username', array('label'=>'Username/E-mail'));
		echo $form->input('role', array(
									'label'=>'Access Level',
									'options'=>array(
									'1'=>'Admin, Full Access',
									'2'=>'Member, Read Only/E-mail Access')));
		//echo $form->input('role');
		//echo $form->input('group_id');
	?>
<?php echo $form->end('Grant Permission');?>
	</fieldset>
</div>
