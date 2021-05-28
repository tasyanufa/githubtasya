<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$program_pendidikan = mysqli_real_escape_string($mysqli, $_POST['program_pendidikan']);
	$nama_lengkap = mysqli_real_escape_string($mysqli, $_POST['nama_lengkap']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// checking empty fields
	if(empty($program_pendidikan) || empty($nama_lengkap) || empty($email)) {	
			
		if(empty($program_pendidikan)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($nama_lengkap)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE mahasiswa SET program_pendidikan='$program_pendidikan',nama_lengkap='$nama_lengkap',email='$email' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$program_pendidikan = $res['program_pendidikan'];
	$nama_lengkap = $res['nama_lengkap'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
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
				<a href="index.php">Home</a>
				<br/><br/>
					
				<form name="form1" method="post" action="edit.php">
					<table border="0">
						<tr> 
							<td>Program Pendidikan</td>
							<td><input type="text" name="program_pendidikan" value="<?php echo $program_pendidikan;?>"></td>
						</tr>
						<tr> 
							<td>Nama Lengkap</td>
							<td><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap;?>"></td>
						</tr>
						<tr> 
							<td>Email</td>
							<td><input type="text" name="email" value="<?php echo $email;?>"></td>
						</tr>
						<tr>
							<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
							<td><input type="submit" name="update" value="Update"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
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
