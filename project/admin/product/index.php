<div class="col-md-10 rightpart">
	<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">product</h3>
			</div>
			<div class="panel-body">
				<a href="index.php?page=admin/product/add.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add Record</a>
			</div>
		</div>
		<?php $result=fetch_all("products"); ?>	

		<table class="table table-bordered">
			<tr>
				<th>sl</th>
				<th>catagory</th>
				<th>product</th>
				<th>quantity</th>
				<th>price</th>
				<th>action</th>

			</tr>
			<?php while($results=mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td><?php echo $results['id']; ?></td>
				<?php $catagory=fetch_children("categories",$results['catagory_id']); ?>
				<td><?php echo $catagory['name']; ?></td>
				<td><?php echo $results['name']; ?></td>
				<td><?php echo $results['quantity']; ?></td>
				<td><?php echo $results['price']; ?></td>

				<td class="text-center">
					<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
					<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
		<?php } ?>
		</table>
</div>