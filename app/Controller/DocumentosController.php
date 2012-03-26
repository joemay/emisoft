<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DocumentosController
 *
 * @author Jose
 */
class DocumentosController extends AppController {

    public $name = 'Documentos';
    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $paginate = array('limit' => 10, 'order' => array('Documento.id' => 'DESC'));
    public $mensajeGuardar = "Se agrego un documento";
    public $mensajeActualizar = "Se actualizó el documento";
    public $mensajeBorrar = "Se eliminó un documento";
    public $mensajeErrorGuardar = "No se pudo agregar el documento";
    public $mensajeErrorActualizar = "No se pudo actualizar el documento";
    public $mensajeErrorBorrar = "No se eliminó el documento";

    public function index() {
        $data = $this->Documento->find('all');
        $data = $this->paginate('Documento');
        $this->set('documentos', $data);
    }

    public function view($id = null) {
        $this->Documento->id = $id;
        $this->set('documento', $this->Documento->read());
    }

    public function add() {

        $parametrosDeBusqueda = array(
            'fields' => array('Categoria.id', 'Categoria.nombre'),
            'order' => array('Categoria.id DESC')
        );

        $categorias = $this->Documento->Categoria->find("list", $parametrosDeBusqueda);
        $this->set('categorias', $categorias);


        if ($this->request->is('post')) {
            if ($this->Documento->save($this->request->data)) {

                $uploaddir = '../webroot/files/';



                $file = $this->request->data['Documento']['submittedfile'];
                $uploadfile = $uploaddir . basename($file['name']);

                if (move_uploaded_file($file['tmp_name'], $uploadfile)) {
                    echo "El archivo es válido y fue cargado exitosamente.\n";
                } else {
                    echo "¡Posible ataque de carga de archivos!\n";
                }








                //$this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash($this->mensajeErrorGuardar);
            }
        }
    }

    public function edit($id = null) {
        $this->Documento->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Documento->read();


            $parametrosDeBusqueda = array(
                'fields' => array('Categoria.id', 'Categoria.nombre'),
                'order' => array('Categoria.id DESC')
            );
            $categorias = $this->Documento->Categoria->find("list", $parametrosDeBusqueda);
            $this->set('empresas', $categorias);
        } else {
            if ($this->Documento->save($this->request->data)) {
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
        
        if ($this->Documento->delete($id)) {
            $this->Session->setFlash($this->mensajeBorrar);
            $this->redirect(array('action' => 'index'));
        }
    }

}

?>
