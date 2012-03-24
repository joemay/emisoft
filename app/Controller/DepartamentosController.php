<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DepartamentosController
 *
 * @author Jose
 */
class DepartamentosController extends AppController {

    public $name = 'Departamentos';
    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $paginate = array('limit' => 10, 'order' => array('Departamento.id' => 'DESC'));
    public $mensajeGuardar = "Se agrego una categoría";
    public $mensajeActualizar = "Se actualizóla categoría";
    public $mensajeBorrar = "Se eliminó una categoría";
    public $mensajeErrorGuardar = "No se pudo agregar la categoría";
    public $mensajeErrorActualizar = "No se pudo actualizar la categoría";
    public $mensajeErrorBorrar = "No Se eliminó la categoría";

    public function index() {
        $data = $this->Departamento->find('all');
        $data = $this->paginate('Departamento');
        $this->set('departamentos', $data);
    }

    public function view($id = null) {
        $this->Departamento->id = $id;
        $this->set('categoria', $this->Departamento->read());
    }

    public function add() {

        $parametrosDeBusqueda = array(
            'fields' => array('Empresa.id', 'Empresa.nombre'),
            'order' => array('Empresa.id DESC')
        );

        $empresas = $this->Departamento->Empresa->find("list", $parametrosDeBusqueda);
        $this->set('empresas', $empresas);

        if ($this->request->is('post')) {
            if ($this->Departamento->save($this->request->data)) {
                $this->Session->setFlash($this->mensajeGuardar);
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash($this->mensajeErrorGuardar);
            }
        }
    }

    public function edit($id = null) {
        $this->Departamento->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Departamento->read();


            $parametrosDeBusqueda = array(
                'fields' => array('Empresa.id', 'Empresa.nombre'),
                'order' => array('Empresa.id DESC')
            );
            $empresas = $this->Departamento->Empresa->find("list", $parametrosDeBusqueda);
            $this->set('empresas', $empresas);
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



        if ($this->Departamento->delete($id)) {
            $this->Session->setFlash($this->mensajeBorrar);
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
