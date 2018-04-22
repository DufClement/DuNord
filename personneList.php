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
  
  
  
  <th>ID</th>
  <th>NIVEAU</th>
  <th>NOM</th>

  
   

  <tr >
  	<?php
  	 $personnes = getAllPersonne();
  	 foreach ($personnes as $personne ) :?>

      

<td ><?php echo $personne->id; ?></</td>
<td ><?php echo $personne->utilisateur; ?></</td>
<td ><?php echo $personne->nom; ?></</td>







 

</tr>



      
      <?php   endforeach ?>
           


  </table> 


			</div>
		</div>
	</div>
</body>
</html>
<?php require_once 'footer.php'; ?>