<?php
class CategoriasControllerTest extends ControllerTestCase {

    public function testIndex() {
        $result = $this->testAction('/categorias/index');
        debug($result);
    }
    
}