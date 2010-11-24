<div class="pageButtons">
<br />
<table>	
   <tr><td class="actions"><?php echo $html->link(__('Experience',true),array('controller'=>'expertises', 'action'=>'post'), array('escape' => false));?> &nbsp; Send a message to a specific area of Expertise</td> </tr>
  <!-- <li> &nbsp; </li> -->
   <td class="actions"><?php echo $html->link(__('NCAIE',true),array('controller'=>'ncaies', 'action'=>'post'), array('class'=>'add', 'escape' => false));?> &nbsp; Send a message to a specific NCAIE Group</td></tr>
</table>