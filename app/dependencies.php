<?php
use Auryn\Provider;

$injector = new Provider;

$injector->define('controllers\Order', ['orderModel' => '\models\order', 'productModel' => '\models\product']);
$injector->define('controllers\Product', ['productModel' => '\models\product']);

return $injector;