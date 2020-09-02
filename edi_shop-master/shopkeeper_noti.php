<?php

include ("connect.php");

?>
<html>
<head>
	<title>
		Grocery app
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
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>

<body>

	<div>
		<nav>
			<section>
				<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#f75f00;">
					<a class="navbar-brand" href="shopkeeper_index.php">VIT SHOP </a>


					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#har" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="har">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="shop_profile.php">Profile</a></li>
							<li class="nav-item active"><a class="nav-link" href="shopkeeper_his.php">History</a></li>
							<li class="nav-item active"><a class="nav-link" href="shopkeeper_noti.php">Notifications</a></li>
							<li class="nav-item active"><a class="nav-link" href="#">Logout</a></li>
						</ul>
					</div>
				</nav>
			</section>
		</nav>
	</div>
	<div>
	<h4 style="text-align: center;">Notifications</h4>
	</div>
	<?php
		
		$query = 'SELECT * FROM `customer` ORDER BY `id` DESC LIMIT 1';
		$run = mysqli_query($conn,$query);
		$count = mysqli_num_rows($run);
		if (mysqli_num_rows($run)>0)
		{
			$data = mysqli_fetch_assoc($run);
		}
		?>
	<div class="list-group">
  <a href="shopkeeper_display.php" class="list-group-item list-group-item-action active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">customer 1</h5>
		<p class="mb-1"><?php echo $data['time'];?></p>
    </div>
    <p class="mb-1"><?php echo $data['text'];?></p>
    
  </a>
  
				

</div>


	
</body>

</html>
