<div id="membersNav">
    <ul>
        <li>
            <?php echo $html->link(__('Users', true), array('controller'=>'users', 'action'=>'index'))." | "; ?>
        </li>
        <li>
            <?php echo $html->link(__('Positions', true), array('controller'=>'positions', 'action'=>'index'))." | "; ?>
        </li>
        <li>
            <?php echo $html->link(__('Areas', true), array('controller'=>'areas', 'action'=>'index'))." | "; ?>
        </li>
        <li>
            <?php echo $html->link(__('Offices', true), array('controller'=>'offices', 'action'=>'index'))." | "; ?>
        </li>
        <li>
            <?php echo $html->link(__('Volunteering', true), array('controller'=>'volunteerings', 'action'=>'index'))." | "; ?>
        </li>
        <li>
            <?php echo $html->link(__('Section', true), array('controller'=>'sections', 'action'=>'index'))." | "; ?>
        </li>
        <li>
            <?php echo $html->link(__('Expertises', true), array('controller'=>'expertises', 'action'=>'index'))." | "; ?>
        </li>
        <li>
            <?php echo $html->link(__('NCAIE', true), array('controller'=>'ncaies', 'action'=>'index'))." | "; ?>
        </li>
    </ul>
</div>
