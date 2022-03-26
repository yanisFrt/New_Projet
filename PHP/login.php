<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['email'])) {
    header("Location: formulaire.php");
}

if (isset($_POST['submit'])) 
{
	$email = $_POST['email'];
	$password = md5($_POST['mot_de_passe']);

	// Check if the user is registered
	$sql = "SELECT * FROM user_v WHERE email='$email'";

	$result = mysqli_query($conn, $sql);

	if ($result->num_rows > 0) 
	{
		$row = mysqli_fetch_assoc($result);
    if($password == $row['mot_de_passe']
	){
      $_SESSION['email'] = $row['email'];
  		header("Location: formulaire.php");
  	} else {
  		echo "<script> alert('Email ou mot de passe Incorrect .') </script>";
  	}

  }

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../css/style c.css">

	<title>TaxiXpress</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Connexion </p>
			<div class="input-group">
				 <h3>Veuillez saisir votre email:</h3>
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
			<h3>Mot de passe:</h3>
				<input type="password" placeholder="mot de passe" name="mot_de_passe" value="<?php echo $_POST['mot_de_passe']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn"> Se connecter</button>
			</div>
			<p class="login-register-text">Vous n'avez pas de compte? <a href="register.php">Inscrivez vous ici!</a></p>
		</form>
	</div>
</body>
</html>
