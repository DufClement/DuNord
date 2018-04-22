<?php 
session_start();
require_once 'manager.php'; 

 if (isset($_SESSION['login']) && isset($_SESSION['id'])) {
 	header("location :index.php");
 }

if(isset($_GET['niveau']) && isset($_GET['password']) && !empty($_GET['password'])){
	if(addPersonne($_GET) ){
		echo " <script type='text/javascript'> alert ('add  successfully ');
    window.location.href='materiel.php';</script>";
	}
}

?>
<?php require_once 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title> Ajout personne </title>

</head>
<body>
	<div class="container"> 
		<div class="row"> 
			<div class="col">
				<h3>Inscription </h3>
				
				<form action="" method="GET"> 
				<input type="hidden" name="niveau" value="User">
					Nom : <input type="text"  class="form-control" name="nom" required=""></input>  
					password : <input type="password"  class="form-control" name="password" required=""></input> 
				<br>
					<button class="btn btn-lg btn-primary btn-block" type="submit" value="submit" name="submit">Valider</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>





<?php require_once 'footer.php'; ?>
