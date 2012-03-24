<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author Jose
 */
class Categoria extends AppModel{
    
    public $name = 'Categoria';    
    public $belongsTo = array(
        'Departamento' => array(
            'className' => 'Departamento',
            'foreignKey' => 'departamento_id'
        )
      
    );
    
    public $hasMany = array(
        'Documento' => array(
            'className' => 'Documento',
            'foreignKey' => 'id',
            'conditions' => array(),
            'dependent' => true
        )
    );
}

?>
