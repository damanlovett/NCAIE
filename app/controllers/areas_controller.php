<?php
class AreasController extends AppController {

	var $name = 'Areas';
	var $helpers = array('Html', 'Form');
	var $pageTitle = 'Area of Experience';
	var $paginate = array('order'=>array('Area.title'=>'asc'));

    function beforeFilter(){
        parent::beforeFilter();
        $this->__expiredSession();
        $this->Auth->allow('*');
    }
          
	function admin_index() {
		$this->Area->recursive = 0;
		$this->set('areas', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Area.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('area', $this->Area->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Area->create();
			if ($this->Area->save($this->data)) {
				$this->Session->setFlash(__('The Area has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Area could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Area->User->find('list');
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Area', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Area->save($this->data)) {
				$this->Session->setFlash(__('The Area has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Area could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Area->read(null, $id);
		}
		$users = $this->Area->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Area', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Area->del($id)) {
			$this->Session->setFlash(__('Area deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>