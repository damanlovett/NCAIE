<div id="loginBox">
    <div id="header"></div>
<div id="loginForm">
    <?php

    $session->flash();
    $session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('username', array('label'=>'Username:', 'style'=>'width:250px'));
    echo $form->input('password', array('label'=>'Password:', 'style'=>'width:250px'));
    echo $form->end('Login');
    
?>
</div>
<div id="footer">
            Copyright &copy; <?php echo date('Y');?> LCCM designed &
            owned by Lovett Creations.
            </div>
</div>