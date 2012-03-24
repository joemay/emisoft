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
    public $mensajeGuardar = "Se agrego una categoría";
    public $mensajeActualizar = "Se actualizóla categoría";
    public $mensajeBorrar = "Se eliminó una categoría";
    public $mensajeErrorGuardar = "No se pudo agregar la categoría";
    public $mensajeErrorActualizar = "No se pudo actualizar la categoría";
    public $mensajeErrorBorrar = "No Se eliminó la categoría";

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
