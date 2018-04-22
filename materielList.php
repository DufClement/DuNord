<?php 
session_start ();
require_once 'manager.php'; 

require_once 'header.php';
//var_dump(getAllIncidents()) 

if(!isset($_SESSION['login']) && !isset($_SESSION['id'])){
  header("location:sign.php");
}

    ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
        
				<table class="table">
  
  
  
  <th>MATERIEL</th>
  <th>DESCRIPTION</th>
  <th>STATUT</th>

  
   

  <tr >
  	<?php
  	 $materiaux = getAllMateriel();
     $incidents = getDetailMateriel();
  	 foreach ($materiaux as $materiel ) :?>

      


<td ><?php echo $materiel->nom_mat; ?></</td>
<?php foreach ($incidents as $incident )
  if($incident->nom_mat ==$materiel->nom_mat && $incident->id_mat == $materiel->id_mat){
  echo "<td>" .  $incident->description . "</td>";
  echo "<td>" .  $incident->nom_status . "</td>";

} 

?>



 

</tr>



      
      <?php   endforeach ?>
           


  </table> 


			</div>
		</div>
	</div>
</body>
</html>
<?php require_once 'footer.php'; ?>