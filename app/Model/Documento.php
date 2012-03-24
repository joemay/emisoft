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
class Documento extends AppModel{
    
    public $name = 'Documentos';
    public $belongsTo = 'Categoria';

}

?>
