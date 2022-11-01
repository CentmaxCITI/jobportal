<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>career list - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="uploads/citi_logoo.png" />
     <link rel="icon" type="image/png" href="uploads/citi_logoo.png" />
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #ffffff;">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
<link rel="stylesheet" href="main.css"/>


<div class="navbar">
         <div class="menu-icon">
            <span class="fas fa-bars"></span>
         </div>
         <img src="logo.png" class="logo" >
        
         <div class="navbar-items">
         <li><a href="https://citi.ac.ug/">Home</a></li>
            <li><a href="https://citi.ac.ug/classes?sort=newest">Courses</a></li>
            <li><a href="https://jobs.citi.ac.ug/">Job Center</a></li>
            <li><a href="https://citi.ac.ug/public/pages/about">About Us</a></li>
            <li><a href="https://blog.citi.ac.ug/wp/">Blog</a></li>
            <li><a href="https://citi.ac.ug/contact">Contact</a></li>
         </div>
         <div class="search-icon">
            <span class="fas fa-search"></span>
         </div>
         <div class="cancel-icon">
            <span class="fas fa-times"></span>
         </div>
         <form action="#">
            <input type="search" class="search-data" placeholder="Search" required>
            <button type="submit" class="fas fa-search"></button>
         </form>
</div>
<div class="main">
   <div class="container">
   <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="career-search mb-60" id="search">
                        <div class="filter-result">
                             
                            <?php
                            
                            $connect = mysqli_connect("localhost", "citiac_centmax","centmax@2022","citiac_blog");
                            $id = $_GET['id'];
                            
                            $query = "SELECT* FROM jobs WHERE id = $id ";
                            $result = mysqli_query($connect,$query);

                            while ($row = mysqli_fetch_array($result)) { ?>
                           
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                    <img src="<?= 'uploads/'.$row["company_logo"] ?>" width="70px" style="background-color:#fff">
                                    </div>
                                    <div class="job-content">
                                        <h5 class="text-center text-md-left"><?= $row['jobtitle'] ?></h5>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-montserrat" style="padding-left: 0px; color:#000" >
                                          
    
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-library mr-2"></i><?= $row['company'] ?>
                                            </li>

                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-case mr-2"></i><?= $row['category'] ?>
                                            </li>
    
                                          
                                           
                                          
                                        </ul>
                                       
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=admin@citi.ac.ug&su=Career%20Guidance&body=Hello%20CITI

 " class="btn d-block w-100 d-sm-inline-block btn-light" id="button" style="background-color:#020f84">Ask an Expert</a>
                                    <a href="<?= $row['link'] ?>" class="btn d-block w-100 d-sm-inline-block btn-light" id="button">Apply now</a>
                                </div>
                                
                            </div>
                        
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                   
                                    <div class="job-content" align="justify">
                                       <?= $row['job_details'] ?>
                                    </div>
                                </div>
                               
                                
                            </div>

                            <?php }?>
                            
                           

                            

                           
                        </div>
                    </div>

                   
                </div>
            </div>

        </div>
        </div>
<style type="text/css">

</style>

</script>
</body>
</html>