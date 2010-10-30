<?php
class AnnouncementsController extends AppController {

	var $name = 'Announcements';
	var $helpers = array('Html', 'Form');
	
    function beforeFilter(){
        parent::beforeFilter();
        $this->__expiredSession();
        $this->Auth->allow('display');
    }
    
	function index() {
		$this->Announcement->recursive = 0;
		$this->set('announcements', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Announcement.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('announcement', $this->Announcement->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Announcement->create();
			if ($this->Announcement->save($this->data)) {
				$this->Session->setFlash(__('The Announcement has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Announcement could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Announcement->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Announcement', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Announcement->save($this->data)) {
				$this->Session->setFlash(__('The Announcement has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Announcement could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Announcement->read(null, $id);
		}
		$users = $this->Announcement->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Announcement', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Announcement->del($id)) {
			$this->Session->setFlash(__('Announcement deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {

		$this->Announcement->recursive = 0;
		$this->set('announcements', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Announcement.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('announcement', $this->Announcement->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Announcement->create();
			if ($this->Announcement->save($this->data)) {
				$this->Session->setFlash(__('The Announcement has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Announcement could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Announcement->User->find('list');
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Announcement', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Announcement->save($this->data)) {
				$this->Session->setFlash(__('The Announcement has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Announcement could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Announcement->read(null, $id);
		}
		$users = $this->Announcement->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Announcement', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Announcement->del($id)) {
			$this->Session->setFlash(__('Announcement deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>