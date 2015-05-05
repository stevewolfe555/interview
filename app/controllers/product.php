<?php namespace controllers;
use core\view as View,
    \core\Model as Model;

class Product extends \core\controller{

    private $productModel;

	public function __construct(Model $productModel){
		parent::__construct();
        $this->productModel = $productModel;
	}

	public function index(){
	    var_dump($this->getProducts());
	}

	public function getProducts(){
		return $this->productModel->getProducts();
	}
	
}