<?php

    session_start();

?>

<!DOCTYPE html>

<html lang="en">

    <head>

<!-- Basic Page Needs ==================================================================================================== -->

        <meta charset="utf-8">

        <title>NSS INFOTECH</title>

        <!--<meta name="description" content="Place to put your description text">-->

        <meta name="author" content="Indranil Das">
        
<!-- Mobile Specific Metas ==================================================================================================== -->

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS ==================================================================================================== -->

        <link rel="stylesheet" href="css/base.css">

        <link rel="stylesheet" href="css/skeleton.css">

        <link rel="stylesheet" href="css/screen.css">

        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />

<!-- Favicons ==================================================================================================== -->

        <link rel="icon" type="image/png" href="images/favicon/favicon.png">

        <link rel="apple-touch-icon" href="images/favicon/favicon.png">

        <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/favicon.png">

        <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/favicon.png">

<!-- Java Script ==================================================================================================== -->        
       
        <script src="js/popup.js" type="text/javascript"></script>

        <script src="js/validate.js" type="text/javascript"></script>
	<script src="js/browser.js" type="text/javascript"></script>    

        <script type="text/javascript">                       

            var Alert=new CustomAlert();                      

        </script>        

<!-- Google Fonts ==================================================================================================== -->

        <link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<!-- No Script ======================================================================================================= -->

        <?php
            include 'pageLink.php';
        ?>

        <noscript>
            <meta http-equiv="refresh" content="0; url=<?php echo $not;?>"/>
        </noscript>
        
    </head>

    <body style="background: gainsboro url(images/background/grey.png);" onLoad="detectBrowser();" oncontextmenu="return false;" ondragstart="Alert.render('Draging Item is prohibited by Company Laws.');return false;">
        
        <?php
            
            include 'error_suppress.php';                                                            

            

            session_destroy();

            

            $check=$_SESSION["isSuccessfull"];                        

            

            if(isset($check))

            {

                if($check=='OK')

                {

                    displayMsg();                    

                    echo "<script>Alert.render('Your Enquiry has been successfully sent.<br/>We will contact you soon.');</script>";                        

                }

                else if($check=='FAIL')

                {

                    displayMsg();

                    echo "<script>Alert.render('Failed to Send your message! Please try again.<br/>Be sure to check your Internet Connection.');</script>";                        

                }

                else if($check=='INVALID')

                {

                    displayMsg();

                    echo "<script>Alert.render('Invalid Data! Please Provide Valid Data.');</script>";                        

                }                    

                unset($_SESSION['isSuccessfull']);

            } 

            function displayMsg()

            {

        ?>

                <div id="dialogoverlay"></div>

                <div id="dialogbox">

                    <div>

                        <div id="dialogboxhead"></div>

                        <div id="dialogboxbody"></div>

                        <div id="dialogboxfoot"></div>

                    </div>

                </div>                        

        <?php

            }

        ?>   

        <!--Message-->

        <div id="dialogoverlay"></div>

        <div id="dialogbox">

            <div>

                <div id="dialogboxhead"></div>

                <div id="dialogboxbody"></div>

                <div id="dialogboxfoot"></div>

            </div>

        </div>                         

        

        <!-- Home - Content Part ==================================================================================================== -->

        

        <div id="header" style="margin-bottom:0px;background-image:url('images/logo/Service.png');">

            <div class="container header"> 

                

            <!-- Header | Logo, Menu ================================================== -->

        

                <header>

                    <div class="logo">

                        <a href="index.php">

                            <img src="images/logo/NSS.png" alt="NSS" style="width:320px;" />

                        </a>

                    </div>

                    <div class="mainmenu">

                        <div id="mainmenu">

                            <ul class="sf-menu">

                                <li>

                                    <a href="<?php echo $home;?>" style="color:#00bf00;font-size:small;">

                                        <span class="home">

                                            <img src="images/icons/home.png" alt="home" />

                                        </span>

                                        Home

                                    </a>

                                </li>

                                <li>

                                    <a href="<?php echo $about;?>" style="color:#00bf00;font-size:small;">

                                        <span class="home">

                                            <img src="images/icons/about.png" alt="about" />

                                        </span>

                                        About Us

                                    </a>

                                </li>

                                <li>

                                    <a href="<?php echo $service;?>" style="color:#00bf00;font-size:small;">

                                        <span class="home">

                                            <img src="images/icons/features.png" alt="" />

                                        </span>

                                        Services

                                    </a>

                                </li>

                                <li>

                                    <a href="<?php echo $client;?>" style="color:#00bf00;font-size:small;">

                                        <span class="home">

                                            <img src="images/icons/portfolio.png" alt="" />

                                        </span>

                                        Portfolio

                                    </a>

                                </li>

                                <li>

                                    <a href="<?php echo $contact;?>" id="visited" style="color:#00bf00;font-size:small;">

                                        <span class="home">

                                            <img src="images/icons/contact.png" alt="" />

                                        </span>

                                        Contact

                                    </a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </header>

            </div>

        </div>

        

        <!-- Home Content Part - Slider ==================================================================================================== -->



        <div class="flexslider" style="height:350px;">

            <ul class="slides">

                <li>

                    <a href="#">

                        <img src="images/maps/wb.jpg" height="353" width="1920" alt=""/>

                    </a>

                </li>

                <li>

                    <img src="images/maps/pune.jpg" height="353" width="1920" alt="" /> 

                </li>

            </ul>

        </div>

        <!-- Contact Content Part - Contact Form ==================================================================================================== -->

        <div class="container">

            <div class="blankSeparator"></div>

            <!-- Contact Sidebar ==================================================================================================== -->

            <div class="one_third contactsidebar">

                <section class="first" style="">

                    <h3>

                        Regional Office

                    </h3>

                    <div class="boxtwosep"></div>

                    <ul class="contactsidebarList">                        

                        <li style="width:300px;margin-bottom:20px;">

                            <br/>

                            Address : 

                            <a href="#" title="">

                                Surovisthan, Badkulla, Nadia, 

                                <br/>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                West Bengal : 741121                                

                            </a>

                        </li>

                        <li style="margin-bottom:20px;">                            

                            Contact : 

                            <a href="#" title="">

                                +91 9831657769

                            </a>

                        </li>

                    </ul>

                </section>

                <section class="first" style="">

                    <h3>

                        Pune City Office

                    </h3>

                    <div class="boxtwosep"></div>

                    <ul class="contactsidebarList">                        

                        <li style="width:300px;">

                            <br/>

                            Address 1 : 

                            <a href="#" title="">

                                385/2134, Sant Tukaram Nagar,

                                <br/>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                 

                                 Pimpri, Pune : 411018

                            </a>

                        
                        </li>

                        <li style="margin-bottom:20px;width:300px;">                            

                            <br/>

                            Contact &nbsp;&nbsp;&nbsp;  : 

                            <a href="#" title="">

                                +91 9547161047, +91 9730103339

                                <br/>

                                </a>

                        </li>                        

                    </ul>

                </section>

                <hr/>

                <p style="font-size:medium;">

                    Mail us at : support@nssinfotech.com

                </p>                

            </div>

            

            <!-- one_third ends here -->

            <div class="two_third lastcolumn contact1">

                <div id="contactForm">

                    <h2 style="font-weight:normal;">

                        Feel free to contact us with any query

                    </h2>

                    <div class="sepContainer"></div>

                    <form action="sendMail" method="post" id="contact_form" name="data" autocomplete="off">

                        <div class="name">

                            <label for="name">

                                Your Name <span style="color:red">*</span>

                            </label>

                            <p> 

                                Please enter your full name 

                            </p>

                            <input id="name" name="name" type="text" placeholder="e.g. Mr. Indranil Das" onClick="document.getElementById('name_error').innerHTML='';" required />

                            <span id="name_error" style="color:red;"></span>

                        </div>

                        

                        

                        <div class="email">

                            <label for="email">

                                Your Contact Number <span style="color:red">*</span>

                            </label>

                            <p> 

                                Please enter your mobile number only

                            </p>

                            <input id="email" name="phno" type="number" min="1000000000" max="9999999999" placeholder="1234567890" required />

                        </div>                        

                        

                        

                        <div class="email">

                            <label for="email">

                                Your Email <span style="color:red">*</span>

                            </label>

                            <p> 

                                Please enter your email address

                            </p>

                            <input id="email" name="email" type="email" placeholder="example@domain.com" required />

                        </div>

                        <div class="message">   

                            <label for="message">

                                Your Message <span style="color:red">*</span>

                            </label>

                            <p> 

                                Please try to avoid special symbols

                            </p>

                            <textarea id="message" name="message" rows="6" cols="10"  onclick="document.getElementById('msg_error').innerHTML='';" required></textarea>

                            <br/>

                            <span id="msg_error" style="color:red;"></span>                            

                        </div>

                        <div style="margin-left:20px;margin-bottom:30px;">

                            <input type="submit" value="Submit" style="cursor:pointer;" onClick="return validateInput();" />

                        </div>

                    </form>

                </div>

                <!-- end contactForm -->

            </div>

        </div>       

        

        <!-- Copyright ==================================================================================================== -->

        <div id="copyright">

            <div class="container">

                <div class="eleven columns alpha" style="text-align:left;">

                    <p class="copyright">

                        &copy; Copyright 2013-2015.

                        <a href="index.php" rel="nofollow">

                            NSS Infotech

                        </a>

                        . All rights reserved.

                    </p>

                </div>

                <div class="five columns omega">

                    <section class="socials">

                        <ul class="socials fr">

                            <li>

                                <a href="https://www.facebook.com/nssinfotechindia?ref=hl" target="_blank">

                                    <img src="images/socials/facebook.png" class="poshytip" title="facebook" alt="facebook"/>

                                </a>

                            </li>

                            <li>

                                <a href="https://plus.google.com/106645442838918230918/posts" target="_blank">

                                    <img src="images/socials/google.png" class="poshytip" title="google+" alt="google"/>

                                </a>

                            </li>                            

                        </ul>

                    </section>

                </div>                                

            </div>

            <!-- container ends here --> 

        </div>

        <!-- copyright ends here --> 

        <!-- End Document================================================== --> 

        

        <!-- Scripts ==================================================================================================== --> 

        <script src="js/jquery-1.8.0.min.js" type="text/javascript"></script> 

        <!-- Main js files --> 

        <script src="js/screen.js" type="text/javascript"></script> 

        <!--<script src="js/screen.js" type="text/javascript"></script> -->

        <!-- Tooltip --> 

        <script src="js/poshytip-1.0/src/jquery.poshytip.min.js" type="text/javascript"></script> 

        <!-- Tabs --> 

        <script src="js/tabs.js" type="text/javascript"></script> 

        <!-- Tweets --> 

        <script src="js/jquery.tweetable.js" type="text/javascript"></script> 

        <!-- Include prettyPhoto --> 

        <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 

        <!-- Include Superfish --> 

        <script src="js/superfish.js" type="text/javascript"></script> 

        <script src="js/hoverIntent.js" type="text/javascript"></script> 

        <!-- Flexslider --> 

        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script> 

        <script type="text/javascript" src="js/modernizr.custom.29473.js"></script>        

    </body>

</html>