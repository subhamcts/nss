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

                                    <a href="<?php echo $client;?>" id="visited" style="color:#00bf00;font-size:small;">

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

        

        <!-- Portfolio Project Content Part ==================================================================================================== -->

        <div class="blankSeparator"></div>

        <div class="container portfolio">

            <div class="two_third">

                <div class="flexslider">

                    <ul class="slides">

                        <li>

                            <img src="images/portfolio/canara.jpg" alt="canara" />

                        </li>

                    </ul>

                </div>

            </div>

            <div class="one_third lastcolumn">

                <h2>

                    Canara Bank

                </h2>

                <p>

                    Canara bank (Boalia Branch, West Bengal) is one of the clients we have worked with.

                    <br/><br/>

                    We are responsible to provide the following services to this branch :-

                    <br/><br/>

                    *&nbsp;	Network Support

                    <br/>

                    *&nbsp;	Hardware Support

                </p>

            </div>

            <div class="two_third">

                <div class="flexslider">

                    <ul class="slides">

                        <li>

                            <img src="images/portfolio/prakalpa.jpg" alt="prakalpa" />

                        </li>

                    </ul>

                </div>

            </div>

            <div class="one_third lastcolumn">

                <h2>

                    Prakalpa Architects

                </h2>

                <p>

                    Prakalpa Architects is an India based architects company (HQ - Kolkata).

                    <br/><br/>

                    We have delivered the following web services:-

                    <br/><br/>

                    *&nbsp;  Official Website design & development

                    <br/>

                    *&nbsp;  Website maintenance

                    <br/><br/>

                </p>

                <p class="portfolio" style="width:100px;margin-left:70px;">                    

                    <a href="http://www.prakalpaarchitects.com" target="_blank">

                        &nbsp;&nbsp;Visit Website

                    </a>

                </p>

            </div>

            <div class="two_third">

                <div class="flexslider">

                    <ul class="slides">

                        <li>

                            <img src="images/portfolio/nice.png" alt="nice" />

                        </li>

                    </ul>

                </div>

            </div>

            <div class="one_third lastcolumn">

                <h2>

                    NICE Computer Education

                </h2>

                <p>

                    NICE is a Nadia (West Bengal) based reputed computer training institute. 

                    <br/><br/>

                    We have provided the following services to this training institute :-

                    <br/><br/>

                    *&nbsp;	Software Development

                    <br/>

                    *&nbsp;	Hardware Support 

                    <br/>

                    *&nbsp;	Network Support

                    <br/>

                    *&nbsp;	AMC Service

                    <br/>

                    *&nbsp;	IT Training

                    <br/>                    

                </p>

                <!--

                <p class="portfolio">

                    <a href="#">

                        Project Details

                    </a> 

                    | 

                    <a href="#">

                        Visit Website

                    </a>

                </p>

                -->

            </div>

        </div>



        <!-- Portfolio Pagination ==================================================================================================== -->

        <div class="container"">

            <div id="pagination" class="fl">                    

                <!-- Pagination -->

                <ul class="pagination">

                    <li class='first-page'>

                        <a href="<?php echo $client;?>">

                            &laquo;

                        </a>

                    </li>

                    <li>

                        <a href="<?php echo $client;?>">

                            &lsaquo;

                        </a>

                    </li>

                    <li>

                        <a href="<?php echo $client;?>" id="currentPage">

                            1

                        </a>

                    </li>

                    <li>

                        <a href="<?php echo $client1;?>">

                            2

                        </a>

                    </li>



                    <!--As per need

                    <li><a href="portfolio.html">3</a></li>

                    <li><a href="#">4</a></li>

                    <li><a href='#' >&rsaquo;</a></li>                        

                    -->

                        

                    

                    <li>

                        <a href="<?php echo $client1;?>" >

                            &rsaquo;

                        </a>

                    </li>                        

                    <li class='last-page'>

                        <a href="<?php echo $client1;?>">

                            &raquo;

                        </a>

                    </li>

                </ul>

            </div>

            <!-- end pagination -->

        </div>

        <!-- end centerContainer -->

        

        <div style="min-height:100%;padding-bottom:50px;"></div>

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

