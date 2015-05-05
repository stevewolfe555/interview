<?php

class Customer
{
    private $orders = [];

    public function addOrder(Order $order)
    {
        $this->orders[] = $order;
    }
}

class Order
{
    public function addProduct(Product $product)
    {
    }
}

class Product
{
    private $description;

    private $price;

    public function __construct($description, $price)
    {
        $this->description = $description;
        $this->price       = $price;
    }
}

$order = new Order();
$order->addProduct(new Product('foo', 1.99));
$order->addProduct(new Product('bar', 9.99));

$customer = new Customer();
$customer->addOrder($order);