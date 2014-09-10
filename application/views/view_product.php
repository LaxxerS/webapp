
<div>
<h4> Found <?php echo $product_no; ?> Products</h4>

<table border="1px">
	<thead>
		<th>ID</th>
		<th>Picture</th>
		<th>Name</th>
		<th>Description</th>
		<th>Quantity</th>
		<th>Cost Price</th>
		<th>Selling Price</th>
		<th>Actions</th>
		
	</thead>
	
	<tbody>
		<?php if($product_no != 0){foreach($records as $row){ ?>
		<tr >
			
			<td >
				<?php echo $row->product_id; ?>
			</td>
			<td>
				<?php 
					$display = base_url() . "public/product/" . $row->product_id . ".jpg";
					echo "<img src='" . $display . "'  alt ='Product Picture' width='100'/>";
				?>
			</td>
			<td >
				<?php echo $row->product_name; ?>
			</td>
			<td >
				<?php echo $row->product_description; ?>
			</td>
			<td >
				<?php echo $row->product_quantity; ?>
			</td>
			<td >
				<?php echo $row->product_cost_price; ?>
			</td>
			<td >
				<?php echo $row->product_selling_price; ?>
			</td>
			<td >
				<a href="<?php echo base_url() . "admin/updateProduct/". $row->product_id ?>" >Edit</a>
				<a href="<?php echo base_url() . "admin/deleteProduct/". $row->product_id ?>" >Delete</a>
			</td>
		</tr>
			
	</tbody>
	<?php }} ?>	
</table>
</div>

</body>
</html>
