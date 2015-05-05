<?php
namespace models;

class Order extends \core\model {

	public function getOrders($limit){
		return $this->_db->select("SELECT 
		".PREFIX."orders.id,
		".PREFIX."orders.date_added,
		".PREFIX."orders.status,
		".PREFIX."orders.customer_name,
		Sum(".PREFIX."order_products.product_price) AS order_total
		FROM ".PREFIX."orders
		LEFT JOIN ".PREFIX."order_products ON ".PREFIX."orders.id = ".PREFIX."order_products.order_id
		GROUP BY
		".PREFIX."orders.id,
		".PREFIX."orders.date_added,
		".PREFIX."orders.`status`,
		".PREFIX."orders.customer_name,
		".PREFIX."orders.order_data
		".$limit);
	}

	public function getTotalOrders(){
		return $this->_db->select("SELECT id FROM ".PREFIX."orders");
	}

    public function insertOrder($data, $products){

		$order_id = $this->_db->insert(PREFIX."orders",$data);

		foreach ($products as $product) {
			if(!empty($product['qty'])){
				$data = array(
					'order_id'			=> $order_id,
					'product_id'		=> $product['id'],
					'product_name'		=> $product['name'],
					'product_price'		=> $product['price'],
					'product_qty'		=> $product['qty']
				);

				$this->insertOrderProducts($data);
			}
		}

    }

    public function insertOrderProducts($data){
    	$this->_db->insert(PREFIX."order_products",$data);
    }


    public function getOrderProducts(){
    	
    }

}

