<?php namespace models;

class Product extends \core\model{
	
	public function getProducts(){ 
		return $this->_db->select("SELECT * FROM ".PREFIX."products");
	}

}
