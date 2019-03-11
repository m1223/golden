
<?php 
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$query="insert into categories(name) values('$name')";

		$result=query($query);
		if ($result) {
			redirect("index.php?page=admin/catagory/add.php");
		}
	}




 ?>
<div class="panel panel-danger">
	<div class="panel-heading">
		<h3 class="panel-title">catagory</h3>
	</div>
	<div class="panel-body">
		<form method="post">
			<div class="form-group">
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="submit" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>