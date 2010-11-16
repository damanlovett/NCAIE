<div id="adminNav">
    <ul>
		<li><?php echo "[ ".$html->link('Announcements', '/admin/announcements/index')." ] "; ?></li>
		<li><?php echo "[ ".$html->link('Accounts', '/admin/users/index')." ] "; ?></li>
		<li><?php echo "[ ".$html->link('Profiles', '/admin/profiles/')." ] "; ?></li>
        <!-- Disabled Section delete if email system is created
		<li><?php //echo $html->link('Expertises', 'admin/expertises/index')." | "; ?></li>
        <li><?php //echo $html->link('NCAIE', 'admin/ncaies/index')." | "; ?></li>
		-->
		<li><?php echo "[ ".$html->link('Experience', '/admin/areas')." ] "; ?></li>
		<li><?php echo "[ ".$html->link('NCAIE', '/admin/sections')." ] "; ?></li>
<!-- <li><?php //echo "[ ".$html->link('Email System', '/admin/users/post')." ] "; ?></li> -->
		<li><?php echo "[ ".$html->link('Access', '/admin/users/access')." ] "; ?></li>
    </ul>
</div>
