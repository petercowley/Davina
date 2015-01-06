<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">
    
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <meta charset="utf-8"></meta>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"></meta>

  <title>Admin Screen - GFWD competition</title>

	<meta name="description" content="GFWD - administration application"></meta>
	<meta name="viewport" content="width=device-width"></meta>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#list-table tbody tr:even').css('background-color','#dddddd');
		});
	</script>	

</head>

<body>
	
<?php	
        $dbhost="db558847060.db.1and1.com";
	$dbuser="dbo558847060";
	$dbpass="F1eming1";
	$dbname="db558847060";
			
	$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (mysqli_connect_errno()) {
		printf('Connect failed: %s\n', mysqli_connect_error());
		exit();
	}
	else {
		
?>

<div id="container">
	
	
	<div id="title">
		GFWD Entrants
		<br><br>
	</div>
	
	<div>
		<table id='list-table'>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Time Stamp</th>
				<th>Age</th>
			</tr>		

<?php
		$sql = 'SELECT * FROM Davina';
		$result = mysqli_query ($mysqli, $sql);
		if ($result) {
			while ($newarray = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				$name = $newarray['name'];
				$email = $newarray['email'];
				$timestamp = $newarray['timestamp'];
				$age = $newarray['age'];
				echo "<tr><td>".$name."</td><td>".$email."</td><td>".$timestamp."</td><td>".$age."</tr>";
			}
		}
		else
			printf('Could not insert record: %s\n', mysqli_error($mysqli));
		mysqli_free_result($result);
		mysqli_close($mysqli);
	}

?>

		</table>
	</div>
</div>

</body>
</html>