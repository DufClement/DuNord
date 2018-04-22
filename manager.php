<?php
require_once 'connexion.php';


function getAuthentification($login,$pass){
  global $pdo;
  $query = "SELECT * FROM user where nom=:login and mdp=:pass";
  $prep = $pdo->prepare($query);
  $prep->bindValue(':login', $login);
  $prep->bindValue(':pass', $pass);
  $prep->execute()
  ;
  // on vérifie que la requête ne retourne qu'une seule ligne
  if($prep->rowCount() == 1){
    $result = $prep->fetch(PDO::FETCH_ASSOC); 
    
    return $result;

  }
  else
    return false;
}

function add($adder){
 // var_dump($adder);
 global $pdo;

 
 $req = ( "INSERT INTO incidents (id_service,id_materiel,id_statut,date_auj,description) 
  values(:id_service,:id_materiel,:id_statut,:date_auj,:description)");


 $add=$pdo->prepare($req);

 $add->bindValue(':id_service',$adder['service']);
 $add->bindValue(':id_materiel',$adder['materiel']);
 $add->bindValue(':id_statut',$adder['statut']);
 $add->bindValue(':date_auj',$adder['date']);
 $add->bindValue(':description',$adder['description']);


 if( $add->execute()){
  return true;
}


}
function getAllIncidents(){
  global $pdo;
  $requete = 'SELECT * ,  description 
  FROM incidents,service,status,materiel 
  WHERE incidents.id_statut=status.id_status and incidents.id_service=service.id_service and incidents.id_materiel=materiel.id_mat;
  '  ;
  $prep = $pdo->prepare($requete);
  $prep->execute();
  return $prep->fetchAll();
}
function getAllMateriel(){
  global $pdo;
  $requete = 'SELECT *  FROM materiel ' ;
  $prep = $pdo->prepare($requete);
  $prep->execute();
  return $prep->fetchAll();
}
function getDetailMateriel(){
  global $pdo;
  $requete = 'SELECT  *  FROM materiel,incidents,status  
  WHERE incidents.id_materiel=materiel.id_mat AND incidents.id_statut=status.id_status';
  $prep = $pdo->prepare($requete);
  $prep->execute();
  return $prep->fetchAll();
}


function getAllPersonne(){
  global $pdo;
  $requete = 'SELECT *  FROM user ' ;
  $prep = $pdo->prepare($requete);
  $prep->execute();
  return $prep->fetchAll();
}

function updateStatut($id,$idStatut){
  global $pdo;
 // var_dump($up);

  

  $update = 'UPDATE incidents SET id_Statut = :idStatut WHERE id_Incident = :id';
  $prepare=$pdo->prepare($update);
  $prepare->bindValue(':id',$id);
  $prepare->bindValue(':idStatut',$idStatut);
  $prepare->execute();

  return true;

}

function deleteIncident($id){
  global $pdo;
  $delete = 'DELETE  FROM incidents where id_Incident = :id';
  $prepare=$pdo->prepare($delete);
  $prepare->bindValue(':id', $id);
  $prepare->execute();
  return true;
}
function addMateriel($adder){
  var_dump($adder);
  global $pdo;
  $req = ( "INSERT INTO materiel (nom_mat) 
    values(:nom_mat)");   
  $add=$pdo->prepare($req);
  $add->bindValue(':nom_mat',$adder);
  if( $add->execute()){
    return true;
  }
}
function addPersonne($adder){
  global $pdo;
  $req = ( "INSERT INTO user (utilisateur,nom,mdp) 
    values(:utilisateur,:nom,:mdp)");   
  $add=$pdo->prepare($req);
  $add->bindValue(':nom',$adder['nom']);
  $add->bindValue(':utilisateur',$adder['niveau']);
 $add->bindValue(':mdp',strval($adder['password']));

  if( $add->execute()){
    return true;
  }
}
  function getService($id){
    global $pdo;
    $req = 'SELECT COUNT(id_service)  as val FROM incidents WHERE id_service = :id';
    $prep = $pdo->prepare($req);
    $prep->bindValue(':id',$id);
    $prep->execute();
    return $prep->fetch()->val;

  }

    function getStatus($id){
    global $pdo;
    $req = 'SELECT COUNT(id_statut)  as val FROM incidents WHERE id_statut = :id';
    $prep = $pdo->prepare($req);
    $prep->bindValue(':id',$id);
    $prep->execute();
    return $prep->fetch()->val;

  }
  
?>