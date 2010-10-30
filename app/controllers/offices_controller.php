<?php
class OfficesController extends AppController {

	var $name = 'Offices';
	var $helpers = array('Html', 'Form');
    var $paginate = array('order' => array('Office.position' => 'asc'));
	var $components = array('Email');
	var $pageTitle = 'Offices';
	
	function sendemail(){
		
        $this->Email->to = 'eddie@lovettcreations.org';
        $this->Email->subject = 'TODAY Cake test simple email';
        $this->Email->replyTo = 'noreply@localhost';
        $this->Email->from = 'Cake Test Account <noreply@localhost>';
		$this->Email->delivery = 'mail';
		$this->Email->sendAs = 'text';
        //Set the body of the mail as we send it.
        //Note: the text can be an array, each element will appear as a
        //seperate line in the message body.
        if ( $this->Email->send('Here is the body of the email') ) {
            $this->Session->setFlash('Simple email sent');
        } else {
            $this->Session->setFlash('Simple email not sent');
        }
        $this->redirect('/offices');
    }


	function index() {
		
		$this->Office->recursive = 0;
        $this->set('offices', $this->paginate('Office', array('type'=>'office'))); 
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Office', true), array('action'=>'index'));
		}
		$this->set('office', $this->Office->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Office->create();
			if ($this->Office->save($this->data)) {
				$this->flash(__('Office saved.', true));
				$this->redirect(array('action'=>'index'));
			} else {
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid Office', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Office->save($this->data)) {
				$this->flash(__('The Office has been saved.', true));
				$this->redirect(array('action'=>'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Office->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Office', true));
		    $this->redirect(array('action'=>'index'));
        }
        if ($this->Office->del($id)) {
            $this->Session->setFlash(__('Office deleted', true));
            $this->redirect(array('action'=>'index'));
        }
	}
	
    
}
?>