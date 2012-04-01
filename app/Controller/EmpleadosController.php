<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpleadosController
 *
 * @author Jose
 */
class EmpleadosController extends AppController {

    public $name = 'Empleados';
    public $helpers = array('Html', 'Form');
    public $components = array('Session');
    public $paginate = array('limit' => 10, 'order' => array('Empleado.id' => 'DESC'));
    public $mensajeGuardar = "Se agrego una categoría";
    public $mensajeActualizar = "Se actualizó la categoría";
    public $mensajeBorrar = "Se eliminó una categoría";
    public $mensajeErrorGuardar = "No se pudo agregar la categoría";
    public $mensajeErrorActualizar = "No se pudo actualizar la categoría";
    public $mensajeErrorBorrar = "No se eliminó la categoría";

    public function index() {
        $data = $this->Empleado->find('all');
        $data = $this->paginate('Empleado');
        $this->set('empleados', $data);
    }

    public function view($id = null) {
        $this->Empleado->id = $id;
        $this->set('empleado', $this->Empleado->read());
    }

    public function add() {

        $parametrosDeBusqueda = array(
            'fields' => array('Departamento.id', 'Departamento.nombre'),
            'order' => array('Departamento.id DESC')
        );

        $departamentos = $this->Empleado->Departamento->find("list", $parametrosDeBusqueda);
        $this->set('departamentos', $departamentos);
        
        $parametrosDeBusqueda = array(
            'fields' => array('Puesto.id', 'Puesto.nombre'),
            'order' => array('Puesto.id DESC')
        );

        $puestos = $this->Empleado->Puesto->find("list", $parametrosDeBusqueda);
        $this->set('puestos', $puestos);
        

        if ($this->request->is('post')) {
            
            $newData['User']['username'] = $this->request->data['Empleado']['username'];
            $newData['User']['password'] = $this->request->data['Empleado']['password'];
            
            //print_r($newData);

            //$newIngredientId = $this->User->id;
            
            $this->Empleado->User->save($newData);
            
            if ( $this->Empleado->User->id ) {
                
                 $empleadoData = $this->request->data;

                $empleadoData['Empleado']['usuario_id'] = $this->Empleado->User->id;
                
                
                //print_r($empleadoData);
                
                
                 if ( $this->Empleado->save($empleadoData)) {
                     $this->Session->setFlash($this->mensajeGuardar);
                       $this->redirect(array('action' => 'index'));
                 }
                
                 
                
      
                
            } else {
                $this->Session->setFlash($this->mensajeErrorGuardar);
            }
        }
    }

    public function edit($id = null) {
        $this->Empleado->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Empleado->read();


            $parametrosDeBusqueda = array(
                'fields' => array('Departamento.id', 'Departamento.nombre'),
                'order' => array('Departamento.id DESC')
            );

            $departamentos = $this->Empleado->Departamento->find("list", $parametrosDeBusqueda);
            $this->set('departamentos', $departamentos);
        } else {
            if ($this->Empleado->save($this->request->data)) {
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



        if ($this->Empleado->delete($id)) {
            $this->Session->setFlash($this->mensajeBorrar);
            $this->redirect(array('action' => 'index'));
        }
    }
    
    public function search() {
            $terminoBusqueda = $this->request->data['Empleado']['nombre'];
            $conditions =  array('Empleado.nombre LIKE' => '%' .$terminoBusqueda. '%');
            $data = $this->paginate('Empleado');
            $data = $this->Empleado->find('all', array('conditions' => $conditions));
            $this->Session->setFlash("Resultados para la busqueda de \"" .$terminoBusqueda ."\"" );
            $this->set('empleados', $data);        
    }

}

?>
