<?php 
session_start();
require_once 'manager.php'; 
 
if(!$_SESSION['login'] && !$_SESSION['id']){
	header("location:sign.php");
}
if(isset($_GET['materiel']) && isset($_GET['submit']) && !empty($_GET['materiel'])){
	if(addMateriel($_GET['materiel'])){
		echo " <script type='text/javascript'> alert ('add  successfully ');
    window.location.href='materiel.php';</script>";
	}
}

?>
<?php require_once 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title> Ajout matériel </title>

</head>
<body>
	<div class="container"> 
		<div class="row"> 
			<div class="col">
				<h3>Formulaire d'ajout matériel </h3>
				
				<form action="" method="GET"> 
				Matériel :	<input type="text"  class="form-control" name="materiel" required=""></input>  
				<br>
					<button class="btn btn-lg btn-primary btn-block" type="submit" value="submit" name="submit">Valider</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>





<?php require_once 'footer.php'; ?>
