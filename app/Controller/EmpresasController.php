<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpresasController
 *
 * @author Jose
 */
class EmpresasController extends AppController {

    public $name = 'Empresas';
    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $paginate = array('limit' => 10, 'order' => array('Empresa.id' => 'DESC'));
    public $mensajeGuardar = "Se agrego una categoría";
    public $mensajeActualizar = "Se actualizóla categoría";
    public $mensajeBorrar = "Se eliminó una categoría";
    public $mensajeErrorGuardar = "No se pudo agregar la categoría";
    public $mensajeErrorActualizar = "No se pudo actualizar la categoría";
    public $mensajeErrorBorrar = "No Se eliminó la categoría";

    public function index() {
        $data = $this->Empresa->find('all');
        $data = $this->paginate('Empresa');
        $this->set('empresas', $data);
    }

    public function view($id = null) {
        $this->Empresa->id = $id;
        $this->set('categoria', $this->Empresa->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Empresa->save($this->request->data)) {
                $this->Session->setFlash($this->mensajeGuardar);
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash($this->mensajeErrorGuardar);
            }
        }
    }

    public function edit($id = null) {
        $this->Empresa->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Empresa->read();

       
        } else {
            if ($this->Empresa->save($this->request->data)) {
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



        if ($this->Empresa->delete($id)) {
            $this->Session->setFlash($this->mensajeBorrar);
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
