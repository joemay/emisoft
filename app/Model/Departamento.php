<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Departamento
 *
 * @author Jose
 */
class Departamento extends AppModel {

    public $name = 'Departamento';
    
    
    public $hasMany = array(
        'Categoria' => array(
            'className' => 'Categoria',
            'foreignKey' => 'departamento_id',
            'conditions' => array(),
            'order' => 'Categoria.id DESC',
            'dependent' => true
        ),
         'Empleado' => array(
            'className' => 'Empleado',
            'foreignKey' => 'departamento_id',
            'conditions' => array(),
            'order' => 'Empleado.id DESC',
            'dependent' => true
        )
    );
    
    
    

}

?>
