<?php include ('server.php') ;

include 'session.php';

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
  <title>payment</title>

</head>
<body>

<?php
    
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
      header("location:payement.php");
        }
    else{
        die(mysqli_error($conn));
    }

    if (empty($_POST['image']) || empty($_POST['name']) || empty($_POST['mail']) || 
    empty($_POST['phone']) || empty($_POST['email_number']) || empty($_POST['date_admission']))
    {

      echo '<div class="alert alert-danger" role="alert">
      Veuillez remplir tous les champs!
      </div>';}
}

       

  ?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <h2>ADD PAYMENT</h2>
       <form method="Post" action="">

<div class="container">
    <label for="formFile" class="form-label">Name</label>
    <input class="form-control" type="texte" placeholder="" name="nom">
</div>

<div class="container">
    <label for="exampleInputPassword1" class="form-label">Payment Schedule</label>
    <input class="form-control" type="text" placeholder="" name="ordre">
</div>

<div class="container">
    <label for="exampleInputEmail1" class="form-label">Bill Number</label>
    <input class="form-control" type="text" placeholder="" name="num">
</div>

<div class="container">
    <label for="exampleInputPassword1" class="form-label">Amount Number</label>
    <input class="form-control" type="text" placeholder="" name="amount">
</div>


<div class="container">
    <label for="exampleInputPassword1" class="form-label">Balance amount</label>
    <input class="form-control" type="text" placeholder="" name="b_amount">
</div>


<div class="container">
    <label for="exampleInputPassword1" class="form-label">Date</label>
    <input class="form-control" type="date" placeholder="" name="date">
</div>

<div class="container mt-5 text-align-center">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

<input type="hidden" value='test' name='submit' >  
<button type="submit" class="btn btn-info">ADD</button>
 </div>
</div>

</div>


      </div>
     
    </div>
  </div>
</div>

    <main>
<div class="container-fluid">
         <div  class="row">
              <div class="bg col-2 p-0" id="sidebardash">  
                <?php include("sidebar.php");  ?>
               </div>
            
               <div class=" px-1 col-10">
                   <?php
                    include ("header.php");
                    ?>
            
            <div class="main-content row p-2 d-flex align-items-center">
                <div class="col-12 main-content-toolbar d-flex pb-2 justify-content-between align-items-center ">
                    <h1 class="h5 fw-bold text-black" style="margin-right:16%;">Payment Details</h1>
                    <div class="toolbar-left-part d-flex" style="margin-top: 15px;">
                                       <img src="images/ic-sort.svg" alt="sort">
                                         <button class="sort ic-sort btn btn-sort"></button>
                                         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        ADD NEW PAYMENT</button>                                          </div>
                       </div>

                       
                    <span class="border-bottom-3"></span>
                 </div>
                 <div class="row g-4 my-0">
            <div class=" table-responsive-sm table-responsive-md justify-content-end" style="width:70%,margin-left:10px;">
       
            <table class="table bg-white table table-striped table-hover">
               <thead>
                    <tr class="bg_table text-table">
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Payment Schedule</th>
                        <th class="th-sm">Bill Number</th>
                        <th class="th-sm">Amount paid</th>
                        <th class="th-sm">Balance amount</th>
                        <th class="th-sm">Date </th>
                        <th class="th-sm"> </th>
                </tr>
                </thead>
                    <?php  
                            $sql="select * from payement";
                            $result=mysqli_query($conn,$sql);
                                               
                           if($result){
                           while($row=mysqli_fetch_assoc($result)){
                           $id=$row['id'];
                           $name=$row['name'];
                           $payment_schedule=$row['payment_schedule'];
                           $bill_number=$row['bill_number'];
                           $amount_paid=$row['amount_paid'];
                           $balance_amount=$row['balance_amount'];
                           $date=$row['date'];
                                                                       
                              echo '<tr>
                                                  
                            <td>'.$name.'</td>
                            <td>'.$payment_schedule.'</td>                                          
                            <td>'.$bill_number.'</td>                           
                            <td>'.$amount_paid.'</td> 
                            <td>'.$balance_amount.'</td> 
                            <td>'.$date.'</td>   
                           <td><img src="images/ic-eye.svg"></td>                                                                                                 
                       </tr>';
                                           
                               }
                           }                 
                       ?>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script
                src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
</main>
</body>
</html>