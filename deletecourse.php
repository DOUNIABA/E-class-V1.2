

    <?php include 'server.php' ;

    <button onclick="confirmer()">Supprimer</button>

    function confirmer(){
        var res = confirm("Êtes-vous sûr de vouloir supprimer?");
        if(res){
    
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from courses where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result) {
        header('location:courses.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
}
}


?>