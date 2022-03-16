    <?php                           
       
        include 'server.php' ;

        if(isset($_POST['login'])){
            $username=$_POST['username'];
            $email=$_POST['mail'];
            $password= md5($_POST['password']);
            $cpassword= md5($_POST['Cpassword']);

            if ($password==$cpassword) {
                $sql="SELECT * FROM comptes WHERE email='$email'";
                $result=mysqli_query($conn,$sql);  
                if(!$result->num_rows>0){

            $sql = " INSERT INTO comptes (name, email , password,cpassword) VALUES 
             (' $username' , '$email', '$password' , '$cpassword')";
             $result=mysqli_query($conn,$sql);     
             
            if ($result) {

              echo "<script>alert('registration completed')</script>";
              $username="";
              $email="";
              $_POST['password']="";
              $_POST['cpassword']="";
              header("location:index.php");

            }
            else {
                echo "<script>alert('something wrong')</script>";

            }
                }else{
                    echo '<div class="alert alert-danger" role="alert">
                   Email already exists!
                    </div>';
                }
        } 
        else {
            echo "<script>alert('Password Not matched')</script>";
                      }}
        
    ?>

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
             <form  class="form-container" action="index.php" method="POST" onsubmit="return validation()">
                    <h1 class=" font-weight-bold">E-Classe</h1>
                    <div class="signin">
                        <h2>Register</h2>
                
                    </div>
                    <div class="mb-3">
                      
                      <label for="exampleInputEmail1" class="form-label">Full Name</label><br>
                      <span id="nomid" class="text-danger"></span>
                      <input type="text" class="form-control" id="nom"  placeholder="enter your username" name="username">
                    </div>
                              
                    <div class="mb-3">                      
                      <label for="exampleInputEmail1" class="form-label">Email address</label><br>
                      <span id="emailid" class="text-danger"></span>
                      <input type="email" class="form-control" id="mail"  placeholder="enter your email" name="mail">
                    </div>

                    <div class="mb-3">                     
                   <label for="exampleInputPassword1" class="form-label"> Password </label><br>                     
                   <span id="passwordid" class="text-danger"></span>
                   <input type="password" class="form-control" id="password" placeholder="enter your password" name="password">

                </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"> Confirm Password </label><br>
                      <span id="cofirmid" class="text-danger"></span>
                      <input type="password" class="form-control" id="confirmpass" placeholder="enter your password" name="Cpassword">
                    </div>

                                        
                    <button  class="btn btn-primary" name="login">
                   Register
                  </button>
                    <div class="contact ">Have an account?<a href="index.php"> login here </a>
                    </div>
                   
                  </form>
             </section>
         </section>
     </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="validation.js"> </script>
  </body>
</html>