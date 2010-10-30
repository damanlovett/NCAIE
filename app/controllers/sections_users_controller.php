<?php
class SectionsUsersController extends AppController {

	var $name = 'SectionsUsers';
	var $helpers = array('Html', 'Form');

    function beforeFilter(){
        parent::beforeFilter();
        $this->__expiredSession();
        $this->Auth->allow('*');
    }
          
	function index() {
		$this->SectionsUser->recursive = 0;
		$this->set('sectionsUsers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SectionsUser.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('sectionsUser', $this->SectionsUser->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SectionsUser->create();
			if ($this->SectionsUser->save($this->data)) {
				$this->Session->setFlash(__('The SectionsUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SectionsUser could not be saved. Please, try again.', true));
			}
		}
		$sections = $this->SectionsUser->Section->find('list');
		$users = $this->SectionsUser->User->find('list');
		$this->set(compact('sections', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SectionsUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SectionsUser->save($this->data)) {
				$this->Session->setFlash(__('The SectionsUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SectionsUser could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SectionsUser->read(null, $id);
		}
		$sections = $this->SectionsUser->Section->find('list');
		$users = $this->SectionsUser->User->find('list');
		$this->set(compact('sections','users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SectionsUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SectionsUser->del($id)) {
			$this->Session->setFlash(__('SectionsUser deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->SectionsUser->recursive = 0;
		$this->set('sectionsUsers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid SectionsUser.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('sectionsUser', $this->SectionsUser->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SectionsUser->create();
			if ($this->SectionsUser->save($this->data)) {
				$this->Session->setFlash(__('The SectionsUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SectionsUser could not be saved. Please, try again.', true));
			}
		}
		$sections = $this->SectionsUser->Section->find('list');
		$users = $this->SectionsUser->User->find('list');
		$this->set(compact('sections', 'users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SectionsUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->SectionsUser->save($this->data)) {
				$this->Session->setFlash(__('The SectionsUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The SectionsUser could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SectionsUser->read(null, $id);
		}
		$sections = $this->SectionsUser->Section->find('list');
		$users = $this->SectionsUser->User->find('list');
		$this->set(compact('sections','users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for SectionsUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SectionsUser->del($id)) {
			$this->Session->setFlash(__('SectionsUser deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>