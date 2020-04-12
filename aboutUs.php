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
                                        <a href="<?php echo $about;?>" id="visited" style="color:#00bf00;font-size:small;">
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
                                        <a href="<?php echo $contact;?>" style="color:#00bf00;font-size:small;">
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
        
            <!-- Features Content Part ==================================================================================================== -->
            <div class="container resume">
                <p style="font-size:15px;margin-top:40px;">
                    <img src="images/about/about.jpg" alt="services"/>
                    <br/><br/><br/>                
                </p>            
                    
                <div class="one_third">
                    <h3>
                        Who We Are
                    </h3>                
                </div>            
                <div class="two_third lastcolumn">
                    <p style="font-size:medium;">
                        NSS Infotech is an IT Service based company formed in 2013. We are a small team of professionals from different IT domains.
                        Being a small team, we value to work as a singular unit built with trust, commitment and dedication.                                        
                    </p>
                    <p style="font-size:medium;">
                        We have successfully delivered various projects to our clients in this short span of time.
                        For more details 
                        <a href="<?php echo $client;?>" title="" class="buttonhome">
                            &rarr; Click Here
                        </a>                     
                    </p>
                </div>
                <div class="one_third">
                    <h3>
                        Our Objective
                    </h3>                
                </div>      
                <div class="two_third lastcolumn">
                    <p style="font-size:medium;">
                        Our goal is to provide excellent services and 
                        implement unique ideas for our clients’ satisfaction.
                        With this mission we have aimed to reach every corner of the country. 
                        We believe that the growth can only be the result of mutually benefiting
                        relationship with our clients. 
                    </p>
                    <p style="font-size:medium;">
                        You can contact us any time with your IT related needs. We are happy to help you.
                        <br/>
                        For Contact Details 
                        <a href="<?php echo $contact;?>" title="" class="buttonhome">
                            &rarr; Click Here
                        </a>                     
                    </p>
                </div>
                <div class="one_third">
                    <h3>
                        Our Services
                    </h3>                
                </div>            
                <div class="two_third lastcolumn">
                    <p style="font-size:medium;">
                        Currently we provide the following IT services :
                        <br/><br/>
                        * Network Solution<br/>
                        * Desktop Support<br/>
                        * Security Solution<br/>
                        * Network Monitoring<br/>
                        * Web Design & Development<br/>
                        * Software Development<br/>
                        * Database Support<br/>
                        * AMC Solutions<br/>
                        * Antivirus Solutions<br/>
                        * IT Training               
                        <br/><br/>
                        For details about different services 
                        <a href="<?php echo $service;?>" title="" class="buttonhome">
                            &rarr; Click Here
                        </a>                     
                    </p>
                </div>
            </div>
        
            <div class="blankSeparator1"></div>
        
            <div style="min-height:100%;padding-bottom:10px;"></div>
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