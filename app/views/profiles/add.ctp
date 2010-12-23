<div class="profiles form">
<?php echo $form->create('Profile');?>
	<fieldset>
 		<legend><?php __('Create Profile');?></legend>
    <?php
    
        echo $form->input('institution');
        echo $form->input('title');
        echo $form->input('phone', array('default'=>'xxx xxx-xxxx', 'style'=>'width: 175px'));
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
        echo $form->input('size_of_office', array(
                                      'options'=>array(
                                            '1-2'=>'1-2',
                                            '3-7'=>'3-7',
                                            '8-12'=>'8-12',
                                            '12+'=>'12+'
                                      )));
        //echo $form->hidden('office_id', array('default'=>''));
        echo $form->input('volunteering_id');
        echo $form->input('Area', array('label'=>'Area of Experience <br /> (Select all areas that in which you have had past or current experience)<br /> [holding the Ctrl key to select multiple options]'));
        echo $form->input('Section', array('label'=>'Section [holding the Ctrl key to select multiple options]'));
        echo $form->input('permission', 
                                  array('label'=>'Permission to give out your contact information to someone who requests it',
                                      'options'=>array(
                                           '1'=>'Yes',
                                           '0'=>'No')
                                        ));
    ?>
	</fieldset>
<?php echo $form->end('Create');?>
</div>
<div class="actions">
    <ul>
        <li><?php echo $html->link(__('Members', true), array('action'=>'index'));?></li>
    </ul>
</div>
