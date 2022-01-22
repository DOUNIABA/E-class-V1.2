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
  <title>payment</title>

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

            <div class="main-content row p-2 d-flex align-items-center">
                <div class="col-12 main-content-toolbar d-flex pb-2 justify-content-between align-items-center ">
                    <h1 class="h5 fw-bold text-black" style="margin-right:16%;">Payment Details</h1>
                    <div class="sorting" style=" margin-left: 68%;"><img src="images/ic-sort.svg"style="margin-left:10%;"></div>
                    <span class="border-bottom-3"></span>
                 </div>
                 <div class="row g-4 my-0">
            <div class=" table-responsive-sm table-responsive-md justify-content-end" style="width:70%,margin-left:10px;">
       
       <table class="table bg-white table-borderless table-hover ">
           <thead>
               <tr class="bg_table text-table">
                        <th class="th-sm">Name</th>
                        <th class="th-sm">Payment Schedule</th>
                        <th class="th-sm">Bill Number</th>
                        <th class="th-sm">Amount paid</th>
                        <th class="th-sm">Balance amount</th>
                        <th class="th-sm">Date </th>
                        <th class="th-sm"> </th>


                    </tr>
                </thead>

<?php  
    
    $PAYEMENT=[
       [   
           
           'Name'  =>'karthi',
           'Payment schedule' =>'First',
           'Bill Number' =>'001234',
           'Amount paid' =>'Dhs 100.000',
           'Balance amount' =>'Dhs 100.000',
           'date' =>'05-JAN,2022	',
           'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',
     ],
     [   
           
       'Name'  =>'karthi',
       'Payment schedule' =>'First',
       'Bill Number' =>'001234',
       'Amount paid' =>'Dhs 100.000',
       'Balance amount' =>'Dhs 100.000',
       'date' =>'05-JAN,2022	',
       'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',
     
    ],
    [   
            
    'Name'  =>'karthi',
    'Payment schedule' =>'First',
    'Bill Number' =>'001234',
    'Amount paid' =>'Dhs 100.000',
    'Balance amount' =>'Dhs 100.000',
    'date' =>'05-JAN,2022	',
    'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',

    ],
    [   
            
    'Name'  =>'karthi',
    'Payment schedule' =>'First',
    'Bill Number' =>'001234',
    'Amount paid' =>'Dhs 100.000',
    'Balance amount' =>'Dhs 100.000',
    'date' =>'05-JAN,2022	',
    'icon1' =>'<i class="far fa-eye" style="font-size:28px;color:#00C1FE"></i>',

    ]
    ];
 
      foreach($PAYEMENT as $key=>$PAYEMENT){
       echo"<tr>   
     
       <td>".$PAYEMENT['Name'] ."</td>
       <td>". $PAYEMENT['Payment schedule']."</td>
       <td>".$PAYEMENT['Bill Number']."</td>
       <td>".$PAYEMENT['Amount paid']."</td>
       <td>". $PAYEMENT['Balance amount']."</td>
       <td>".$PAYEMENT['date']."</td>
       <td>". $PAYEMENT['icon1']."</td>
    
       </tr>";
    }

 ?>  
                </tr>


            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script
                src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
</body>
</html>
