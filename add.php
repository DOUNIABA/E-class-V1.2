<?php include 'server.php' ;
if (isset($_POST['submit'])){

    if (empty($_POST['image']) || empty($_POST['name']) || empty($_POST['mail']) || 
    empty($_POST['phone']) || empty($_POST['email_number']) || empty($_POST['date_admission']))
	{
		echo "ERREUR : tous les champs n'ont pas ete renseignés.";
	}

    $img=$_POST['image'];
    $nom=$_POST['name'];
    $email=$_POST['mail'];
    $phone=$_POST['phone'];
    $email_number=$_POST['email_number'];
    $date_admisssion=$_POST['date_admission'];
    
    $sql=" INSERT INTO student (img , nom , email , phone , email_number , date_admission) VALUES
    ('$img' , '$nom', '$email' , '$phone' , '$email_number' , '$date_admission')";
    $result=mysqli_query($conn,$sql);

    echo($sql);
    
    if($result){
       
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
      
      <section class="col-sm-3 col-lg-6 col-md-4 rounded " style="margin-left:15%;" >

    
    <form method="Post" action="">

        <div class="container" justify-content-center>
            <label for="formFile" class="form-label">image</label>
            <input class="form-control" type="file" placeholder="" name="image">
        </div>

        <div class="container">
            <label for="exampleInputPassword1" class="form-label">name</label>
            <input class="form-control" type="text" placeholder="enter your name" name="name">
        </div>

        <div class="container">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input class="form-control" type="email" placeholder="enter your email" name="mail">
        </div>

        <div class="container" >
            <label for="exampleInputPassword1" class="form-label">phone</label>
            <input class="form-control" type="tel" placeholder="enter your phone" name="phone" style="witdh: 30px;">
        </div>

        
        <div class="container">
            <label for="exampleInputPassword1" class="form-label">email_number</label>
            <input class="form-control" type="tel" placeholder="" name="email_number">
        </div>

        
        <div class="container">
            <label for="exampleInputPassword1" class="form-label">date_admission</label>
            <input class="form-control" type="date" placeholder="enter your date" name="date_admission">
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