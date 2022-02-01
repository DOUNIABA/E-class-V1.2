
<?php include 'server.php' ;
$id=$_GET['updateid'];

$sql="select * from courses where id =$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
 $matiere=$row['matiere'];
 $duree=$row['duree'];
 $prof=$row['prof'];
 $prix=$row['prix'];
                                      

if (isset($_POST['submit'])){
    $matiere=$_POST['mat'];
    $duree=$_POST['dur'];
    $prof=$_POST['profs'];
    $prix=$_POST['price'];
   echo "fghj";
    $sql = " UPDATE courses SET matiere='$matiere' ,duree='$duree', 
    prof='$prof' ,prix='$prix' WHERE id=$id";

    $result=mysqli_query($conn,$sql);
    
    if($result){
        echo"data updated successfully";
    }
    else{
      die(mysqli_error($conn));
    }
}
$conn->close();         

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>add</title>
</head>
<body>
<div class="container mt-5">
    <form method="Post" action="">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Matiére</label>
            <input class="form-control" type="text" placeholder="enter your name" name="mat"
            value=<?php
            echo $matiere;?>>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">durée</label>
            <input class="form-control" type="text" placeholder="enter your email" name="dur"
            value=<?php
            echo $duree;?>>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">prof</label>
            <input class="form-control" type="text" placeholder="enter your phone" name="profs"
            value=<?php
            echo $prof;?>>
        </div>

        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">prix</label>
            <input class="form-control" type="text" placeholder="" name="price"
            value=<?php
            echo $prix;?>>
        </div>

        <input type="hidden" value='test2' name='submit' >  
        <button type="submit" class="btn btn-primary"><a href="courses.php"> update</button></a>
    </form>
</div>

</body>
</html>