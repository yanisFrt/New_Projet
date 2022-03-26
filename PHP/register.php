<?php

include 'config.php';

error_reporting(1);

session_start();

if (isset($_SESSION['email'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$nom_utilisateur = $_POST['nom_utilisateur'];
	$email = $_POST['email'];
	$mot_de_passe = md5($_POST['mot_de_passe']);
	$c_mot_de_passe = md5($_POST['c_mot_de_passe']);

	if ($mot_de_passe == $c_mot_de_passe) {
		$sql = "SELECT * FROM user_v WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user_v (nom_utilisateur, email, mot_de_passe)
					VALUES ('$nom_utilisateur', '$email', '$mot_de_passe')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('INSCRIPTION REUSSIE.')</script>";
				$nom_utilisateur = "";
				$email = "";
				$_POST['mot_de_passe'] = "";
				$_POST['c_mot_de_passe'] = "";
				header("Location: formulaire.php");

			} else {
				echo "<script>alert('UNE ERREUR S'EST PRODUITE.')</script>";

			}
		} else {
			echo "<script>alert('EMAIL DEJA EXISTANT.')</script>";
		}

	} else {
		echo "<script>alert('MOT DE PASSE INCORRECT.')</script>";
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
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Inscription </p>
			<div class="input-group">
			<h3> Nom utilisateur :</h3>
				<input type="text" placeholder="Nom utilisateur" name="nom_utilisateur" value="<?php echo $nom_utilisateur; ?>" required>
			</div>
			<div class="input-group">
			<h3> Email:</h3>
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
			<h3> Mot de passe:</h3>
				<input type="password" placeholder="Mot de passe" name="mot_de_passe" value="<?php echo $_POST['mot_de_passe']; ?>" required>
            </div>
            <div class="input-group">
			<h3> Confirmer mot de passe:</h3>
				<input type="password" placeholder="Confirmer mot de passe" name="c_mot_de_passe" value="<?php echo $_POST['c_mot_de_passe']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">S'inscrire</button>
			</div>
			<p class="login-register-text">Avez-vous un compte? <a href="login.php">Connectez-vous!</a></p>
		</form>
	</div>
</body>
</html>
