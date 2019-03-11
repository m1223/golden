<div class="col-md-10 rightpart">
	<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">catagory</h3>
			</div>
			<div class="panel-body">
				<a href="index.php?page=admin/catagory/add.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp; Add Record</a>
			</div>
		</div>	
			<?php $result=fetch_all("categories"); ?>
		<table class="table table-bordered">
			<tr>
				<th>sl</th>
				<th>name</th>
				<th>action</th>

			</tr>
			<?php while ($results=mysqli_fetch_assoc($result)) {?>
				
		
			<tr>
				<td><?php echo $results['id']; ?></td>
				<td><?php echo $results['name']; ?></td>
				<td class="text-center">
					<a href="crud/delete.php?id=<?php echo $results['id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
					<a href="crud/delete.php?id=<?php echo $results['id']; ?>"" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
				</td>
			</tr>
		<?php } ?>
		</table>
</div>