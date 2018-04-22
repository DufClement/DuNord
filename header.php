<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
   

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon"   href="../image/fav.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Gestion des risques</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link rel="stylesheet" type="text/css" href="js/jquery-ui.min.css">
    <require 


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php 
require_once 'manager.php';


?>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">LeNord</a>
    </div>
    <ul class="nav navbar-nav">

      <li><a href="index.php">Accueil</a></li>
      <li><a href="stats.php">Statistiques</a></li>

      

     <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Liste
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
         <li><a href="incidents.php">Incidents</a></li>
          <li><a href="materielList.php">Materiel</a></li>
          <li><a href="personneList.php">Personne</a></li>
          
        </ul>
      </li>
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ajout
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="materiel.php">Matériel</a></li>
          
          <li><a href="incidentAdd.php">Incident</a></li>
        </ul>
      </li>


     

      
      <?php 

     
      if(isset($_SESSION['login'])){
        echo '<li><a href="signout.php">Déconnexion</a></li>';
      }
      else{
        echo '<li><a href="sign.php">Connexion</a></li>';
        echo '<li><a href="personne.php">Inscription</a></li>';

      }
      
      
      ?>
    
      
           
    </ul>
  </div>
</nav>
  </body>
  </html>