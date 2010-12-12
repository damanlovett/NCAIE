<?php echo $javascript->link(array('tiny_mce/tiny_mce', 'tiny_mce/tiny_simple', FALSE));?>
<?php echo $form->create('Expertise', array('action'=>'post'));?>
<h2>Area of Experience E-mail</h2>
    <fieldset>
        <legend><?php __('');?></legend>
    <?php
        echo $form->input('area_id', array('label'=>'Area of Experience'));
        echo $form->input('subject', array('style'=>'width:250px'));
        echo $form->input('message', array('type'=>'textarea'));
    ?>
    </fieldset>
<?php echo $form->end('Send');?>