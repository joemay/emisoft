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
    
      public $belongsTo = array(
        'Empresa' => array(
            'className' => 'Empresa',
            'foreignKey' => 'empresa_id'
        )
      
    );
    
    public $hasMany = array(
        'Categoria' => array(
            'className' => 'Categoria',
            'foreignKey' => 'departamento_id',
            'conditions' => array(),
            'order' => 'Categoria.id DESC',
            'dependent' => true
        )
    );
    

    //put your code here
}

?>
