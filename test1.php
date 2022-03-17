<?php
require 'server.php';
$sql="SELECT * FROM comptes WHERE email='dounia@gmail.com'";
    /*$result=mysqli_query($conn,$sql); 
    var_dump($result); 
    if(mysqli_num_rows($result)>0){
            echo 'user aleready exist';

               }else{
                echo 'user not found';       
               }
               */
        $sql = " INSERT INTO comptes (name, email , password,cpassword) VALUES 
                    ('omar' , 'omar@email.cc', 'passpass' , 'passpass')";
        $result=mysqli_query($conn,$sql);
        var_dump($result);