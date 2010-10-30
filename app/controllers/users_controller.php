<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form');
	var $components = array('Email');

	
    function beforeFilter(){
        parent::beforeFilter();
        //$this->__expiredSession();
        $this->Auth->allow('display','add');
    
    }
    
    function login() {
        $this->redirect('/');
    	$layout = 'default';
        
    }

    function logout() {
        $this->Session->delete('Users');
        $this->Session->delete('Auth');
        $this->Session->delete('Profile');
        $this->Session->destroy();
        $this->Session->setFlash(__('You have been logged out!', true));
        $this->redirect($this->Auth->logout());
    }

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid User.', true));
            $this->redirect(array('action'=>'index'));
        }
        $this->set('user', $this->User->read(null, $id));
    }


    function account() {
        $this->User->recursive = 0;
        $this->set('user',  $this->User->read(null, $this->Auth->user('id')));
    }

	function add() {
		$this->layout = 'registration';
		if (!empty($this->data)) {
			$this->User->create();
            $this->data['User']['name'] = $this->data['User']['last_name'].', '.$this->data['User']['first_name'];
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved, please login.', true));
				$this->redirect(array('controller'=>'pages'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
	}

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid User', true));
            $this->redirect(array('action'=>'account'));
        }
        if (!empty($this->data)) {
            $this->data['User']['password'] =  Security::hash($this->data['User']['password'], null, true);
            if ($this->User->save($this->data)) {
                $this->Session->setFlash(__('Your password has been updated', true));
                $this->redirect(array('action'=>'account'));
            } else {
                $this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->User->read(null, $id);
        }
    }

    function editb($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid User', true));
            $this->redirect(array('action'=>'account'));
        }
        if (!empty($this->data)) {
           $this->set('user',$this->data);
           $this->data['User']['name'] = $this->data['User']['last_name'].', '.$this->data['User']['first_name'];

            if ($this->User->save($this->data)) {
                $this->Session->setFlash(__('Your account has been updated', true));
                $this->redirect(array('action'=>'account'));
            } else {
                $this->Session->setFlash(__('The account could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->User->read(null, $id);
        }
    }

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for User', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->del($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function admin_access() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
	
	function admin_password($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid User', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$this->_editPasswordMail($this->data,'passwordReset','NCAIE Account Information',$this->data['User']['username']);

            $this->data['User']['password'] =  Security::hash($this->data['User']['password'], null, true);

			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The password has been changed and a confirmation e-mailed', true));
				$this->redirect(array('action'=>'access'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function admin_permission($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid User', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {

			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('Permissions have been updated', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function admin_index() {
		$this->User->recursive = 0;
		$this->paginate = array('order' => array('last_name' => 'asc'));
		$this->set('users', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid User.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid User', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The User has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for User', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->del($id, true)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
	// Private Functions
	
	function _editPasswordMail($users,$template,$subject,$email) {
    $this->set('user', $this->data['User']);
    $this->Email->to = $this->data['User']['username'];
    $this->Email->bcc = array('webmaster@lovettcreations.org');  
    $this->Email->subject = $subject;
    $this->Email->replyTo = 'webdesigner@seaho.org';
    $this->Email->from = 'LCCM System <webdesigner@lovettcreations.org>';
    $this->Email->template = $template; // note no '.ctp'
    //Send as 'html', 'text' or 'both' (default is 'text')
    $this->Email->sendAs = 'both'; // because we like to send pretty mail
    //Set view variables as normal
    //$this->set('User', $User);
    //Do not pass any args to send()
    $this->Email->send();


    }
}
?>