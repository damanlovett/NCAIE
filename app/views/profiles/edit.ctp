<div class="profiles form">
	<fieldset>
 		<legend><?php __('Edit Profile');?></legend>
<?php echo $form->create('Profile');?>
	<?php
		echo $form->input('id');
		echo $form->hidden('user_id');
		echo $form->input('institution');
		echo $form->input('title');
        echo $form->input('phone', array('default'=>'(xxx) xxx-xxxx', 'style'=>'width: 175px'));
        echo $form->input('service', array( 'label' => 'Years of Service in the Field'
			  , 'options' => array(
				  '1'=>'1',
				  '2'=>'2',
				  '3'=>'1',
				  '4'=>'1',
				  '5'=>'6',
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
        echo $form->input('size_of_office', array(
                                      'options'=>array(
                                            '1-2'=>'1-2',
                                            '3-7'=>'3-7',
                                            '8-12'=>'8-12',
                                            '12+'=>'12+'
                                      )));
		echo $form->input('office_id');
		echo $form->input('volunteering_id');
		echo $form->input('Area');
		echo $form->input('Section');
        echo $form->input('permission', 
                                  array('label'=>'Permission to give out your contact information to someone who requests it',
                                      'options'=>array(
                                           '1'=>'Yes',
                                           '0'=>'No')
                                        ));
	?>
<?php echo $form->end('Update');?>
	</fieldset>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Members', true), array('action'=>'index'));?></li>
	</ul>
</div>
