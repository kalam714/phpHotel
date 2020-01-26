 <?php include"includes/header.php"; ?>
 <html>
<head>
  <title>Feedback</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
 <body>
 <table style="background-image: url('images/contact.jpg')" class="table table-bordered table-hover ">
  
  
                        <thead style="color: blue">
                          
                            <tr>
                                <th>User Name</th>
                                <th>User Feedback</th>
                                <th>User Rating</th>
                               
                               
                               </tr>

                           
                       </thead>
                            
                       <tbody>

<?php
    $query ="SELECT * FROM contact ";
                      $select_feedback =mysqli_query($con , $query);



                       while($row=mysqli_fetch_assoc( $select_feedback)){
                       $name =$row['fullname'];
                       $Feedback =$row['Feedback'];
                       $rate =$row['Rate'];
                      

                        echo "<tr>";
                        echo "<td style='color:skyblue'>$name</td>";
                        echo "<td style='color:red'><marquee behavior='alternate'>$Feedback</marquee> </td>";
                        echo "<td style='color:red'>" ?> <?php if($rate <10){
                         echo $rate;
                         echo '/10';
                        }else{
                          echo "Rating is Out of range";
                        } 
                       echo "</td>";
                        echo "</tr>";
                        }
                        ?>
                      </tbody>
                    </table>

                <h1>Want To Feedback?</h1>
                <button><a href="contactus.php">Feedback</a></button><br>

                  </body>
                  <?php include"includes/arr.php";?>  
                   <?php include"includes/footer.php";?>