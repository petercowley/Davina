<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body style="padding: 10px;">
<div class="container">

<div class="row">
  
<img src="Davina competition v3.jpg" class="img-responsive" alt="Davina image">
  
<br>
  
<div id="ErrorText"><br><br></div>
  
<form name="Myform" role="form" action="Submit.php" onsubmit="return validateForm()" method="post">
  
  <div class="col-xs-4">
    <label for="name">Name:</label>
    <input type="name" name="name" class="form-control" id="name">
    <span class="help-block">Please let us know your name</span>
  </div>

  <div class="col-xs-4">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" id="email">
    <span class="help-block">Please fill in your email address</span>
  </div>
  
  <div class="col-xs-4">
    <label for="tickets">No. of tickets</label>
    <select name="tickets" class="form-control">
      <option>1</option>
      <option>2</option>
    </select>
    <span class="help-block">Please let us know how many tickets you would like (max. 2)</span>
  </div>
  
  <div class="col-xs-4">
    <label><input type="checkbox" name="18"> Are you 18 or over?</label>
    <span class="help-block">Please check the box if you are 18 or over</span>
  </div>

  <div class="col-xs-4">
    <label><input type="checkbox" name="TandCs"><a href="DFWD competition T&Cs.pdf" target="_blank"> Terms & Conditions</a></label>
    <span class="help-block">Please check the box if you agree to the T&Cs</span>
  </div>
    
  <div class="col-xs-4">
    <button type="submit" class="btn btn-default">Submit</button>
  </div>
    
</form>  

</div>

<br>

</div>

<script>
	function validateForm()
	{
		var x=document.forms["Myform"]["email"].value;
		var y=document.forms["Myform"]["name"].name;
                
		if (x==null || x=="" || y==null || y=="") {
			document.getElementById('ErrorText').innerHTML = '<b>Error</b>, please enter your name and email address to enter.<br><br>';
			return false;
		}
	return true;
	}
</script>

</body>
</html>