<?php
class RegistrationsController extends AppController {

    var $name = 'Registrations';
    var $helpers = array('Html', 'Form');
    var $paginate = array('order'=>array('User.last_name'=>'asc'));

    function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid User.', true));
            $this->redirect(array('action'=>'index'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->User->create();
            if ($this->User->save($this->data)) {
                $this->Session->setFlash(__('The User has been saved', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
            }
        }
        $areas = $this->User->Area->find('list', array('order'=>array('title'=>'asc'), 'conditions'=>array('visible'=>1)));
        $positions = $this->User->Position->find('list', array('order'=>array('position'=>'asc'), 'conditions'=>array('visible'=>1, 'type'=>'position')));
        $volunteerings = $this->User->Volunteering->find('list', array('order'=>array('position'=>'asc'), 'conditions'=>array('visible'=>1, 'type'=>'volunteering')));
        $offices = $this->User->Office->find('list', array('order'=>array('position'=>'asc'), 'conditions'=>array('visible'=>1, 'type'=>'office')));
        $sections = $this->User->Section->find('list', array('order'=>array('position'=>'asc'), 'conditions'=>array('visible'=>1, 'type'=>'section')));
        $this->set(compact('areas','positions','volunteerings','offices', 'sections'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid User', true));
            $this->redirect(array('action'=>'index'));
        }
        if (!empty($this->data)) {
            if ($this->User->save($this->data)) {
                $this->Session->setFlash(__('The User has been saved', true));
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash(__('The User could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->User->read(null, $id);
                    $areas = $this->User->Area->find('list', array('order'=>array('title'=>'asc'), 'conditions'=>array('visible'=>1)));
        $positions = $this->User->Position->find('list', array('order'=>array('position'=>'asc'), 'conditions'=>array('visible'=>1, 'type'=>'position')));
        $volunteerings = $this->User->Volunteering->find('list', array('order'=>array('position'=>'asc'), 'conditions'=>array('visible'=>1, 'type'=>'volunteering')));
        $offices = $this->User->Office->find('list', array('order'=>array('position'=>'asc'), 'conditions'=>array('visible'=>1, 'type'=>'office')));
        $sections = $this->User->Section->find('list', array('order'=>array('position'=>'asc'), 'conditions'=>array('visible'=>1, 'type'=>'section')));
        $this->set(compact('areas','positions','volunteerings','offices', 'sections'));
        }

    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for User', true));
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->del($id)) {
            $this->Session->setFlash(__('User deleted', true));
            $this->redirect(array('action'=>'index'));
        }
    }
    


}
?>