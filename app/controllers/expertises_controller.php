<?php
class ExpertisesController extends AppController {

	var $name = 'Expertises';
	var $helpers = array('Html', 'Form');
	var $components = array('Email');
	//var $paginate = array('order' => array('Expertise.area_id' =>'asc'));

    function index() {
        $this->Expertise->recursive = 0;
         $this->set('expertises', $this->paginate());
        $this->set(compact('expertises'));
        
    }
   function search($id = null) {
        $this->Expertise->recursive = 0;
        if(!empty($id)){
        $data = $this->paginate('Expertise', array('Expertise.area_id LIKE' => $id));
        $this->set('expertises', $data);
        }else{
        $this->set('expertises', $this->paginate());
   }
            }
		
   function post() {
        $this->Expertise->recursive = 1;
        if (!empty($this->data)){
        $areas = $this->paginate('Expertise', array('Expertise.area_id LIKE' => $this->data['Expertise']['area_id']));
		$this->set(compact('areas'));
				
		foreach ($areas as $area){
			

		    $this->Email->to = $area['Profile']['email'];
		    $this->Email->subject = $this->data['Expertise']['subject'];
            $this->Email->replyTo = $this->Auth->user('username');
            $this->Email->from = 'NCAIE Members System: ';
		    $this->Email->template = 'default'; 
		    $this->Email->sendAs = 'both'; 
		    $this->Email->send($this->data['Expertise']['message']);
			$this->Email->reset();   
										
		}
		if(empty($area)){
            $this->Session->setFlash(__('You email request has been processed.', true));
		}else{
		    $this->Session->setFlash(__('Email has been sent.', true));}
			            $this->redirect(array('action'=>'index'));
						
        }else{
        $areas = $this->Expertise->Area->find('list');
        $this->set(compact('areas'));
   }
            }

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Expertise.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('expertise', $this->Expertise->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Expertise->create();
			if ($this->Expertise->save($this->data)) {
				$this->Session->setFlash(__('The Expertise has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Expertise could not be saved. Please, try again.', true));
			}
		}
		$areas = $this->Expertise->Area->find('list');
		$users = $this->Expertise->User->find('list');
		$this->set(compact('areas', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Expertise', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Expertise->save($this->data)) {
				$this->Session->setFlash(__('The Expertise has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Expertise could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Expertise->read(null, $id);
		}
		$areas = $this->Expertise->Area->find('list');
		$users = $this->Expertise->User->find('list');
		$this->set(compact('areas','users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Expertise', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Expertise->del($id)) {
			$this->Session->setFlash(__('Expertise deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->Expertise->recursive = 0;
		$this->set('expertises', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Expertise.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('expertise', $this->Expertise->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Expertise->create();
			if ($this->Expertise->save($this->data)) {
				$this->Session->setFlash(__('The Expertise has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Expertise could not be saved. Please, try again.', true));
			}
		}
		$areas = $this->Expertise->Area->find('list');
		$users = $this->Expertise->User->find('list');
		$this->set(compact('areas', 'users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Expertise', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Expertise->save($this->data)) {
				$this->Session->setFlash(__('The Expertise has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Expertise could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Expertise->read(null, $id);
		}
		$areas = $this->Expertise->Area->find('list');
		$users = $this->Expertise->User->find('list');
		$this->set(compact('areas','users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Expertise', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Expertise->del($id)) {
			$this->Session->setFlash(__('Expertise deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

    // Private Functions
    
    function _sendMassMail($profile,$template,$subject) {
    	
		
    $this->set('user', $this->data['Profile']);
    $this->Email->to = $this->data['Profile']['username'];
    $this->Email->bcc = array('eddie@lovettcreations.org');  
    $this->Email->subject = $subject;
    $this->Email->replyTo = 'webdesigner@seaho.org';
    $this->Email->from = 'LCCM System <webdesigner@seaho.org>';
    $this->Email->template = $template; // note no '.ctp'
    $this->Email->sendAs = 'both'; // because we like to send pretty mail
    $this->Email->send();


    }


}
?>
