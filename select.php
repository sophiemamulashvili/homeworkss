<?php 
	include 'db.php';
	$sql="SELECT * FROM `users`";
	$results=$conn->query($sql);
	$count=0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table,td,tr,th{
			border: 1px solid darkgoldenrod;
			border-collapse: collapse;
			padding: 20px;
			color: purple;
		}
	</style>
</head>
<body>
	<table >
		<tr>
			<th>#</th>
			<th>id</th>
			<th>name</th>
			<th>surname</th>
			<th>birthday</th>
			<th>regisered at</th>
			<th>action</th>

		</tr>
		<?php while ($row=$results->fetch_assoc()) : ?>
			<tr>
				<td><?php echo ++$count ?></td>
				<td><?php echo $row["id"] ?></td>
				<td><?php echo $row["name"] ?></td>
				<td><?php echo $row["surname"] ?></td>
				<td><?php echo $row["birthday"] ?></td>
				<td><?php echo $row["registered_at"] ?></td>

				<td>
					<form action="delete.php" method="POST">
						<input type="hidden" name="news" value="<?php echo $row['id'] ?>">
						<button>
							Delete
						</button>
					</form>
				</td>
			</tr>
		<?php endwhile; ?>
	</table>
</body>
</html>