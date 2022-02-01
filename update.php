
<?php include 'server.php' ;
$id=$_GET['updateid'];

$sql="select * from students where id =$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$img=$row['img'];
$nom=$row['nom'];
$email=$row['email'];
$phone=$row['phone'];
$email_number=$row['email_number'];
$date_admission=$row['date_admission'];

if (isset($_POST['submit'])){
    $img=$_POST['image'];
    $nom=$_POST['name'];
    $email=$_POST['mail'];
    $phone=$_POST['phone'];
    $email_number=$_POST['email_number'];
    $date_admission=$_POST['date_admission'];

    $sql = " UPDATE students SET img='$img' ,nom='$nom', email='$email' ,phone='$phone' , 
    email_number='$email_number',
    date_admission='$date_admission' WHERE id=$id";

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
    <form method="Post" action="students.php" >

        <div class="mb-3">
            <label for="formFile" class="form-label">image</label>
            <input class="form-control" type="file" placeholder="" name="image" value=<?php
            echo $img;?>>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">name</label>
            <input class="form-control" type="text" placeholder="enter your name" name="name"
            value=<?php
            echo $nom;?>>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input class="form-control" type="email" placeholder="enter your email" name="mail"
            value=<?php
            echo $email;?>>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">phone</label>
            <input class="form-control" type="mmobile" placeholder="enter your phone" name="phone"
            value=<?php
            echo $phone;?>>
        </div>

        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">email_number</label>
            <input class="form-control" type="mobile" placeholder="" name="email_number"
            value=<?php
            echo $email_number;?>>
        </div>

        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">date_admission</label>
            <input class="form-control" type="date" placeholder="enter your date" name="date_admission"
            value=<?php
            echo $date_admission;?>>
        </div>

        <input type="hidden" value='test' name='submit' >  
        <button type="submit" class="btn btn-primary">update</a></button>
    </form>
</div>

</body>
</html>