<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GFWD competition p2</title>

  <meta name="description" content="GFWD - competition p2"></meta>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body style="padding: 10px;">
        
    <?php

	$name = $_POST["name"];
	$email = $_POST["email"];
        $tickets = $_POST["tickets"];
        $age = $_POST["age"];
        $TandCs = $_POST["TandCs"];
        
        $dbhost="db558847060.db.1and1.com";
	$dbuser="dbo558847060";
	$dbpass="F1eming1";
	$dbname="db558847060";
        
        $time = time();
	$datestring = date("d/m/y, G:i:s", $time);
        
              
	$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	    if (mysqli_connect_errno()) {
		printf('ERROR: Connect failed: %s', mysqli_connect_error());
		exit();
	    }
	    else {
		$sql = 'INSERT INTO Davina (name, email, tickets, timestamp, age, TandCs) VALUES ("'.$name.'","'.$email.'","'.$tickets.'","'.$datestring.'","'.$age.'","'.$TandCs.'")';
		$result = mysqli_query ($mysqli, $sql);
		if (!$result) {
		    printf('ERROR: Could not insert record: %s', mysqli_error($mysqli));
		    mysqli_close($mysqli);
                    exit();
                }
	    }

    ?>

<div class="container">

<div class="row">
  
<img src="competition-thanks v3.jpg" class="img-responsive" alt="Davina image">

</div>
</div>

<body>
</body>
</html>