<div class="positions form">
<?php echo $form->create('Position');?>
	<fieldset>
 		<legend><?php __('Edit Position');?></legend>
    <?php
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
                                              9=>9,
                                              10=>10)));
                  
        echo $form->hidden('type', array('value'=>'position'));
        
        echo $form->input('visible', array(
                  'type'=>'radio',
                  'options'=>array(
                                    '1'=>'Yes',
                                    '0'=>'No'
                                    )
                  ));
    ?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="bottomactions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Position.id')), null, sprintf(__('Are you sure you want to delete %s?', true), $form->value('Position.name'))); ?></li>
		<li><?php echo $html->link(__('List Positions', true), array('action'=>'index'));?></li>
	</ul>
</div>
