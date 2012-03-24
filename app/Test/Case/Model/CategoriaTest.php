<?php

App::uses('Categoria', 'Model');

class CategoriaTest extends CakeTestCase {

    public $fixtures = array('app.categoria');

    public function setup() {
        parent::setUp();
        $this->Categoria = ClassRegistry::init('Categoria');
    }

    public function testRead() {
        $result = $this->Categoria->read();
          $expected = array(
            array('Categoria' => array('id' => 1, 'categoria.nombre' => 'categorias', 'categoria.descripcion' => 'descripcion', 'departamento_id' => 1),
                  'Departamento' => array('id' => 1, 'nombre' => 'departamento.nombre', 'departamento.descripcion' => 'perfil', 'departamento.perfil' => 'departamentos', 'empresas_id' => 1),
                   'Documento' => array('id' => 1, 'nombre' => 'documento.nombre', 'descripcion' => 'documento.descripcion', 'perfil' => 'documento.perfil', 'empresas_id' => 1)

                )
        );
        $this->assertEquals($expected, $result);
    }

}