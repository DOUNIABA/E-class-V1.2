

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>loginform</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
  <body>
     <section class="container-fluid ">
         <section class="row justify-content-center">
             <section class="col-sm-12 col-lg-4 col-md-6">
                <form class="form-container" action="" method="POST">
                    <h1 class=" font-weight-bold">E-Classe</h1>
                    <div class="signin">
                        <h2>SIGN IN</h2>
                        <p>Enter your credentials to access your account</p>

                
                    </div>

                            <?php 

                        

                            if(!empty($_POST['remember'])){

                              setcookie('email',$_POST['mail'],time()+86400);
                              setcookie('password',$_POST['password'],time()+86400);
                            

                                SESSION_START();
                                include 'server.php' ;
                                if(isset($_POST['login']))
                                 {

                                  $_SESSION['time']=time();

                                  if(!empty($_POST['mail']) && !empty($_POST['password'])){
                                                                      
                                    $email=$_POST['mail'];
                                    $password=$_POST['password'];}

                                    $query="SELECT * FROM loginform where email='$email' and password='$password'";
                                    $result=mysqli_query($conn,$query);

                                    if(mysqli_num_rows($result)==true){

                                    $rows=mysqli_fetch_assoc($result);
                                     $_SESSION["name"]=$rows['nom'] ;

                                    $_SESSION['email']=$email;
                                    header("location:dashboard.php");
                                  }
                                }
                                  else{
                                    header("location:index.php?empty=please enter correct email and password");
                                  }
                                  }
                     
                            ?>
                               
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="enter your email" name="mail" 
                      value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"> Password </label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter your password" name="password"                                
                       value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
                    </div>

                    <div class="mb-3">
                      <input type="checkbox" name="remember" 
                      <?php if(isset($_COOKIE["email"])) { ?> checked <?php } ?> >

                      <label for="rememberme" class="form-label"> Rememeber me </label>
                      
                     </div>
                   
                    
                    <button  class="btn btn-primary" name="login">
                    SIGN IN
                  </button>
                    <div class="contact ">Forgot your password?<a href="#"> Resert Password </a>
                    </div>
                   
                  </form>
             </section>
         </section>
     </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
 
  </body>

</html>