<?php
class NcaiesController extends AppController {

	var $name = 'Ncaies';
	var $helpers = array('Html', 'Form');
    var $components = array('Email');

    function beforeFilter(){
        parent::beforeFilter();
        $this->__expiredSession();
        $this->Auth->allow('*');
    }
          
	function index() {
		$this->Ncaie->recursive = 0;
		$this->set('ncaies', $this->paginate());
	}
   function search($id = null) {
        $this->Ncaie->recursive = 0;
        if(!empty($id)){
        $data = $this->paginate('Ncaie', array('Ncaie.section_id LIKE' => $id));
        $this->set('ncaies', $data);
        }else{
        $this->set('ncaies', $this->paginate());
   }
            }
        


	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Ncaie.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ncaie', $this->Ncaie->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ncaie->create();
			if ($this->Ncaie->save($this->data)) {
				$this->Session->setFlash(__('The Ncaie has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Ncaie could not be saved. Please, try again.', true));
			}
		}
		$sections = $this->Ncaie->Section->find('list');
		$users = $this->Ncaie->User->find('list');
		$this->set(compact('sections', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Ncaie', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ncaie->save($this->data)) {
				$this->Session->setFlash(__('The Ncaie has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Ncaie could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ncaie->read(null, $id);
		}
		$sections = $this->Ncaie->Section->find('list');
		$users = $this->Ncaie->User->find('list');
		$this->set(compact('sections','users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Ncaie', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ncaie->del($id)) {
			$this->Session->setFlash(__('Ncaie deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
	
   function post() {
        $this->Ncaie->recursive = 1;
        if (!empty($this->data)){
        $sections = $this->paginate('Ncaie', array('Ncaie.section_id LIKE' => $this->data['Ncaie']['section_id']));
        $this->set(compact('sections'));
                
        foreach ($sections as $section){
            
            $message = $this->__GetSQLValueString($this->data['Ncaie']['message'], "text");
            $this->Email->to = $section['Profile']['email'];
            $this->Email->subject = $this->data['Ncaie']['subject'];
            $this->Email->replyTo = $this->Auth->user('username');
            $this->Email->from = 'NCAIE Members System';
            $this->Email->template = 'default'; 
            $this->Email->sendAs = 'both'; 
            $this->Email->send($message);
            $this->Email->reset();   
                                        
        }
		if(empty($area)){
            $this->Session->setFlash(__('You email request has been processed.', true));
        }else{
            $this->Session->setFlash(__('Email has been sent.', true));}
                        $this->redirect(array('action'=>'index'));
                                       
        }else{
        $sections = $this->Ncaie->Section->find('list');
        $this->set(compact('sections'));
   }
            }


	function admin_index() {
		$this->Ncaie->recursive = 0;
		$this->set('ncaies', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Ncaie.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ncaie', $this->Ncaie->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Ncaie->create();
			if ($this->Ncaie->save($this->data)) {
				$this->Session->setFlash(__('The Ncaie has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Ncaie could not be saved. Please, try again.', true));
			}
		}
		$sections = $this->Ncaie->Section->find('list');
		$users = $this->Ncaie->User->find('list');
		$this->set(compact('sections', 'users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Ncaie', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ncaie->save($this->data)) {
				$this->Session->setFlash(__('The Ncaie has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Ncaie could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ncaie->read(null, $id);
		}
		$sections = $this->Ncaie->Section->find('list');
		$users = $this->Ncaie->User->find('list');
		$this->set(compact('sections','users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Ncaie', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ncaie->del($id)) {
			$this->Session->setFlash(__('Ncaie deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
	
/* Private Functions */
function __GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

}
?>