<div class="sections form">
<?php echo $form->create('Section');?>
	<fieldset>
 		<legend><?php __('Edit Section');?></legend>
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Section.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Section.id'))); ?></li>
	</ul>
</div>
