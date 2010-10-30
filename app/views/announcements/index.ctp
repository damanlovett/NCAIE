<div class="announcements index">
<h2><?php __('Announcements');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table id="announcements" class="noborder" cellpadding="0" cellspacing="0">
<?php
$i = 0;
foreach ($announcements as $announcement):?>
	<tr>
		<td class="noborder">
			<p>
			<?php 
			
			echo "<h3>".$announcement['Announcement']['title']."</h3><br />";
			echo $announcement['Announcement']['message']."<br />";
			echo "<b>Created on: ".$time->format('l, F j, Y h:i a', $announcement['Announcement']['created'])." by ".$announcement['User']['name'].".</b>";
			
			?>
            </p>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__($html->image('email.png').'Expertise',true),array('controller'=>'expertises', 'action'=>'post'), array('escape' => false));?></li>
		<li><?php echo $html->link(__($html->image('email.png').'NCAIE',true),array('controller'=>'ncaies', 'action'=>'post'), array('escape' => false));?></li>
	</ul>
</div>
