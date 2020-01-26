<?php include"includes/header.php"; ?>
<?php
 if(isset($_POST['submit'])){
            $Search=$_POST['search'];
            $query="SELECT * FROM room where type LIKE '%$search' ";
            $search_query=mysqli_query($con,$query);
            if(!$search_query){
                die("failed".mysql_errno($connection));
            }
            $count=mysqli_num_rows($search_query);
            if($count==0){
                echo "Search does not match";
            }
            else{
                
                    
                    while($row=mysqli_fetch_assoc($search_query)){
                      $type =$row['type'];
                       $bedding =$row['bedding'];
                       $place = $row['place'];






?>
!-- //header -->
        <!-- banner -->
    <div id="home" class="w3ls-banner">
        <!-- banner-text -->
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">
                    <li>
                        <div class="w3layouts-banner-top">

                            <div class="container">
                                <div class="agileits-banner-info">
                                <h4>Hotel Management System</h4>
                                    <h3>We know what you love</h3>
                                        <p>Welcome to our hotels</p>
                                    <div class="agileits_w3layouts_more menu__item">
                <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
            </div>
                                </div>  
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3layouts-banner-top w3layouts-banner-top1">
                            <div class="container">
                                <div class="agileits-banner-info">
                                <h4>Hotel Management System</h4>
                                    <h3>Stay with friends & families</h3>
                                        <p>Come & enjoy precious moment with us</p>
                                    <div class="agileits_w3layouts_more menu__item">
                <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
            </div>
                                </div>  
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3layouts-banner-top w3layouts-banner-top2">
                            <div class="container">
                                <div class="agileits-banner-info">
                                <h4>Hotel Management System</h4>
                                <h3>want luxurious vacation?</h3>
                                        <p>Get accommodation today</p>
                                    <div class="agileits_w3layouts_more menu__item">
                                            <a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
            <!--banner Slider starts Here-->
        </div>
            <div class="thim-click-to-bottom">
                <a href="#about" class="scroll">
                    <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                </a>
            </div>
    </div>  
    <!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                        <!-- Modal1 -->
                            <div class="modal-dialog">
                            <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4>Hotel<span>Management System</span></h4>
                                        <img src="images/1.jpg" alt=" " class="img-responsive">
                                        <h5>We know what you love</h5>
                                        <p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts">
    <a href="admin/reservation.php"><h2>ROOM RESERVATION</h2></a>
</div>

            <div class="clearfix"> </div>
</div>
<!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container"> 
            <div class="agileits_banner_bottom">
                <h3><span>Experience a good stay, enjoy fantastic offers</span> Find our friendly welcoming reception</h3>
            </div>
            <div class="w3ls_banner_bottom_grids">
                <ul class="cbp-ig-grid">
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_road"></span>
                            <h4 class="cbp-ig-title">MASTER BEDROOMS</h4>
                            <span class="cbp-ig-category">Hotel Management</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_cube"></span>
                            <h4 class="cbp-ig-title">SEA VIEW BALCONY</h4>
                            <span class="cbp-ig-category">Hotel Management</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_users"></span>
                            <h4 class="cbp-ig-title">LARGE CAFE</h4>
                            <span class="cbp-ig-category">Hotel Management</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_ticket"></span>
                            <h4 class="cbp-ig-title">WIFI COVERAGE</h4>
                            <span class="cbp-ig-category">Hotel Management</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- //banner-bottom -->
<!-- /about -->
    
    <!-- //about -->
<!--sevices-->

<!--//sevices-->
<!-- team -->
<div class="team" id="team">
    <div class="container">
            <h3 class="title-w3-agileits title-black-wthree">Meet Our Manager</h3>
            <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                    <li>
                        <img src="images/teams1.jpg" alt=" Image" class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/teams2.jpg" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/teams3.jpg" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/teams4.jpg" alt=" " class="img-responsive" />
                    </li>
                    </ul>
                    <div class="resp-tabs-container">
                    <div class="tab1">
                        <div class="col-md-6 team-img-w3-agile">
                        </div>
                        <div class="col-md-6 team-Info-agileits">
                            <h4>Lucas Jimenez</h4>
                            <span>Manager</span>
                            <p></p>
                        <div class="social-bnr-agileits footer-icons-agileinfo">
                            <ul class="social-icons3">
                                <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                                <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                                <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                            </ul>
                        </div>                          
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="tab2">
                    <div class="col-md-6 team-img-w3-agile">
                        </div>
                        <div class="col-md-6 team-Info-agileits">
                            <h4>Sarah Connor</h4>
                            <span>Receptionist</span>
                            <p></p> 
                        <div class="social-bnr-agileits footer-icons-agileinfo">
                            <ul class="social-icons3">
                                <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                                <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                                <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                            </ul>
                        </div>                          
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="tab3">
                        <div class="col-md-6 team-img-w3-agile">
                        </div>
                        <div class="col-md-6 team-Info-agileits">
                            <h4>Ivan Simpson</h4>
                            <span>Manager</span>
                            <p></p>
                        <div class="social-bnr-agileits footer-icons-agileinfo">
                            <ul class="social-icons3">
                                <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                                <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                                <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                            </ul>
                        </div>                          
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="tab4">
                    <div class="col-md-6 team-img-w3-agile">
                        </div>
                        <div class="col-md-6 team-Info-agileits">
                            <h4>Marc Gutierrez</h4>
                            <span>Receptionist</span>
                            <p></p>
                        <div class="social-bnr-agileits footer-icons-agileinfo">
                            <ul class="social-icons3">
                                <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                                <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
                                <li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
                            </ul>
                        </div>                          
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    </div>
            </div>
    </div>
</div>
<!-- //team -->

<!-- Gallery -->

<!-- //gallery -->
     <!-- rooms & rates -->

    
     <!--// rooms & rates -->
  <!-- visitors -->
    <div class="w3l-visitors-agile" >
        <div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">What Celebrity Visitors Experienced</h3> 
        </div>
        <div class="w3layouts_work_grids">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                            <li>
                            <div class="w3layouts_work_grid_left">
                                <img src="images/5.jpg" alt=" " class="img-responsive" />
                                <div class="w3layouts_work_grid_left_pos">
                                    <img src="images/s1.jpg" alt=" " class="img-responsive" />
                                </div>
                            </div>
                            
                            <div class="w3layouts_work_grid_right">
                                <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                Friendly staff & manager.
                                </h4>
                                <p>One Of The Best place I Ever Stay.Amazing Location,Services And Wonderful Reciption.</p>
                                <h5>Subir Saha</h5>
                                <p>Bangladesh</p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src="images/g1.jpg" alt=" " class="img-responsive" />
                                <div class="w3layouts_work_grid_left_pos">
                                    <img src="images/shila.jpg" alt=" " class="img-responsive" />
                                </div>
                            </div>

                            <div class="w3layouts_work_grid_right">
                                <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                Best Place To Stay
                                </h4>
                                <p>One Of The Best place I Ever Stay.Amazing Location,Services And Wonderful Reciption.</p>
                                <h5>Shila Josi</h5>
                                <p>Singer,Bangladesh</p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src="images/g7.jpg" alt=" " class="img-responsive" />
                                <div class="w3layouts_work_grid_left_pos">
                                    <img src="images/rinku.JPG" alt=" " class="img-responsive" />
                                </div>
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                Worth to come again
                                </h4>
                                <p>Best Balcony View.</p>
                                <h5>Jahnatan Rinku</h5>
                                <p>Director&Actor,korean</p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src="images/g9.jpg" alt=" " class="img-responsive" />
                                <div class="w3layouts_work_grid_left_pos">
                                    <img src="images/gulam.JPG" alt=" " class="img-responsive" />
                                </div>
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                Awesome services 
                                </h4>
                                <p>Worth to come again </p>
                                <h5>Gulam Cloer</h5>
                                <p>Motivational Speaker,Bangladesh</p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                        <li>
                            <div class="w3layouts_work_grid_left">
                                <img src="images/g6.jpg" alt=" " class="img-responsive" />
                                <div class="w3layouts_work_grid_left_pos">
                                    <img src="images/suron.JPG" alt=" " class="img-responsive" />
                                </div>
                            </div>
                            <div class="w3layouts_work_grid_right">
                                <h4>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                   Amazing View
                                </h4>
                                <p> </p>
                                <h5>Suronjit Bublitz</h5>
                                <p>Cricketer,Bangladesh National Team</p>
                            </div>
                            <div class="clearfix"> </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>  
    </div>
        







<?php      } 

            }

        }
        ?>
