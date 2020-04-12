<!DOCTYPE html>

<html lang="en">

    <head>

        <!-- Basic Page Needs ==================================================================================================== -->

        <meta charset="utf-8">        

        <title style="text-transform:uppercase;">NSS INFOTECH</title>

        <meta name="description" content="it service provider">

        <meta name="author" content="Indranil Das"/>        

        <!-- Mobile Specific Metas ==================================================================================================== -->

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

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

        <link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">            

        
        <?php

            include 'pageLink.php';

        ?>           
        
<!-- No Script ======================================================================================================= -->

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

                                    <a href="<?php echo $home;?>" id="visited" style="color:#00bf00;font-size:small;">

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

        <!-- Home Content Part - Slider ==================================================================================================== -->



        <div class="flexslider" style="height:350px;">

            <ul class="slides">

                <li>

                    <a href="#">

                        <img src="images/flexslider/network.jpg" height="350" width="1920" alt=""/>

                    </a>

                </li>

                <li>

                    <img src="images/flexslider/web.jpg" height="350" width="1920" alt="" /> 

                </li>

                <li>

                    <a href="#">

                        <img src="images/flexslider/sw.jpg" height="350" width="1920" alt="" />

                    </a>

                    

                    <!--Text in case necessary

                    <p class="flex-caption">

                        <!--Image Text

                        Welcome to Proximet Site. This is example of the Caption Title.

                    </p>

                    -->

                    

                </li>

            </ul>

        </div>

        <!-- Home Content Part - Box One ==================================================================================================== -->

        <div class="blankSeparator"></div>

        <div class="container">

            <div class="info">

                <div class="one_third">

                    <h2>

                        About Us

                    </h2>

                    <p style="font-size:medium;">

                        NSS Infotech is an IT Service based company formed in 201300. 

                        We are a small team of professionals from different IT domains. 

                        Being a small team, we value to work as a singular unit built 

                        with trust, commitment and dedication.                         

                    </p>

                    <a href="<?php echo $about;?>" title="" class="buttonhome">

                        &rarr; Continue Reading

                    </a> 

                </div>

                <div class="two_third lastcolumn">

                    <div class="one_half lastcolumn">

                        <h2>

                            Our Services

                        </h2>

                        <p style="font-size:medium;">

                            We are capable of delivering multiple IT related requirements.

                            We have a small team of professionals in different IT domains. 

                            Currently we provide the following services : 

                            <br/>

                            Network Solution,Desktop Support....

                        </p>

                        <a href="<?php echo $service;?>" title="" class="buttonhome">

                            &rarr; View Details

                        </a> 

                    </div>                    

                    <div class="one_half">

                        <h2>

                            Portfolio

                        </h2>

                        <p style="font-size:medium;">

                            We have successfully delivered various projects to our clients in this short span of time.

                            Some of our clients are : 

                            <br/>

                            Canara Bank(Boalia Branch,WB), Prakalpa Architects, NICE Computer Education....

                            <br/><br/>
                        </p>

                        <a href="<?php echo $client;?>" title="" class="buttonhome">

                            &rarr; Go to Portfolio Page

                        </a> 

                    </div>

                </div>

            </div>

        </div>

        <!-- container ends here --> 

        

        <!-- Home Content Part - Box Two ==================================================================================================== -->

        

        <div class="container clients">

            <div class="sepContainer"></div>

            <h2>

                Our Clients

            </h2>

            <div class="one_sixth"> 

                <img src="images/clients/canara.png" alt="Client 1"/> 

            </div>

            <div class="one_sixth"> 

                <img src="images/clients/it.png" alt="Client 2"/> 

            </div>

            <div class="one_sixth"> 

                <img src="images/clients/koark.png" alt="Client 3"/> 

            </div>

            <div class="one_sixth"> 

                <img src="images/clients/nice.png" alt="Client 4"/> 

            </div>

            <div class="one_sixth"> 

                <img src="images/clients/prakalpa.png" alt="Client 5"/>                

            </div>           

            <div class="info" style="margin-top:80px;">

                <a href="<?php echo $client;?>" title="" class="buttonhome">

                    &rarr; Show Complete List

                </a>                                 

            </div>

            <br/><br/><br/>

        </div>

        <!-- end container --> 

        

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