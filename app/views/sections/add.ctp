<div class="sections form">
<?php echo $form->create('Section');?>
	<fieldset>
 		<legend><?php __('Add Section');?></legend>
    <?php
        echo $form->input('title');
        echo $form->input('visible', array(
                  'type'=>'radio',
                  'options'=>array(
                        '1'=>'Yes',
                        '0'=>'No')
                 ));

    ?>
    </fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Sections', true), array('action'=>'index'));?></li>
	</ul>
</div>
