<?php 

	session_start();

    
require_once 'manager.php'; 
?>
<?php
 require_once 'header.php'; 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
</head>

<body>

<div class="banner">
<div class="topnav">
<div align="center">
<h1 style="color: grey;">Bienvenue</h1>
<br><br><br><br><br><br>
</div>
</div>


<div class="boxp">
<div class="title">

<h2 style="color: #fff;"> Menu </h2>
</div>
<div class="boxphoto">
<img src="">

<a  href="incidents.php" >
<h3>Incidents</h3>
 <p>Consulter</p>
</div>
<div class="boxphoto">
<img src="">
</a>
<a  href="personneList.php" >
<h3>Personnel</h3>
<p>Consulter</p>
</div>
<div class="boxphoto">
<img src="">
</a>

<a  href="materielList.php" >
<h3>Matériel</h3>
<p>Consulter</p>
</div>
</a>


</div>
<div class="box2p">
<div class="title">
</div>

<hr class="line">
</div>
<div class="last"> 
<div class="combo lalign"><p>©LeNord</p></div>


</div>


</body>
</html>
<?php require_once 'footer.php'; ?>