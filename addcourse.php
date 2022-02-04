
<?php include 'server.php' ;

if (isset($_POST['submit'])){
    $matiere=$_POST['mat'];
    $duree=$_POST['dur'];
    $prof=$_POST['profs'];
    $prix=$_POST['price'];
    
    $sql=" INSERT INTO courses( `matiere`, `duree`, `prof`, `prix`) 
    VALUES ('$matiere','$duree','$prof','$prix')";
    
    $result=mysqli_query($conn,$sql);  

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="side.css">
    <title>add</title>
</head>
<body>

<div class="container-fluid">
         <div  class="row" style="justify: content 30px;">
              <div class="bg col-2 p-0" id="sidebardash">  
                <?php include("sidebar.php");  ?>
               </div>
            
                 <div class=" px-1 col-10">
                   <?php
                    include ("header.php");
                   ?>

<section class="col-sm-12 col-lg-8 col-md-6  " style="margin-left:15%;" >
    <form method="Post" action="" >

        <div class="container" >
            <label for="exampleInputPassword1" class="form-label" >Matiére</label>
            <input class="form-control" type="text" placeholder="" name="mat">
        </div>

        
        <div class="container" >
            <label for="exampleInputEmail1" class="form-label">durée</label>
            <input class="form-control" type="text" placeholder="" name="dur" >
        </div>

        
        <div class="container" >
            <label for="exampleInputPassword1" class="form-label">prof</label>
            <input class="form-control" type="text" placeholder="" name="profs" style="margin-gauche:20%;">
        </div>

        
        
        <div class="container" >
            <label for="exampleInputPassword1" class="form-label">prix</label>
            <input class="form-control" type="text" placeholder="" name="price">
        </div>

        <div class="container mt-5 text-align-center">
        <input type="hidden" value='test' name='submit' >  
        <button type="submit" class="btn btn-info">Submit</button>
         </div>
        
     </form>
</section>
</div>
</div>
</div>

</body>
</html>