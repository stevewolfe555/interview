<?php
use \helpers\form,
	\core\error; ?>

<div class="page-header">
	<h1><?php echo $data['title'] ?></h1>
</div>



<?php echo Form::open(array('method' => 'post'));?>

<p>Name: <?php echo Form::input(array('name' => 'customer_name', 'value' => $customer_name ));?></p>

<?php 

foreach ($data['products'] as $product) {
	echo Form::input(array('name' => "product[$product->id][id]", 'type' => 'hidden', 'value' => $product->id));
	echo '<p>'.$product->name.': '. Form::input(array('name' => "product[$product->id][qty]", 'type' => 'number' )) . '</p>';
	echo Form::input(array('name' => "product[$product->id][name]", 'type' => 'hidden', 'value' => $product->name));
	echo Form::input(array('name' => "product[$product->id][price]", 'type' => 'hidden', 'value' => $product->price));

}?>

<p><?php echo Form::input(array('type' => 'submit', 'name' => 'submit', 'value' => 'Submit'));?></p>

<?php echo Form::close();?>

