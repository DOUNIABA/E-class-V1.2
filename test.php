

<?php 
 
 session_start();

$timeout=60;

if(isset$_SEESION['$timeout']){

    $duree=time() - $_SEESION['$timeout'];

    if($duree>$timeout){

        session_destroy();
    }
}

?>

<?php 

$host="localhost";
$username="root";
$password="";
$db="e_classe";

$conn=mysqli_connect('$host','$username','$password','$db');

if($conn->connect_error){

    die("connexion failed")

}
    echo("connected successfully");


?>

<?php

if (isset($_POST['submit']) {

    if (empty($_POST['name']) || empty($_POST['prenom']) || empty($_POST['ville']) || empty($_POST['prenom'])) {
       
        echo "veuillez remplir tous les champs";
    }

    $nom=$_POST['name'];
    $prenom=$_POST['prenom'];
    $ville=$_POST['ville'];
    $numero=$_POST['num'];

    $sql="INSERT INTO personne (nom,prenom,ville,num) VALUES ($nom,$prenom,$ville,$numero)";

    $result=mysqli_query($conn,$sql);

    if ($result) {
   
     echo "bien inseré";
       
    }
    echo "insertion failed";

}
?>

<?php
if (isset($_GET['deletid'])) {
  
    $id=$_GET['deletid'];
    $sql="delet from students where id =$îd";
    $result=mysqli_query($conn,$result);
    if ($result) {
      
    }
   
}
?>