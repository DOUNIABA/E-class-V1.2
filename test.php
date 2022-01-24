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
  <title>dashboard</title>

</head>


<body >
    <div class="container-fluid">
         <div  class="row">
        <div class="bg col-3" id="sidebar">  
                
     <div class="sidebar px-2 dark-text fs-5 fw-bold border-start border-5 border-info" id="sidebar">   
              E-classe
    </div>
            <div class="list-group mx-5" style="align-items:center;">                  
                <img src="images/profile.jpg" alt="profile picture"
                    class=" profile img-fluid rounded-circle mx-auto d-block my-2 p-1 ">
                <div class="user text-center ">
                    <h6 > Admin name </h6>
                    <span class=" fs-6 text-info fw-bold" >Admin</span>              
                </div>
                </a>
                <ul class="navbar-nav d-flex flex-column mt-5 mb-5">
                <li class="nav-item " style="justify-content: space-between;">
                    <a href="dashboard.php" class="nav-link text-bold pl-4 text-dark">
                        <img src="images/ic-house.svg" alt="" class="card-image ">
                        Home</a>
                </li>
                    <li class="nav-item w-100" style="justify-content: space-between;">
                        <a href="#" class="nav-link text-light pl-4 text-dark">
                            <img src="images/ic-course.svg" alt="" class="card-image ">
                            Course
                        </a>
                    </li>
                    <li class="nav-item w-100 " style="justify-content: space-between;">
                            <a href="students.php" class="nav-link text-light pl-4 text-dark">
                            <img src="images/ic-students.svg" alt="" class="card-image" style="width: 20PX;">
                            Students
                            </a>
                    </li>
                    <li class="nav-item w-100" style="justify-content: space-between;">
                    <a href="payement.php" class="nav-link text-light pl-4 text-dark">
                        <img src="images/ic_payment.svg" alt="" class="card-image" style="width: 20PX;" >
                            Payment
                        </a>
                    </li>
                    <li class="nav-item w-100 " style="justify-content: space-between;">
                        <a href="#" class="nav-link text-light pl-4 text-dark">
                            <img src="images/ic-report.svg" class="card-image">
                        Report
                        </a>
                    </li>
                    <li class="nav-item w-100  pl-5">
                        <a href="#" class="nav-link text-light pl-4 text-dark">
                            <img src="images/ic-settings.svg" class="card-image">Settings
                        </a>
                    </li>
                </ul>
                <a href="#" class="nav-link text-light pl-4 text-dark mt-5 fw-bolder">
                            Logout  <i class="fas fa-sign-out-alt"></i>  </a>
            </div>
        </div>
    
            
               <div class=" px-1 col-9 bg-success">
                
                   
                   

<nav class="navbar navbar-expand-lg navbar-light ">
<div class="d-flex align-items-center">
    <button class="btn my-4"  id="menu-btn"> <img src="images/ic-arrow.svg" >
      </button>               
</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
            <div class="navbar-nav ms-auto">
                <div class="nav-item dropdown">
                    <form class="d-flex  justify-content-end mt-3 ">
                        <input class="form-control me-2 " type="search" placeholder="Search..."
                            aria-label="Search">
                            <i class="fas fa-bell mt-2 ml-2 px-4" style="font-size:28px;color:#C4C4C4;"></i>
                    </form>
                </div>
            </div>
    </div>

</nav>
                    
            
               <div class="row g-4 my-0 ">
                    <div class="col-md-6 col-sm-12 col-lg-3  col-xl ">
                        <div class="col shadow-sm d-flex justify-content-around align-items-center card_student " style="height: 100%; width: 100%;">
                            <div>
                                <img src="images/ic-big-students.svg" alt="" class="card-image" style="width: 20PX;">
                                <p class="fs-5 mb-5 Secondary-text">Students</p>
                            </div>
                        <h3 class="fs-2 mt-5">243</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-lg-3 ">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center card_cours ">
                            <div>
                                <img src="images/ic-big-course.svg" alt="" class="card-image" style="width: 20PX;">
                            
                                <p class="fs-5 mb-5 Secondary-text">Course</p>
                            </div>
                            <h3 class="fs-2 mt-5">13</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-lg-3 ">
                        <div class="p-3  shadow-sm d-flex justify-content-around align-items-center card_payment ">
                            <div>
                                <img src="images/ic-big-payments.svg" alt="" class="card-image" style="width: 20PX;">                               
                                <p class="fs-5 mb-5 Secondary-text">Payments</p>
                            </div>
                            <h3 class="fs-2 mt-5">DH556,000</h3>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-12 col-lg-3 ">
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
         </div>
     </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="js/main.js"></script>


    <script>
      var el = document.getElementById("sidabar");
      var toggleButton = document.getElementById("menu-btn");

      toggleButton.onclick = function () {
          el.classList.toggle("toggled");
      };
  </script>
  
        
</body> 
</html>