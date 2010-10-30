<?php
class MenusController extends AppController {

	var $name = 'Menus';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Menu->recursive = 0;
		$this->set('menus', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Menu', true), array('action'=>'index'));
		}
		$this->set('menu', $this->Menu->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Menu->create();
			if ($this->Menu->save($this->data)) {
				$this->flash(__('Menu saved.', true), array('action'=>'index'));
			} else {
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(__('Invalid Menu', true), array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Menu->save($this->data)) {
				$this->flash(__('The Menu has been saved.', true), array('action'=>'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Menu->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash(__('Invalid Menu', true), array('action'=>'index'));
		}
		if ($this->Menu->del($id)) {
			$this->flash(__('Menu deleted', true), array('action'=>'index'));
		}
	}

}
?>