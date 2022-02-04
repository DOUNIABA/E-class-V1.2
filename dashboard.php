<?php include ('server.php') ?>
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

  <title>dashboard</title>

</head>

<body>
    <main>
    <div class="container-fluid" >
        
            <div  class="row">
              <div class="bg col-2 p-0" id="sidebardash">  
            

                <?php include("sidebar.php"); 
                 ?>
               </div>
            
               <div class=" px-1 col">
                  
                  <?php
                    include ("header.php");
                    ?>
            
               <div class="row g-4 my-0 ">
                    <div class="col-md-6 col-sm-12 col-lg-3">
                            <div class="p-3 shadow-sm d-flex justify-content-around align-items-center card_student  " style="height: 100%">
                            <div>
                                <img src="images/ic-big-students.svg" alt="" class="card-image" style="width: 50PX;">
                                <p class="fs-5 mb-5 Secondary-text">Students</p>

                               
                            </div>
                        <?php  $sql =mysqli_query($conn," SELECT id FROM students order by id") ;
                                 $row= mysqli_num_rows($sql);

                                echo '<h3 class="fs-5 mt-5 ">'.$row.'</h3>'
                            ?>
                        </div>

                        
                    </div>

                    <div class="col-md-6 col-sm-12 col-lg-3 ">
                        <div class="p-3 shadow-sm d-flex justify-content-around align-items-center card_cours " style="height: 100%;">
                            <div>
                                <img src="images/ic-big-course.svg" alt="" class="card-image" style="width: 50PX;">
                            
                                <p class="fs-5 mb-5 Secondary-text">Course</p>
                            </div>

                            <?php  $sql =mysqli_query($conn," SELECT id FROM courses order by id") ;
                                 $row= mysqli_num_rows($sql);

                                echo '<h3 class="fs-5 mt-5 ">'.$row.'</h3>'
                            ?>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-lg-3 ">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center card_payment " style="height: 100%;">
                            <div>
                                <img src="images/ic-big-payments.svg" alt="" class="card-image" style="width: 50PX;">                               
                                <p class="fs-5 mb-5 Secondary-text">Payments</p>
                            </div>
                            <?php  $sql =mysqli_query($conn," SELECT SUM(balance_amount) as sum FROM payement ") ;
                               while( $row= mysqli_fetch_assoc($sql)) {
                                echo '<h3 class="fs-5 mt-5 ">'.$row['sum'].'dh </h3>';
                               }


                            ?>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-12 col-lg-3 ">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center card_user " style="height: 100%;">
                            <div>
                                <img src="images/ic-big-users.svg" alt="" class="card-image" style="width: 50PX;">                              
                                <p class="fs-5 mb-5 text-white">Users</p>
                            </div>
                            <h3 class="fs-2 mt-5">3</h3>
                        </div>
                    </div>
                </div>
            </div>
         </div>
   
         
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="js/main.js"></script>


    <script>
      var el = document.getElementById("sidebar");
      var toggleButton = document.getElementById("menu-btn");

      toggleButton.onclick = function () {
          el.classList.toggle("toggled");
      };
  </script>
  
    </main>

</body> 
</html>