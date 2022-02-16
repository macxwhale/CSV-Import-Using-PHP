<!DOCTYPE html>
<?php 
	include 'db.php';
	


?>	
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Import Excel To MySQL Database Using PHP </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">


	</head>
	<body>    

	<!-- Navbar
    ================================================== -->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Import Excel To MySQL Database Using PHP</a>
				
			</div>
		</div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="import.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Import CSV/Excel file</legend>
						<div class="control-group">
							<div class="control-label">
								<label>CSV/Excel File:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
		

		<table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>ID</th>
				  		<th>FirstName</th>
				  		<th>LastName</th>
				  		<th>Email</th>
				  		<th>Password</th>
				  		<th>MobileNumber</th>
				  		<th>CompanyID</th>
				  		<th>PayrollNo</th>
				  		<th>CompanyDepartmentID</th>
				  		<th>DesignationID</th>
				  		<th>SupervisorID</th>
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM sys_users ";
				$result_set =  mysqli_query($conn, $SQLSELECT);
				while($row = mysqli_fetch_array($result_set))
				{
				?>
			
					<tr>
						<td><?php echo $row['ID']; ?></td>
						<td><?php echo $row['FirstName']; ?></td>
						<td><?php echo $row['LastName']; ?></td>
						<td><?php echo $row['Email']; ?></td>
						<td><?php echo $row['Password']; ?></td>
						<td><?php echo $row['MobileNumber']; ?></td>
						<td><?php echo $row['CompanyID']; ?></td>
						<td><?php echo $row['PayrollNo']; ?></td>
						<td><?php echo $row['CompanyDepartmentID']; ?></td>
						<td><?php echo $row['DesignationID']; ?></td>
						<td><?php echo $row['SupervisorID']; ?></td>
					

					</tr>
				<?php
				}
			?>
		</table>
	</div>

	</div>

	</body>
</html>