<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa
 *
 * @author Jose
 */
class Empresa extends AppModel{
    
    public $name = 'Empresa';    

    
    public $hasMany = array(
        'Empleado' => array(
            'className' => 'Empleado',
            'foreignKey' => 'id',
            'conditions' => array(),
            'dependent' => true
        ),
        'Departamento' => array(
            'className' => 'Departamento',
            'foreignKey' => 'id',
            'conditions' => array(),
            'dependent' => true
        )
    );
}

?>
