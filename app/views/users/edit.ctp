<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Edit Password');?></legend>
	<?php
		echo $form->input('id');
        //echo $this->data['User']['first_name'];
		//echo $form->input('first_name');
		//echo $form->input('last_name');
		echo $form->hidden('username');
		echo $form->input('password');
	?>
	</fieldset>
<?php echo $form->end('Edit Password');?>
</div>
