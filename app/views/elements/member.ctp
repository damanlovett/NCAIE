<div id="membersNav">
    <ul>
        <li><?php echo $html->link('Members Home','/announcements/index')." | "; ?></li>        <li><?php echo $html->link('My Account', '/users/account')." | "; ?></li>
        <li><?php echo $html->link('My Profile', '/profiles/personal')." | "; ?></li>
        <li><?php echo $html->link('Members', '/profiles/index')." | "; ?></li>
<!-- Commented out until confirmed deletion -->
      <!--  <li><?php //echo $html->link('Expertises', '/expertises/index')." | "; ?></li> 
        <li><?php //echo $html->link('NCAIE', '/ncaies/index')." | "; ?></li>-->
        <li><?php echo $html->link('Log Out', '/users/logout')." | "; ?></li>
    </ul>
</div>
