
<?php include 'server.php' ;

if (isset($_POST['submit'])){
    $matiere=$_POST['mat'];
    $duree=$_POST['dur'];
    $prof=$_POST['profs'];
    $prix=$_POST['price'];
    
    $sql=" insert into courses (matiere , duree , prof , prix ) VALUES 
    ('$matiere' , '$duree', '$prof' , '$prix')";
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
    <title>add</title>
</head>
<body>

 <div class="container mt-5">
    <form method="Post" action="">

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Matiére</label>
            <input class="form-control" type="text" placeholder="" name="mat">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">durée</label>
            <input class="form-control" type="text" placeholder="" name="dur">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">prof</label>
            <input class="form-control" type="text" placeholder="" name="profs">
        </div>

        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">prix</label>
            <input class="form-control" type="text" placeholder="" name="price">
        </div>

        <input type="hidden" value='test2' name='submit' >  
        <button type="submit" class="btn btn-primary" text-light><a href="courses.php"> Submit</button></a>
    </form>
</div>

</body>
</html>