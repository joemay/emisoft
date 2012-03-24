<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriasController
 *
 * @author Jose
 */
class CategoriasController extends AppController {

    public $name = 'Categorias';
    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $paginate = array('limit' => 10, 'order' => array('Categoria.id' => 'DESC'));
    public $mensajeGuardar = "Se agrego una categoría";
    public $mensajeActualizar = "Se actualizóla categoría";
    public $mensajeBorrar = "Se eliminó una categoría";
    public $mensajeErrorGuardar = "No se pudo agregar la categoría";
    public $mensajeErrorActualizar = "No se pudo actualizar la categoría";
    public $mensajeErrorBorrar = "No Se eliminó la categoría";

    public function index() {
        $data = $this->Categoria->find('all');
        $data = $this->paginate('Categoria');
        $this->set('categorias', $data);
    }

    public function view($id = null) {
        $this->Categoria->id = $id;
        $this->set('categoria', $this->Categoria->read());
    }

    public function add() {

        $parametrosDeBusqueda = array(
            'fields' => array('Departamento.id', 'Departamento.nombre'),
            'order' => array('Departamento.id DESC')
        );

        $departamentos = $this->Categoria->Departamento->find("list", $parametrosDeBusqueda);
        $this->set('departamentos', $departamentos);

        if ($this->request->is('post')) {
            if ($this->Categoria->save($this->request->data)) {
                $this->Session->setFlash($this->mensajeGuardar);
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash($this->mensajeErrorGuardar);
            }
        }
    }

    public function edit($id = null) {
        $this->Categoria->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Categoria->read();


            $parametrosDeBusqueda = array(
                'fields' => array('Departamento.id', 'Departamento.nombre'),
                'order' => array('Departamento.id DESC')
            );

            $departamentos = $this->Categoria->Departamento->find("list", $parametrosDeBusqueda);
            $this->set('departamentos', $departamentos);
        } else {
            if ($this->Categoria->save($this->request->data)) {
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



        if ($this->Categoria->delete($id)) {
            $this->Session->setFlash($this->mensajeBorrar);
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
