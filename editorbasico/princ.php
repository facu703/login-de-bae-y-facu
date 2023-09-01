<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Basic MySQLi Commands</title>
</head>
<body>
	<div>
		<form method="POST" action="add.php">
			<label>Nombre:</label><input type="text" name="nombre">
			<label>Apellido:</label><input type="text" name="apellido">
			<label>Telefono:</label><input type="int" name="telefono">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Telefono</th>
				<th>Imagen</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['nombre']; ?></td>
							<td><?php echo $row['apellido']; ?></td>
							<td><?php echo $row['telefono']; ?></td>
							<td><?php echo $row['imagen']; ?></td>

							<img src="<?php echo $row['imagen']; ?>" alt="Imagen de usuario" width="100">
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>