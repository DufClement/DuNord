<?php 
session_start();
require_once 'manager.php'; 
 
if (isset($_GET['statut'])) {
	if(add($_GET)){
		echo " <script type='text/javascript'> alert ('add  successfully ');
		window.location.href='incidents.php';</script>";
	}
}
if(!$_SESSION['login'] && !$_SESSION['id']){
	header("location:sign.php");
	
}
$mat =  getDetailMateriel() ;



?>
<?php require_once 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>

</head>
<body>
	<div class="container"> 
		<div class="row"> 
			<div class="col">
				<h3>Formulaire d'incident </h3>
				
				<form action="" method="GET"> 
					MATERIEL : 
					<select id="materiel" class="form-control" name="materiel">
						<?php $materiaux =  getAllMateriel() ;
					
						 foreach ($materiaux as $materiel )  :?>

						<option value=<?php   echo $materiel->id_mat; ?> ><?php echo $materiel->nom_mat;   ?></option>
						
						
			 <?php endforeach ?>
					</select>  <br>
					SERVICE :
					<select id="service" class="form-control" name="service">
						<option value="1" >Service administratif</option>
						<option value="2">Service commercial</option>
						<option value="3">Service production</option>
					</select>  <br>
					<input type="hidden" name="statut" value="2">
					
					
					DESCRIPTION : <textarea name="description"  rows="3" style="resize: none;" class="form-control" required> </textarea>

					<br>
					<input type="hidden" name="date" value="<?php echo date("Y-m-d");  ?>">
					<button class="btn btn-lg btn-primary btn-block" type="submit" value="submit" name="submit">Valider</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>





<?php require_once 'footer.php'; ?>
