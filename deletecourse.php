

    <?php include 'server.php' ;

    
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


?>