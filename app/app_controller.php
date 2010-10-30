<?php

class AppController extends Controller {
	
		var $components = array('Auth','Session');
		var $helpers = array('Html', 'Form', 'Javascript', 'Switches', 'Lists','Time');
		var $layout = 'ncaie';
		
    function beforeFilter(){
        $this->Auth->allow(array('display'));
        $this->Auth->logoutRedirect = '/';
        $this->Auth->loginRedirect = array('controller'=>'announcements');
        $this->Auth->authError = sprintf(__('You are not authorized to access this page.',true),$this->name);
        $this->Auth->authorize = 'controller';
        $this->Auth->userScope = array('User.active = 1');
        $this->set('Auth',$this->Auth->user());
	if ($this->Auth->user('role') == '1') {
			$this->layout = 'admin';
		}
    }
	
    function isAuthorized() {
        if ($this->action == 'delete') {
            if ($this->Auth->user('role') == 'admin') {
                return true;
            } else {
                return false;
            }
        }

        return true;
    }
	
/** Check for expired Sessions
* 
*/
    function __expiredSession(){
        
        if($this->Session->check('Auth.User.id') == false) 
            { 
                $this->redirect('/'); 
                $this->Session->setFlash('Your session has expired.'); 
            } 
    }
}
?>