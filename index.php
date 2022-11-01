<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title> CITI | Job Center </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="uploads/citi_logoo.png" />
     <link rel="icon" type="image/png" href="uploads/citi_logoo.png" />

	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #ffffff;">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

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
                <div class="column">
                    <div class="career-search mb-60" id="search">
                    
                        <div class="filter-result">
                           
                            <p class="mb-30 ff-montserrat">Jobs Available:</p>
                            
                            <?php
                            
                            $connect = mysqli_connect("localhost", "citiac_centmax","centmax@2022","citiac_blog");
                            $query = "SELECT* FROM jobs ORDER BY timestamp desc";
                            $result = mysqli_query($connect,$query);

                            while ($row = mysqli_fetch_array($result)) { ?>
                          
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                       <img src="<?= 'uploads/'.$row["company_logo"] ?>" width="70px" style="background-color:#fff">
                           
                                    </div>
                                    <div class="job-content">
                                        <a href="https://jobs.citi.ac.ug/jobdetails.php?id=<?= $row['id'] ?>"><h5 class="text-center text-md-left"><?= $row['jobtitle'] ?></h5></a>
                                        <ul class="d-md-flex flex-wrap text-capitalize ff-montserrat" style="padding-left: 0px; color:#000;font-size:14px" >
                                          
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-case mr-2"></i><?= $row['category'] ?>
                                            </li>
                                            <li class="mr-md-4">
                                                <i class="zmdi zmdi-time mr-2"></i>Deadline: <?= $row['expiry_date'] ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=admin@citi.ac.ug&cc=centmaxtech@gmail.com&bcc=kiiryarnold@gmail.com&su=Career%20Guidance&body=Hello%20CITI

 " class="btn d-block w-100 d-sm-inline-block btn-light" id="button">Ask an Expert</a>
  <p>CV/Application<br> & Interview Tips</p>
                                </div>
                            </div>

                            <?php }?>
                            
                           

                            

                           
                        </div>
                    </div>

                   
                </div>
                <div class="column_3"></div>
                <div class="column_2" >
                <a class="twitter-timeline" href="https://twitter.com/CentmaxTraining?ref_src=twsrc%5Etfw">Tweets by CentmaxTraining</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>

        </div>

<style type="text/css">

</style>
<script>
         const menuBtn = document.querySelector(".menu-icon span");
         const searchBtn = document.querySelector(".search-icon");
         const cancelBtn = document.querySelector(".cancel-icon");
         const items = document.querySelector(".navbar-items");
         const form = document.querySelector("form");
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           searchBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
           form.classList.remove("active");
           cancelBtn.style.color = "#ff3d00";
         }
         searchBtn.onclick = ()=>{
           form.classList.add("active");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
      </script>
      
       <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "256783707348", // WhatsApp number
                call_to_action: "Message us", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>

</body>
</html>