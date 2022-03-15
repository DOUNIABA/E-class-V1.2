
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
 
   <title>course</title>
 </head>
 
 <body >   

 <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <h2>ADD COURSE</h2>
       <form method="Post" action="" >

        <div class="container" >
            <label for="exampleInputPassword1" class="form-label" >Matiére</label>
            <input class="form-control" type="text" placeholder="" name="mat">
        </div>       
        <div class="container" >
            <label for="exampleInputEmail1" class="form-label">durée</label>
            <input class="form-control" type="text" placeholder="" name="dur" >
        </div>        
        <div class="container" >
            <label for="exampleInputPassword1" class="form-label">prof</label>
            <input class="form-control" type="text" placeholder="" name="profs" style="margin-gauche:20%;">
        </div>      
        <div class="container" >
            <label for="exampleInputPassword1" class="form-label">prix</label>
            <input class="form-control" type="text" placeholder="" name="price">
        </div>

        <div class="container mt-5 text-align-center">
        <input type="hidden" value='test' name='submit' > 
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
 
        <button type="submit" class="btn btn-info">ADD</button>
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

                                    
                          <div class="h5 fw-bold mt-3" style="margin-right: 10% "><h1>Courses List</h1></div>

                          <div class="toolbar-left-part d-flex" style="margin-top: 15px;">
                            <img src="images/ic-sort.svg" alt="sort">
                              <button class="sort ic-sort btn btn-sort"></button>

                              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        ADD NEW COURSE</button>                          </div>

                      </div>

                       <div class="row my-0">
                           <div class=" table-responsive-sm table-responsive-md justify-content-end" style="margin-left:10px;">
                   
                                     <table class="table bg-white table table-striped table-hover">
                                         <thead>
                                             <tr class="bg_table text-table ">
                                                                                                 
                                                 <th class="th-sm">Matiére</th>
                                                 <th class="th-sm">durée</th>
                                                 <th class="th-sm">prof</th>
                                                 <th class="th-sm">prix</th>
                                                 <th class="th-sm"></th>

                                             </tr>
                                         </thead>
 
                                         <?php  
                                         $sql="select * from courses";
                                                 $result=mysqli_query($conn,$sql);
                                                 if($result){
                                                   while($row=mysqli_fetch_assoc($result)){
                                                    $id=$row['id'];
                                                     $matiere=$row['matiere'];
                                                     $duree=$row['duree'];
                                                     $prof=$row['prof'];
                                                     $prix=$row['prix'];
                                      
                                                    echo '<tr>
                                                   
                                                     <td>'.$matiere.'</td>
                                                     <td>'.$duree.'</td>
                                                     <td>'.$prof.'</td>
                                                     <td>'.$prix.'</td>                           
                                                    
                                                     <td>
                                                     <button class="btn btn-light"><a href="updatecourse.php?updateid='.$id.'"><img src="images/ic-edit.svg"></a></button>
                                                     <button class="btn btn-light"><a href="deletecourse.php?deleteid='.$id.'"><img src="images/ic-delete.svg"></a></button>
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
      var el = document.getElementById("sidebar");
      var toggleButton = document.getElementById("menu-btn");

      toggleButton.onclick = function () {
          el.classList.toggle("toggled");
      };
  </script>
   </main>
   
 </body>
 </html>