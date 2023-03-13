<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>

	<h3 class="text-center mt-5">User List</h3>
	<table class="table table-bordered">

		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Profile Picture</th>
		</tr>
		<?php
		$f = fopen('./users.csv', 'r');

		while (($data = fgetcsv($f)) !== false) { ?>
			<tr>
				<td><?php echo $data[0] ?></td>
				<td><?php echo $data[1] ?></td>
				<?php echo '<td><img height="100" width="100" src="uploads/' . $data[2] . '"></td>' ?>;
			</tr>
		<?php } ?>
		<p><a class="btn btn-info" href="./user_form.php">Go Back</a>.</p>
	</table>


</body>

</html>