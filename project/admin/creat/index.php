<?php 
	$conn=mysql_connect("localhost","root","","test");
	if (!$conn) {
		echo "failed";
	}
	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$address=$_POST['address'];
		$gmail=$_POST['gmail'];
		$password=$_POST['password'];
		
		$rul="insert into create_table(name,mobile,address,gmail,password) values('$name','$mobile','$address','$gmail','$password')";
		$show=mysqli_query($conn,$rul);
		if ($show) {
			header("location:index.php");
		}

	}



 ?>
<div class="create">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<form action="#" method="POST" role="form">
				<legend>Well Come To Our Website</legend>
			
				<div class="form-group">
					<label for="">name</label>
					<input type="text" class="form-control" name="name" placeholder="name">
				</div>
				<div class="form-group">
					<label for="">mobile</label>
					<input type="text" class="form-control" name="mobile" placeholder="mobile">
				<div class="form-group">
					<label for="">address</label>
					<input type="text" class="form-control" name="address" placeholder="address">
				</div>
				</div>
				<div class="form-group">
					<label for="">gmail</label>
					<input type="text" class="form-control" name="gmail" placeholder="gmail">
				</div>
				<div class="form-group">
					<label for="">password</label>
					<input type="password" name="password" class="form-control"  placeholder="password">
				</div>
				

			
				
			
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

