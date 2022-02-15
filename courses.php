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
                                     <h1 class="h5 fw-bold mt-3" style="margin-right: 10% ">Courses List</h1>
                                     <div class="toolbar-left-part d-flex" style="margin-top: 15px;">
                                       <img src="images/ic-sort.svg" alt="sort">
                                         <button class="sort ic-sort btn btn-sort"></button>
                                         <a class="btn btn-info" href="addcourse.php">ADD NEW COURSE</a>
                                     </div>
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
                                         $sql="select * from course";
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
         
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.miedidn.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     <script
             src="https://code.jquery.com/jquery-3.6.0.min.js"
             integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
             crossorigin="anonymous"></script>
     <script src="js/main.js"></script>
          
     <script>
       var el = document.getElementById("navbar");
       var toggleButton = document.getElementById("menu-btn");
 
       toggleButton.onclick = function () {
           el.classList.toggle("toggled");
       };
   </script>
   </main>
   
 </body>
 </html>