<?php
session_start();
   if(empty( $_SESSION['email']))
   {
     header('location:index.php');
         
       }
     
  if(isset($_SESSION["email"]))
   {
        if((time() - $_SESSION['time']) > 86400) 
        {

            header('location:deconn.php');
        } 
        
      }
      ?>