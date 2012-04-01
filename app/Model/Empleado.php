
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

class Empleado extends AppModel {

    public $name = 'Empleado';
    //public $belongsTo = 'Departamento';

 
    public $belongsTo = array(
        'Departamento' => array(
            'className' => 'Departamento',
            'foreignKey' => 'departamento_id',
            'conditions' => array(),
            'order' => 'Departamento.id DESC',
            'dependent' => true
        ),
         'Puesto' => array(
            'className' => 'Puesto',
            'foreignKey' => 'puesto_id',
            'conditions' => array(),
            'order' => 'Puesto.id DESC',
            'dependent' => true
        ),
         'User' => array(
            'className' => 'User',
            'foreignKey' => 'usuario_id',
            'conditions' => array(),
            'order' => 'Puesto.id DESC',
            'dependent' => true
        )
      
    );

    
    

    //put your code here
}

?>
