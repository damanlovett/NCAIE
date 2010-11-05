<?php echo $javascript->link(array('tiny_mce/tiny_mce', 'tiny_mce/tiny_basic', FALSE));?>
<h2>NAFSA/NCAIE Section</h2>
    <fieldset>
<?php echo $form->create('Ncaie', array('action'=>'post'));?>
        <legend><?php __('');?></legend>
    <?php
        echo $form->input('section_id', array('label'=>'Section of NCAIE'));
        echo $form->input('subject', array('style'=>'width:250px'));
        echo $form->input('message', array('type'=>'textarea'));
    ?>
<?php echo $form->end('Send');?>
    </fieldset>
