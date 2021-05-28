<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Halaman utama</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<div class="limiter">
	<div class="container-table100">
		<div class="wrap-table100">
			<div class="table">
				<a href="add.html">Input Data</a><br/><br/>
				<div class="row header">
					<div class="cell" type="text" name="program_pendidikan">
						Program Pendidikan
					</div>
					<div class="cell" type="text" name="nama_lengkap">
						Nama Lengkap
					</div>
					<div class="cell" type="text" name="email">
						Email
					</div>
					<div class="cell" type="submit" name="Submit" value="Add">
						Update
					</div>
				</div>

				<?php 
					//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
					while($res = mysqli_fetch_array($result)) { 
						echo 
						"<div class='row'>
							<div class='cell' data-title='Program Pendidikan'>".
							$res['program_pendidikan']."
							</div>
							<div class='cell' data-title='Nama Lengkap'>".
							$res['nama_lengkap']."
							</div>
							<div class='cell' data-title='Email'>".
							$res['email']."
							</div>
							<div class='cell' data-title='Update'>
							<a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
							</div>
						</div>";

					//echo "<tr>";
					//echo "<td>".$res['name']."</td>";
					//echo "<td>".$res['age']."</td>";
					//echo "<td>".$res['email']."</td>";	
					//echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";			
					}
					
				?>
			</div>
		</div>
	</div>
</div>
	
	</table>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
