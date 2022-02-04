
    <?php include 'server.php' ;

    $id=$_GET['updateid'];

    $sql="select * from courses where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $iddata=$row['id'];
    $matiere=$row['matiere'];
    $duree=$row['duree'];
    $prof=$row['prof'];
    $prix=$row['prix'];

if (isset($_POST['submit'])){
    $matiere=$_POST['mat'];
    $duree=$_POST['dur'];
    $prof=$_POST['prof'];
    $prix=$_POST['price'];

    $sql1 = "   UPDATE `courses` SET 
    `matiere`='$matiere',`duree`=' $duree',`prof`='$prof',
    `prix`='$prix' WHERE id=$id";

    $result=mysqli_query($conn,$sql1);
    
    if($result){

        header('location:courses.php');
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
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="side.css">
  <title>add</title>
</head>
<body>

 
<div class="container-fluid">
         <div  class="row">
              <div class="bg col-2 p-0" id="sidebardash">  
                <?php include("sidebar.php");  ?>
               </div>
            
                 <div class=" px-1 col-10">
                   <?php
                    include ("header.php");
                   ?>
  <form method="Post" action="updatecourse.php?updateid=<?php echo $id ?>">
 
        <div class="mb-3">
            <label for="formFile" class="form-label">Matiére</label>
            <input class="form-control" type="text" placeholder="" name="mat" value=<?php echo $matiere;?>>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Durée</label>
            <input class="form-control" type="text" placeholder="enter your name" name="dur"
            value=<?php
            echo $duree;?>>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prof</label>
            <input class="form-control" type="text" placeholder="" name="prof"
            value=<?php
            echo $prof;?>>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Prix</label>
            <input class="form-control" type="text" placeholder="" name="price"
            value=<?php
            echo $prix;?>>
        </div>


        <input type="hidden" value='test' name='submit' >  
        <button type="submit" class="btn btn-primary">update</a></button>
    </form>
</div>
</div>
</div>

</body>
</html>