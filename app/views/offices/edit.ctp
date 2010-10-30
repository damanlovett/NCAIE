<div class="offices form">
<?php echo $form->create('Office');?>
	<fieldset>
 		<legend><?php __('Edit Office');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
        echo $form->input('position', array('options'=>array(
                                              1=>1,
                                              2=>2,
                                              3=>3,
                                              4=>4,
                                              5=>5,
                                              6=>6,
                                              7=>7,
                                              8=>8,
                                              9=>9)));
		echo $form->input('visible', array(
		                              'type'=>'radio',
									  'options'=>array(
		                                      1=>'Yes',
											  0=>'No'
		                                      )));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Office.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Office.id'))); ?></li>
		<li><?php echo $html->link(__('List Offices', true), array('action'=>'index'));?></li>
	</ul>
</div>
