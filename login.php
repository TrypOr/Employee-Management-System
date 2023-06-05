
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>h1, label {
    font-family: 'Roboto', sans-serif;
  }
  .container{
    display:flex;
     justify-content:center;
     align-items:center;
     height:100vh;
  }
  body {
    background-color: #f2f2f2;
  }
  form {
    background-color: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 5px;
    padding: 25px;
  }
  input[type="text"], input[type="date"], select, input[type="number"] {
    background-color: #f2f2f2;
    border: 1px solid #cccccc;
    border-radius: 5px;
    padding: 10px;
  }
  input[type="submit"] {
    background-color: #4caf50;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
  }
  input[type="submit"]:hover {
    background-color: #43a047;
  }
  input[type="password"]{
	background-color: #f2f2f2;
    border: 1px solid #cccccc;
    border-radius: 5px;
    padding: 10px;
  }
  form > * {
    margin-bottom: 20px;
  }
  label {
    display: block;
    margin-bottom: 5px;
  }  </style>
</head>
<body>
<div class="container">
<form method="post" action="login.php">
		<label for="username">Username</label>
		<input type="text" id="username" name="username" required>
		<br>
		<label for="password">Password</label>
		<input type="password" id="password" name="password" required>
		<br>
		<input type="submit" type="text" name="submit" value="Login">
	</form>
</div>
	
</body>
</html>

<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {
	// Get the form values
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	// Check if the username and password are correct
	if ($username == 'admin' && $password == 'admin') {
		// Redirect to the main page
		header('Location: main_page.html');
		exit;
	} else {
		// Display an error message
		echo '<p>Incorrect username or password. Please try again.</p>';
	}
}

?>