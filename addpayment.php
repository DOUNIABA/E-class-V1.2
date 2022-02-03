
  <?php include 'server.php' ;

if (isset($_POST['submit'])){
    $name=$_POST['nom'];
    $payment_schedule=$_POST['ordre'];
    $bill_number=$_POST['num'];
    $amount_paid=$_POST['amount'];
    $balance_amount=$_POST['b_amount'];
    $date=$_POST['date'];

    $sql=" insert into payement (name , payment_schedule , bill_number , amount_paid , balance_amount , date) VALUES
    ('$name' , '$payment_schedule', '$bill_number' , '$amount_paid' , '$balance_amount' , '$date')";
    $result=mysqli_query($conn,$sql);
    
    if($result){
        echo"data inserted successfully";
        header('location:payement.php');
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
         <div  class="row">
              <div class="bg col-2 p-0" id="sidebardash">  
                <?php include("sidebar.php");  ?>
               </div>
            
                 <div class=" px-1 col-10">
                   <?php
                    include ("header.php");
                   ?>
    <form method="Post" action="">

        <div class="mb-3">
            <label for="formFile" class="form-label">Name</label>
            <input class="form-control" type="texte" placeholder="" name="nom">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Payment Schedule</label>
            <input class="form-control" type="text" placeholder="" name="ordre">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Bill Number</label>
            <input class="form-control" type="text" placeholder="" name="num">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Amount Number</label>
            <input class="form-control" type="text" placeholder="" name="amount">
        </div>

        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Balance amount</label>
            <input class="form-control" type="text" placeholder="" name="b_amount">
        </div>

        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Date</label>
            <input class="form-control" type="date" placeholder="" name="date">
        </div>

        <input type="hidden" value='test' name='submit' >  
        <button type="submit" class="btn btn-info">Submit</button>    </form>
        </div>
        </div>

        </div>


</body>
</html>