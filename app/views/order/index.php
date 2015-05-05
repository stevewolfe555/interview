
<h1>Orders List</h1>
<p>This page shows a list of orders</p>

<?php 
if(null != (\helpers\session::get('message'))){ ?>
<div class="alert alert-success"><?php echo \helpers\session::pull('message'); ?></div>
<?php }?>

<?php print_r($data['products']);?>
<table class="table table-striped table-hover">
    <thead>
		<tr>
			<th>Edit</th>
			<th>Name</th>
			<th>Total</th>
			<th>Date/Time</th>
			<th>Status</th>
			<th>Delete</th>
        </tr>
    </thead>
	<tbody>
	<?php if($data['orders']){
			foreach ($data['orders'] as $order) {
				?>
		<tr>
			<td data-th="Edit " scope="row"><?php echo "<a href='".DIR."order/view/$order->order_id' class='btn btn-info'>View</a>";?></td>
			<td data-th="Customer " ><?php if(isset($order->customer_name)){ echo $order->customer_name;}else{ echo '&nbsp;';}?></td>
			<td data-th="Total " ><?php if(isset($order->order_total)){ echo $order->order_total;}else{ echo '&nbsp;';}?></td>
			<td data-th="Date/Time " ><?php if(isset($order->date_added)){ echo $order->date_added;}else{echo '&nbsp;';}?></td>
			<td data-th="Status " ><?php if(isset($order->status)){ echo $order->status; }else{echo '&nbsp;';}?></td>
			<td data-th="Delete "><?php //echo //"<a href='javascript:deleteorder(\"$order->order_id\",\"$order->firstname\",\"$order->lastname\")' class='btn btn-danger'>Delete</a>";?></td>
		</tr>

				<?php
			}
		}?>
	</tbody>
</table>
<?php echo $data['page_links']; ?>