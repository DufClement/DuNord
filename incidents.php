<?php 
session_start ();
require_once 'manager.php'; 

require_once 'header.php';
//var_dump(getAllIncidents()) 

if(!isset($_SESSION['login']) && !isset($_SESSION['id'])){
  header("location:sign.php");
}
if(isset($_GET['id']) && isset($_GET['idStatut']) && isset($_GET['update']) && !empty($_GET['update'])){
  if(updateStatut($_GET['id'], $_GET['idStatut'])){
   echo " <script type='text/javascript'> alert ('update  successfully ');
    window.location.href='incidents.php';</script>";
  }
}

if(isset($_GET['id']) && isset($_GET['idStatut']) && isset($_GET['delete']) && !empty($_GET['delete'])){
  if(deleteIncident($_GET['id'])){
    echo " <script type='text/javascript'> alert ('delete  successfully ');
    window.location.href='incidents.php';</script>";
  
  }
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
  
  
  <th> SERVICE</th>
  <th>MATERIEL</th>
  
   <th>DESCRIPTION</th>
   <th >STATUT</th>
   <?php if($_SESSION['statut'] == "Admin"){
   echo '<th> Update </th>';
   echo '<th> Delete </th>';

}
?>
  <tr >
  	<?php
  	 $lesIncidents = getAllIncidents();
  	 foreach ($lesIncidents as $incident ) :?>
      

<td ><?php echo $incident->nom_service; ?></</td>
<td ><?php echo $incident->nom_mat; ?></</td>
<td ><?php echo $incident->description; ?></</td>
<?php if($_SESSION['statut'] !=="Admin"){
 echo '<td >' .  $incident->nom_status;  '</td>';
}
else{

  echo '<form method="GET" action="">';
echo "<td >";
$statut = [ "Résolu" => "1" ,
          "Non traité" => "3" ,
           "En cours" => "5",
           "En panne" => "2" , 
          "Définitivement en panne"  => "4"];
  ?>
  
  <select name="idStatut">
    <option> <?php echo $incident->nom_status; ?> </option>
    <?php  foreach ($statut as $val => $id){
      if($val != $incident->nom_status){
        echo "<option value=". $id .">" . $val .  "</option>";

     }

      }
     

     ?>
     
  </select>

</td>

<input type="hidden" name="id" value="<?php echo $incident->id_incident; ?>">

<?php if ($_SESSION['statut'] == "Admin"){
  echo '<td> <input type="submit" value="✎" name="update" style="color:green;">  </input> </td>';

   
   echo  '<td> <input type="submit" value="✘" name="delete" style="color:red;">  </input> </td>';
   echo "</form>";
}
}
?>
  </tr>
 
      <?php endforeach ?>
  </table> 


			</div>
		</div>
	</div>
</body>
</html>
<?php require_once 'footer.php'; ?>