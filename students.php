<?php include 'server.php' ;
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

    <title>student</title>
  </head>

<body >   

<?php
    if (isset($_POST['submit'])){

      if (empty($_POST['image']) || empty($_POST['name']) || empty($_POST['mail']) || 
      empty($_POST['phone']) || empty($_POST['email_number']) || empty($_POST['date_admission']))
      {
        echo '<div class="alert alert-danger" role="alert">
        Veuillez remplir tous les!
      </div>';
      $img=$_POST['image'];
      $nom=$_POST['name'];
      $email=$_POST['mail'];
      $phone=$_POST['phone'];
      $email_number=$_POST['email_number'];
      $date_admisssion=$_POST['date_admission'];

      $sql=" INSERT INTO studentes (img , nom , email , phone , email_number , date_admission) VALUES 
      ('$img' , '$nom', '$email' , '$phone' , '$email_number' , '$date_admisssion')";
      $result=mysqli_query($conn,$sql);

      if($result){
          header("location:students.php");

      }
  } 
          die(mysqli_error($conn));
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
       <h2>ADD STUDENT</h2>
       <form method="Post" action="">

        <div class="container" justify-content-center>
            <label for="formFile" class="form-label">image</label>
            <input class="form-control" type="file" placeholder="" name="image">
        </div>

        <div class="container">
            <label for="exampleInputPassword1" class="form-label">name</label>
            <input class="form-control" type="text" placeholder="enter your name" name="name">
        </div>

        <div class="container">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input class="form-control" type="email" placeholder="enter your email" name="mail">
        </div>

        <div class="container" >
            <label for="exampleInputPassword1" class="form-label">phone</label>
            <input class="form-control" type="tel" placeholder="enter your phone" name="phone" style="witdh: 30px;">
        </div>

        
        <div class="container">
            <label for="exampleInputPassword1" class="form-label">email_number</label>
            <input class="form-control" type="tel" placeholder="" name="email_number">
        </div>

        <div class="container">
            <label for="exampleInputPassword1" class="form-label">date_admission</label>
            <input class="form-control" type="date" placeholder="enter your date" name="date_admission">
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">ADD</button>
      </div>
    </form>

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
                    
                      <div class="col-12 main-content-toolbar d-flex pb-2 justify-content-between align-items-center border-bottom-light ">
                                    
                                    <div class="h5 fw-bold mt-3" style="margin-right: 10% "><h1>Students List</h1></div>

                                     <div class="toolbar-left-part d-flex" style="margin-top: 15px;">
                                      <img src="images/ic-sort.svg" alt="sort">
                                        <button class="sort ic-sort btn btn-sort"></button>
                                   
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        ADD NEW STUDENT
                                      </button>
                                    </div>
                      </div>                     
                      <div class="row my-0">
                          <div class=" table-responsive-sm table-responsive-md justify-content-end" style="margin-left:10px;">
                  
                                    <table class="table bg-white table table-striped table-hover">
                                        <thead>
                                            <tr class="bg_table text-table ">
                                                                                              
                                                <th class="th-sm"></th>
                                                <th class="th-sm">Name</th>
                                                <th class="th-sm">Email</th>
                                                <th class="th-sm">phone</th>
                                                <th class="th-sm">email number</th>
                                                <th class="th-sm">Date d'admission</th>
                                               
                                            </tr>
                                        </thead>
                                            <?php  

                                                $sql="select * from studentes";
                                                    $result=mysqli_query($conn,$sql);
                                                    if($result){

                                                    while($row=mysqli_fetch_assoc($result)){
                                                      $id=$row['id'];
                                                      $img=$row['img'];
                                                      $nom=$row['nom'];
                                                      $email=$row['email'];
                                                      $phone=$row['phone'];
                                                      $email_number=$row['email_number'];
                                                      $date_admission=$row['date_admission'];

                                                     echo '<tr>         
                                                      <td><img src= "images/'.$img.'" style="width: 10vh;"></td>
                                                      <td>'.$nom.'</td>
                                                      <td>'.$email.'</td>
                                                      <td>'.$phone.'</td>                           
                                                      <td>'.$email_number.'</td>
                                                      <td>'.$date_admission.'</td>
                                                      <td>
                                                      <button class="btn btn-light"><a href="update.php?updateid='.$id.'"><img src="images/ic-edit.svg"></a></button>
                                                      <button class="btn btn-light" onclick="con()"><a href="deletestudent.php?deleteid='.$id.'"><img src="images/ic-delete.svg"></a></button>
                                                      </td>
                                                      </tr>';

                                                      
                                           
                                                  }
                                                }
                  
                                          ?>

                                    </table>
                        
                            </div>
                      </div>   
              </div>
          </div>
   </div>
        
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
         
    <script>
      var el = document.getElementById("navbar");
      var toggleButton = document.getElementById("menu-btn");

      toggleButton.onclick = function () {
          el.classList.toggle("toggled");
      };

      
      function con(){
        if(window.confirm("Voulez-vous vraiment supprimer ?"))
        {
          return true
        }else{
          return false
        }
      }
  </script>
  </main>
  
</body>
</html>