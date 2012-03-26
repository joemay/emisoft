<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PuestosController
 *
 * @author Jose
 */
class PuestosController extends AppController {

    public $name = 'Puestos';
    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $paginate = array('limit' => 10, 'order' => array('Puesto.id' => 'DESC'));
    public $mensajeGuardar = "Se agrego un puesto";
    public $mensajeActualizar = "Se actualizó el puesto";
    public $mensajeBorrar = "Se eliminó un puesto";
    public $mensajeErrorGuardar = "No se pudo agregar el puesto";
    public $mensajeErrorActualizar = "No se pudo actualizar el puesto";
    public $mensajeErrorBorrar = "No se eliminó el puesto";

    public function index() {
        $data = $this->Puesto->find('all');
        $data = $this->paginate('Puesto');
        $this->set('puestos', $data);
    }

    public function view($id = null) {
        $this->Puesto->id = $id;
        $this->set('puesto', $this->Puesto->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Puesto->save($this->request->data)) {
                $this->Session->setFlash($this->mensajeGuardar);
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash($this->mensajeErrorGuardar);
            }
        }
    }

    public function edit($id = null) {
        $this->Puesto->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Puesto->read();
        } else {
            if ($this->Puesto->save($this->request->data)) {
                $this->Session->setFlash($this->mensajeActualizar);
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash($this->mensajeErrorActualizar);
            }
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Puesto->delete($id)) {
            $this->Session->setFlash($this->mensajeBorrar);
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
