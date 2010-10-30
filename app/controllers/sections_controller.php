<?php
class SectionsController extends AppController {

	var $name = 'Sections';
	var $helpers = array('Html', 'Form');
	var $paginate = array('order'=>array('Section.title'=>'asc'));
	var $pageTitle = 'Section of NCAIE';

    function beforeFilter(){
        parent::beforeFilter();
        $this->__expiredSession();
        $this->Auth->allow('*');
    }

	function admin_index() {
		$this->Section->recursive = 0;
		$this->set('sections', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Section.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('section', $this->Section->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Section->create();
			if ($this->Section->save($this->data)) {
				$this->Session->setFlash(__('The Section has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Section could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Section', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Section->save($this->data)) {
				$this->Session->setFlash(__('The Section has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Section could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Section->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Section', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Section->del($id)) {
			$this->Session->setFlash(__('Section deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>