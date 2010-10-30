<?php
class AreasUsersController extends AppController {

	var $name = 'AreasUsers';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->AreasUsers->recursive = 0;
		$this->set('areasUsers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AreasUser.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('areasUser', $this->AreasUser->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AreasUser->create();
			if ($this->AreasUser->save($this->data)) {
				$this->Session->setFlash(__('The AreasUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AreasUser could not be saved. Please, try again.', true));
			}
		}
		$areas = $this->AreasUser->Area->find('list');
		$users = $this->AreasUser->User->find('list');
		$this->set(compact('areas', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AreasUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AreasUser->save($this->data)) {
				$this->Session->setFlash(__('The AreasUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AreasUser could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AreasUser->read(null, $id);
		}
		$areas = $this->AreasUser->Area->find('list');
		$users = $this->AreasUser->User->find('list');
		$this->set(compact('areas','users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AreasUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AreasUser->del($id)) {
			$this->Session->setFlash(__('AreasUser deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->AreasUser->recursive = 0;
		$this->set('areasUsers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid AreasUser.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('areasUser', $this->AreasUser->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AreasUser->create();
			if ($this->AreasUser->save($this->data)) {
				$this->Session->setFlash(__('The AreasUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AreasUser could not be saved. Please, try again.', true));
			}
		}
		$areas = $this->AreasUser->Area->find('list');
		$users = $this->AreasUser->User->find('list');
		$this->set(compact('areas', 'users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid AreasUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->AreasUser->save($this->data)) {
				$this->Session->setFlash(__('The AreasUser has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The AreasUser could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AreasUser->read(null, $id);
		}
		$areas = $this->AreasUser->Area->find('list');
		$users = $this->AreasUser->User->find('list');
		$this->set(compact('areas','users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for AreasUser', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AreasUser->del($id)) {
			$this->Session->setFlash(__('AreasUser deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>