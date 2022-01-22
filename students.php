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

<body class="row">
  <div  id="wrapper">
      <div class="bg col-3" id="sidebar-wrapper">  
             <?php        
                include("sidebar.php");          
            ?>
      </div>
       <div class="container-fluid px-1 col-9">
           <?php
                include ("header.php");
                ?>

<div class="col-12 main-content-toolbar d-flex pb-2 justify-content-between align-items-center border-bottom-light">
                    <h1 class="h5 fw-bold" style="margin-right: 10% , margin-top: 30px;">Students List</h1>
                    <div class="toolbar-left-part" style="margin-top: 30px;">
                       <img src="images/ic-sort.svg">
                        <button class="sort ic ic-sort btn btn-sort"></button>
                        <button class="btn btn-info btn-add-students">ADD NEW STUDENT</button>
                    </div>
                 </div>

            <div class="row g-4 my-0">
            <div class=" table-responsive-sm table-responsive-md justify-content-end" style="width:70%,margin-left:10px;">
       
       <table class="table bg-white table-borderless table-hover ">
           <thead>
               <tr class="bg_table text-table">
                  
                   <th scope="row" ></th>
                   <th class="th-sm">Name</th>
                   <th class="th-sm">Email</th>
                   <th class="th-sm">phone</th>
                   <th class="th-sm">email number</th>
                   <th class="th-sm">Date d'admission</th>
                   <th class="th-sm"></th>

               </div>
               </tr>
           </thead>

           <?php  
for($i=0;$i<18;$i++){
$student []=[  
'img'=>'<img src="images/student-img.jfif" alt="p" style="WIDTH: 10vh;">',
'Name'  =>'Uername',
'Email' =>'user@gmail.com',
'Phone' =>'12333445'.$i++,
'Enroll Number' =>'123456789'.$i,
'Date of admission' =>'08-DEC,2021',
'icon1' =>'<i class="fas fa-pen  " style="font-size:28px;color:#00C1FE ;">',
'icon2' =>'<i class="fas fa-trash "  style="font-size:28px;color:#00C1FE ;">',
];
}

foreach($student as $key=>$student){
echo"<tr>   

<td>".$student['img']."</td>
<td>".$student['Name'] ."</td>
<td>". $student['Email']."</td>
<td>".$student['Phone']."</td>
<td>".$student['Enroll Number']."</td>
<td>". $student['Date of admission']."</td>
<td>".$student['icon1']."</td>
<td>". $student['icon2']."</td>

</tr>";
}

?>  

       </table>
            
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
         
</body>
</html>