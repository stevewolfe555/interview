<?php

require 'app/bootstrap.php';

//initiate config
new \core\config();

//create alias for Router
use \core\router,
    \helpers\url;

// Set the DIC that can instantiate the controllers
Router::setDIC($dic);

//define routes
Router::any('', '\controllers\welcome@index');
Router::any('/subpage', '\controllers\welcome@subpage');
Router::any('/order', '\controllers\order@index');
Router::any('/order/new', '\controllers\Order@newOrder');
Router::any('/product', '\controllers\product@index');

//if no route found
Router::error('\core\error@index');

//turn on old style routing
Router::$fallback = false;

//execute matched routes
Router::dispatch();
