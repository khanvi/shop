<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php
	$connect = mysqli_connect('127.0.0.1','root','','store');
	$query = mysqli_query($connect,'SELECT * FROM products');
	?>
<div class="container">
	<div class="row bg-dark">
		<h4>
			Online Store
		</h4>
	</div>
		<?php
			for($i=0;$i<$query->num_rows;$i++){ $result = $query->fetch_assoc();
		?>
	<div class="row">
		<div class="col-5">
			<?php
				echo '<img src="'. $result['img'] . '" class="w-100">';
			?>
		</div>
		<div class="col-7">
			<h4>
				<?php
					echo $result['name'];
				?>
			</h4>
			<p>
				Категория: 
				<?php
					echo $result['category'];
				?>
			</p>
			<select class="custom-select">
				<option>
					<?php
						echo $result['size'];
					?>
				</option>
			</select>
			<p>
				Цена: 
				<?php
					echo $result['price'] . 'руб.';
				?>
			</p>
			<button type="button" class="btn btn-secondary">
				В корзину
			</button>
		</div>
	</div>
	<?php } ?>
</div>
</body>
</html>