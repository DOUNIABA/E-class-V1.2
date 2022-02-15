<h5 class="sidebar px-2 dark-text  border-start border-5 border-info" id="sidebar" style="font-size:90%;">   
              E-classe
</h5>

<div class="list-group d-flex flex-column align-items-center w-100">                  
    <img src="images/profile.jpg" alt="profile picture"
        class=" profile w-75 rounded-circle mx-auto d-block my-2 p-1  ">
      <div class="user text-center ">
        <h6> 

        <?php  
       
                                    echo $_SESSION["name"];
                            ?>  </h6>

       
        <span class=" fs-6 text-info fw-bold" > Admin </span>              
    </div>
     <ul class=" p-0 d-flex flex-column align-items-center mt-5 mb-5 mx-auto sidebar-nav w-30 fw-bold justify-content-center align-items-center">

    <li class="  w-100 " style="justify-content: space-between;">
            <a href="dashboard.php" class=" text-bold pl-4 text-dark  
            <?php if( basename($_SERVER['REQUEST_URI'])=="dashboard.php")
             {
                 echo"bg-info";}
                 else{echo"bg-transparent";};
            ?>">  
                <img src="images/ic-house.svg" alt="h" class="card-image ">
                <span class="d-none d-md-inline">Home</span>           
            </a>
        </li>

        <li class=" w-100 " style="justify-content: space-between;">
        <a href="courses.php" class=" text-light pl-4 text-dark  
                <?php if( basename($_SERVER['REQUEST_URI'])=="courses.php"){ echo "bg-info";}else{echo"bg-transparent";};
                ?>">  
                <img src="images/ic-course.svg" alt="c" class="card-image ">
                <span class="d-none d-md-inline"> Course</span>
            </a>
        </li>

        <li class=" w-100 " style="justify-content: space-between;">
                <a href="students.php" class=" text-light pl-4 text-dark  
                <?php if( basename($_SERVER['REQUEST_URI'])=="students.php"){ echo "bg-info";}else{echo"bg-transparent";};
                ?>"> 
                <img src="images/ic-students.svg" alt="s" class="card-image" >
                <span class="d-none d-md-inline"> Students</span>
                </a>
        </li>

        <li class=" w-100 " style="justify-content: space-between;">
            <a href="payement.php" class=" text-light pl-4 text-dark 
             <?php if( basename($_SERVER['REQUEST_URI'])=="payement.php"){ echo "bg-info";}else{echo"bg-transparent";};
             ?>">  
                <img src="images/ic_payment.svg" alt="p" class="card-image" >
                <span class="d-none d-md-inline"> Payment</span>
            </a>
        </li>

        <li class=" w-100 " style="justify-content: space-between;">
            <a href="#" class=" text-light pl-4 text-dark">
                <img src="images/ic-report.svg" alt="t" class="card-image">
                <span class="d-none d-md-inline">  Report</span>
            </a>
        </li>

        <li class=" w-100  pl-5">
            <a href="#" class=" text-light pl-4 text-dark">
                
            <span class="d-none d-md-inline">  <img src="images/ic-settings.svg" alt="z"class="card-image">Settings</span>
            </a>
        </li>
        <a href="deconn.php" class=" text-light pl-4 text-dark mt-5 fw-bolder text-decoration-none" style="font-size: 80%;">
                Logout  <i class="fas fa-sign-out-alt "></i>  </a>
    
    </ul>
</div>
           
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.miedidn.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="js/main.js"></script>