<?php
include('connect.php');
?>

<html>
<head>
	<title>
		list
	</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- script -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="owner.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>
	<body>
		
		
		<?php
		
		$query = 'SELECT `feedback` FROM `shopkeeper` ORDER BY `id` DESC';
		$run = mysqli_query($conn,$query);
		$count = mysqli_num_rows($run);
		?>
		
	
	<div>
		<nav>
			<section>
				<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#f75f00;">
					<a class="navbar-brand" href="costumer.php">VIT SHOP </a>


					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#har" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="har">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="profile.php">Profile</a></li>
							<li class="nav-item active"><a class="nav-link" href="history.php">History</a></li>
							<li class="nav-item active"><a class="nav-link" href="notification.php">Notifications(<?php echo $count;?>)</a></li>
							<li class="nav-item active"><a class="nav-link" href="#">Logout</a></li>
						</ul>
					</div>
				</nav>
			</section>
		</nav>
	</div>
		
		<div>
		<form method="post" action="# ">
			<ul class="list-group">
				
				<li class="list-group-item"><input type="checkbox" name="item[]" value="soap"> soap</li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="sugar"> sugar </li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="salt"> salt </li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="hair oil"> hair oil </li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="washing powder"> washing powder </li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="noodles"> noodles </li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="grains"> grains </li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="wheat"> wheat </li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="perfume"> perfume </li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="ground nuts"> ground nuts </li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="pulses"> pulses </li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="jaggery"> jaggery </li>
				<li class="list-group-item"><input type="checkbox" name="item[]" value="turmeric powder"> turmeric powder </li>
				<li><div class="form-group" style="text-align: center;">
					<label for="exampleFormControlTextarea1">Other Remarks</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textarea" value="remarks"></textarea>
				</div></li>
			</ul>
			<div style="text-align: center;">
				<input type="submit" name="submit" style="background-color: #f75f00;">
			</div>
		</form>
	</div>

	</body>
</html>
<?php

if (isset($_POST['submit']))
{
	include('connect.php');
	$rawitems = $_POST['item'];
	$text = $_POST['textarea'];
	$items = implode(",",$rawitems);
	
	$qry = "INSERT INTO `customer`(`items`, `text`) VALUES ('$items','$text')";
	
	$run = mysqli_query($conn,$qry);
	
	if( $run == true)
	{
		?>
		<script>alert("Your have send list successfully");
				alert("To order more continue");

</script>
		<?php
	}
}


?>