<?php
  
  @$note1 = $_POST["note1"];
  @$note2 = $_POST["note2"];
  @$note3 = $_POST["note3"];
  @$note4 = $_POST["note4"];
  @$note5 = $_POST["note5"];
  @$valider = $_POST["valider"];
  @$annuler = $_POST["annuler"];
  $results = array("Faild" , "Acceptable", "Good" , " Very good", "Exellent");

  if (isset($annuler)) {
  	header("location: form.php");
  }

 ?>


<!DOCTYPE html>
<html>
	<head>
		<title>ANOUAR_FORM -- AVERAGE</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>



	<body>
		<div class="loginbox">
			
		
		 <form  method="POST">
			<p>Data Science</p>
			<input type="number" step="0.01" class="username" id="username1" name="note1" placeholder="Enter mark" max="20" min="0" value="<?php echo $note1 ?>" >
			<p>Big Data</p>
			<input type="number" step="0.01" class="username" id="username2" name="note2" placeholder="Enter mark"  max="20" min="0" value="<?php echo $note2 ?>" >
			<p>UML</p>
			<input type="number" step="0.01" class="username" id="username3" name="note3" placeholder="Enter mark"  max="20" min="0" value="<?php echo $note3 ?>" >
			<p>PHP</p>
			<input type="number" step="0.01" class="username" id="username4" name="note4" placeholder="Enter mark"  max="20" min="0" value="<?php echo $note4 ?>">
			<p>C++</p>
			<input type="number" step="0.01" class="username" id="username5" name="note5" placeholder="Enter mark"  max="20" min="0" value="<?php echo $note5 ?>">
			
			<input type="submit" id="submit" name="valider" value="Calculate">
			<input type="submit" id="submit" name="annuler" value="Cancel">

			</form>

		</div>

		<?php if (isset($valider)){  
 		  if( empty($note5) or empty($note4) or empty($note3) or empty($note2) or empty($note1) ){  ?>

            <div id= "error"> <h1>Please enter all the marks before calculating your grade <br>!!!!</h1> !</div>

            <?php }  else{

		  $moy = ($note5 + $note4 + $note3 + $note2 + $note1 ) / 5;
          if($moy < 10)
          	$result = $results[0];
          elseif ($moy < 12) 
          	$result = $results[1];
          elseif ($moy < 14) 
          	$result = $results[2];
          elseif ($moy < 16) 
          	$result = $results[3];
          else
          	$result = $results[4];
		  ?>

		<div id = "moy">
			<h1> Your grade is  </h1>
			<p> <?php echo $moy?> </p>
			<hr style="color: white">
			<h1> Your result is  </h1>
			<p> <?php echo $result ?></p>
		 </div>

		<?php } } ?>
	</body>
</html>