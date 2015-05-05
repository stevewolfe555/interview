<?php namespace controllers;
use \core\view,
	\helpers\session,
	\helpers\url,
	\helpers\paginator,
    \core\model as Model,
    \models\order as OrderModel,
    \models\product as ProductModel;


/*
 * Order controller
 *
 */
class Order extends \core\controller{

    /**
     * @var \models\order
     */
    private $orderModel;

    /**
     * @var \models\product
     */
    private $productModel;

    /**
	 * Call the parent construct
	 */
	public function __construct(Model $orderModel, Model $productModel){
		parent::__construct();
        $this->orderModel = $orderModel;
        $this->productModel = $productModel;
	}

	/**
	 * Define Index page title and load template files
	 */
	public function index() {
		$data['title'] = 'Orders';

		$pages = new paginator('10','p');
		$pages->set_total(count($this->orderModel->getTotalOrders()));
		$data['orders'] = $this->orderModel->getOrders($pages->get_limit());
		$data['page_links'] = $pages->page_links();

		View::rendertemplate('header', $data);
		View::render('order/index', $data);
		View::rendertemplate('footer', $data);
    }


	/**
	 * New order page title and load template files
	 */
	public function newOrder() {
		$data['title'] = 'New Order';
		$data['products'] = $this->productModel->getProducts();


		if(isset($_POST['submit'])){


			$customer_name 		= $_POST['customer_name'];
			$products 			= $_POST['product'];
		
			if($customer_name == ''){

				$error[] = 'Customer Name is required';
			}

		
			if(!$error){

				$data = array(
					'customer_name'		=> $customer_name
				);
				
				$this->orderModel->insertOrder($data, $products);

				Session::set('message','Order added');
				Url::redirect('order');
			}
		}

		View::rendertemplate('header', $data);
		View::render('order/new', $data);
		View::rendertemplate('footer', $data);


	}

}
