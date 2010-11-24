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
        echo $form->input('service', array( 'label' => 'Years of Service in International Education'
			  , 'options' => array(
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
				  '14+'=>'14+'
			  )));
		echo $form->input('position_id');
        echo $form->input('How many people work in your office?', array(
                                      'options'=>array(
                                            '1-2'=>'1-2',
                                            '3-7'=>'3-7',
                                            '8-12'=>'8-12',
                                            '12+'=>'12+'
                                      )));
                                      
        // Delete when confirmed by Client
                                     
		// echo $form->input('office_id');
		
		
		echo $form->input('volunteering_id', array('label'=>'Would you be interested in volunteering at an NCAIE event or workshop?'));
		echo $form->input('Area', array('label'=>'Area of Experience <br /> (Select all areas that in which you have had past or current experience)<br /> [holding the Ctrl key to select multiple options]'));
		echo $form->input('Section', array('label'=>'Section [holding the Ctrl key to select multiple options]'));
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
