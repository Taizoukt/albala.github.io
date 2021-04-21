<?php
  $form= "form.php";
  @$name = $_POST["nom"];
  @$password = $_POST["motPass"];
  @$valider = $_POST["valider"];
  @$annuler = $_POST["annuler"];
  $err = "";


  if (isset($annuler)) {
  	header("location: index.php");
  }

  if (isset($valider)){
  	if ($name == "anouar" and $password == 'e' ) {
  		header("location: form.php");
  	}

  	elseif ($name != "anouar") {
  		$err = "INVALID USERNAME";
  	}

  	else
  		$err = "INVALID PASSWORD";
  }

  ?>

<!DOCTYPE html>
<html>
	<head>
		<title>MY WEBSITE -- Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	

	<body>
		<div class="loginbox">
			
			<h1>Login</h1>
			<form method="POST" >
				<p>Username</p>
				<input type="text" id="username" name="nom" placeholder="Enter Username" required="" value="<?php echo $name ?>" >
				<p>Password</p>
				<input type="Password" id="password" name="motPass" placeholder="Enter Password" required=""  >
				<input type="submit" id="submit" name="valider" value="Login">
				<input type="submit" id="submit" name="annuler" value="Cancel">
                <?php if (!empty($err)) { ?>
				<div  id="err"> <?php echo $err; ?> </div>
			    <?php } ?>

			
			</form>
		</div>
	</body>
</html>

