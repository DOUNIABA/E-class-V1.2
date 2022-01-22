<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="dashboard.css">
  <title>dashboard</title>

</head>
<body>

    <?php
    include("sidebar.php");
    include ("header.php");
   
   ?>
          
    <div class="container-fluid px-4 py-5 col-10 Wwitdh-100%">

        <div class="row g-3 my-2">
                     <div class=" col-md-3 ">
                        <div class="col shadow-sm d-flex justify-content-around align-items-center card_student " style="height: 100%;">
                            <div>
                                <img src="images/ic-big-students.svg" alt="" class="card-image" style="width: 20PX;">
                                <p class="fs-5 mb-5 Secondary-text">Students</p>
                            </div>
                           <h3 class="fs-2 mt-5">243</h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3  shadow-sm d-flex justify-content-between  card_cours ">
                            <div>
                                <img src="images/ic-big-course.svg" alt="" class="card-image" style="width: 20PX;">
                               
                                <p class="fs-5 mb-5 Secondary-text">Course</p>
                            </div>
                            <h3 class="fs-2 mt-5">13</h3>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center card_payment ">
                            <div>
                                <img src="images/ic-big-payments.svg" alt="" class="card-image" style="width: 20PX;">                               
                                <p class="fs-5 mb-5 Secondary-text">Payments</p>
                            </div>
                            <h3 class="fs-2 mt-5">DH556,000</h3>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center card_user  " style="height: 100%;">
                            <div>
                                <img src="images/ic-big-users.svg" alt="" class="card-image" style="width: 20PX;">                              
                                <p class="fs-5 mb-5 text-white">Users</p>
                            </div>
                             <h3 class="fs-2 mt-5">3</h3>
                        </div>
                    </div>
              

        </div>
    </div>
    <!-- /#page-content-wrapper -->
  
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
         
</body>
</html>