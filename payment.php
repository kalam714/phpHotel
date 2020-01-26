 <?php include"db.php"; ?>
 <html>
<head>

  <title>Payment</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('images/g5.jpg')">  


  <form action="" method="post">
    <div class="form-group">
   <label>PaymentId</label>
  <input name="phone" type ="text" class="form-control" required><br>
  <input type="submit" name="submit" class="btn btn-primary">
  </div>

  </form >
 
  
 
 <button><a href="index.php"><h1>Go To Home</h1></a></button>                     


<?php
    $query ="SELECT *  FROM roombook";


                      $select_roombook =mysqli_query($con , $query);
                      while($row=mysqli_fetch_assoc( $select_roombook)){
                         $id=$row['id'];
                       $payment_id = $row['Phone'];
                       


                       

                        
                        }



                        ?>
                   

                   
                      

     <?php   
  if(isset($_POST['submit'])){
    $sub = $_POST['submit'];
    if($sub == $payment_id){
             echo "<a href='http://localhost/hotel/payment/ '><marquee behavior='alternate' scrollamount='10'><button>Follow The Instrauction</button></marquee></a>";              
        }
        else{
          echo "<a href='http://localhost/hotel/payment/ '><marquee behavior='alternate' scrollamount='10'><button><h1>Follow The Instrauction</h1></button></marquee></a>";
        }

  }

  ?>                    
                         



                   
                        
                    

              

                  </body>
                  