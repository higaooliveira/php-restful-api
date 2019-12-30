<?php

class Api {
    private $__router = [];
    private $__request = NULL;

    public __construct(){
        $__router = [
            '/products/list' => 'ProductList@run',
        ];
    }
    public function getRouter(){
        return $this->__router;
    }
}