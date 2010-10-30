<?php
class VolunteeringsController extends AppController {

	var $name = 'Volunteerings';
	var $helpers = array('Html', 'Form');
	var $paginate = array('order' => array('Volunteering.position' => 'asc'));
	var $pageTitle = 'Interest in Volunteering';

	function index() {
		$this->Volunteering->recursive = 0;
		$this->set('volunteerings', $this->paginate('Volunteering', array('type'=>'Volunteering')));

	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Volunteering', true), array('action'=>'index'));
		}
		$this->set('volunteering', $this->Volunteering->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Volunteering->create();
			if ($this->Volunteering->save($this->data)) {
                $this->Session->setFlash(__('The Volunteering has been saved', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The Volunteering Information could not be saved. Please, try again.', true));

			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid Volunteering', true));
            $this->redirect (array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Volunteering->save($this->data)) {
				$this->flash(__('The Volunteering has been saved.', true));
                $this->redirect (array('action'=>'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Volunteering->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Volunteering', true));
			$this->redirect (array('action'=>'index'));
		}
		if ($this->Volunteering->del($id)) {
			$this->flash(__('Volunteering deleted', true));
            $this->redirect (array('action'=>'index'));
		}
	}

}
?>