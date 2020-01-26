 <?php include"includes/header.php"; ?>
 <html>
<head>
  <title>Feedback</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
 <body>
  <?php   echo "<marquee behavior='alternate' scrollamount='10'> <span  style=color:blue><h3>You'll Love All The Offer We Offer!</h3></span><br>
    <span style=color:green><h4>Want Luxurious Vacation?Book Your Room Now</h4></span>
  
  </marquee>"; ?>

 <table style="background-image: url('images/contact.jpg')" class="table table-bordered table-hover ">
  
  
                        <thead style="color: blue">
                          
                            <tr>
                                <th></th>
                        
                            
                               </tr>

                           
                       </thead>
                            
                       <tbody>

<?php

    $query ="SELECT * FROM newsletterlog ";

                      $select_news =mysqli_query($con , $query);



                       while($row=mysqli_fetch_assoc( $select_news)){
                       $news =$row['news'];
                      
                      
                      
                       
                         echo "<tr>";
                        echo "<td style=color:red>$news</td>";
                       
                        echo "</tr>";
                       



                     
                       
                   
                      

                        
                         } ?>
                        
                      </tbody>
                    </table>

              

                  </body>
                  <?php include"includes/arr.php";?>  
                   <?php include"includes/footer.php";?>