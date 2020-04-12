<!DOCTYPE html>
<html lang="en">
    <head>

<!-- Basic Page Needs ==================================================================================================== -->

        <meta charset="utf-8">
        <title style="text-transform:uppercase;">NSS INFOTECH</title>
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
                                    <a href="<?php echo $service;?>" id="visited" style="color:#00bf00;font-size:small;">
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
        
        <div class="container" style="font-size:medium;">
            <br/><br/>            
            <p style="font-size:15px;">
                <img src="images/services/Service.png" alt="services"/>
                <br/>
                We are expertised in different domains. Currently we provide the following services :
                <br/>
                <span style="font-size:smaller;color:red;">
                    Click on Plus sign to toggle
                </span>
            </p>
            
            <!-- Toggle Style-->            
            <div class="toggle-trigger">
                Network Solution
            </div>
            <div class="toggle-container">
                <p>
                    <table style="color:black;font-size:15px;">
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                Structured Cabling Service
                            </td>
                            <td style="color:red;padding-left:250px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                LAN/WAN Network infrastructure Setup
                            </td>                            
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Wireless Network infrastructure Setup
                            </td>
                            <td style="color:red;padding-left:250px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Network design implementation
                            </td>                                                        
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Network design troubleshooting
                            </td>
                            <td style="color:red;padding-left:250px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Network support and management
                            </td>                                                        
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Network Integration Service
                            </td>
                            <td style="color:red;padding-left:250px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Network Troubleshooting
                            </td>                                                        
                        </tr>                        
                    </table>
                </p>
            </div>
            <div class="toggle-trigger">
                Desktop Support
            </div>
            <div class="toggle-container">
                <p>
                    <table style="color:black;font-size:15px;">
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td style="">
                                Windows Client & Server OS Installation,Migration and Support
                            </td>
                            <td style="color:red;padding-left:50px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td style="">
                                Computer Assembling and Repairing                                
                            </td>                            
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td style="">
                                <br/>
                                Linux Client & Server OS Installation, Migration and Support                                                                
                            </td>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td style="">
                                <br/>   
                                Microsoft Office Installation, Support, and Migration
                            </td>                                                        
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td style="">
                                <br/>  
                                Upgrading Desktops with 64-bit Applications and Operating Systems
                            </td>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td style="">
                                <br/>
                                Third Party Software Installation and Support                                
                            </td>                                                        
                        </tr>
                    </table>
                </p>
            </div>
            <div class="toggle-trigger">
                Security Solution
            </div>
            <div class="toggle-container">
                <p>
                    <table style="color:black;font-size:15px;">
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                Determining network security needs which includes open port(s) on a network, anti-virus protection status, firewall status, and more and providing necessary solutions.                                
                            </td>                           
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Pfsence Firewall Installation: Protects your company's servers and e-mail system from hackers and intrusions. This product has many add-ons, subscription-based features that require no additional installation. This product also is scalable and can grow as your business grows.
                            </td>                                                        
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Secure VPN Installation: Allows for remote access to your company's server, enabling employees to stay in touch no matter where they are. 
                            </td>
                        </tr>                     
                    </table>
                </p>
            </div>
            <div class="toggle-trigger">
                Network Monitoring
            </div>
            <div class="toggle-container">
                <p>
                    <table style="color:black;font-size:15px;">
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                Event Log Monitoring: Keeps a continuous log of any network events to avoid any performance degradation.
                            </td>                           
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Drive Space Monitoring: Continuously monitors hard disk space and alerts when approaching limits.
                            </td>                                                        
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Server Backup Management: Monitors and administers daily server back up for optimum security.
                            </td>
                        </tr>                     
                    </table>
                </p>
            </div>
            <div class="toggle-trigger">
                Web Design & Development
            </div>
            <div class="toggle-container">
                <p>
                <p>
                    <table style="color:black;font-size:15px;">
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                End to End Service for Customer’s Web requirements.
                            </td>                           
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Responsive Web design
                            </td>                           
                        </tr>                        
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Be it a small website or a high end portal, we provide all web related needs.
                            </td>                                                        
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Some of our working domains :-
                                <table>
                                    <tr>
                                        <td>
                                            <ul style="padding-left:30px;">
                                                <li>
                                                    * Simple HTML Websites
                                                </li> 
                                                <li>
                                                    * Dynamic Websites
                                                </li>
                                                <li>
                                                    * CMS Applications and more
                                                </li>
                                            </ul>                                                                                                
                                        </td>
                                    </tr>
                                </table>
                            </td>                                                        
                        </tr>                        
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Web technologies we work with :-
                                <table>
                                    <tr>
                                        <td style="padding-left:30px;color:red;">
                                            √&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            Front End
                                            <ul style="padding-left:20px;">
                                                <li>
                                                    * Html5
                                                </li> 
                                                <li>
                                                    * Css3
                                                </li>
                                                <li>
                                                    * JavaScript
                                                </li>
                                                <li>
                                                    * Jquery and more
                                                </li>
                                            </ul>                                                                                                
                                        </td>
                                        <td style="padding-left:50px;color:red;">
                                            √&nbsp;&nbsp;
                                        </td>                    
                                        <td>
                                            Server Side
                                            <ul style="padding-left:20px;">
                                                <li>
                                                    * J2EE
                                                </li> 
                                                <li>
                                                    * ASP.Net
                                                </li>
                                                <li>
                                                    * PHP
                                                </li>
                                                <li>
                                                    * Python and more
                                                </li>
                                            </ul>                                                                                                                                            
                                        </td>
                                        <td style="padding-left:50px;color:red;">
                                            √&nbsp;&nbsp;
                                        </td>                    
                                        <td>
                                            Data Tier
                                            <ul style="padding-left:20px;">
                                                <li>
                                                    * Oracle
                                                </li> 
                                                <li>
                                                    * SQL Server
                                                </li>
                                                <li>
                                                    * MySQL
                                                </li>
                                                <li>
                                                    * XML and more
                                                </li>
                                            </ul>                                                                                                                                            
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>
                        </tr>                     
                    </table>
                </p>
            </div>
            <div class="toggle-trigger">
                Software Development
            </div>
            <div class="toggle-container">
                <p>
                    <table style="color:black;font-size:15px;">
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                We are capable of delivering small to medium scale software applications.
                            </td>                           
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Windows OS based software development.
                            </td>                                                        
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Small Android applications.
                            </td>
                        </tr>                     
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                A few areas involving software development :-
                                <table>
                                    <tr>
                                        <td>
                                            <ul style="padding-left:30px;">
                                                <li>
                                                    * Accounting and Finance.
                                                </li> 
                                                <li>
                                                    * Small CRM Applications
                                                </li>
                                                <li>
                                                    * Data driven applications
                                                </li>
                                            </ul>                                                                                                
                                        </td>
                                    </tr>
                                </table>                                
                            </td>
                        </tr>                                             
                    </table>                    
                </p>
            </div>
            <div class="toggle-trigger">
                Database Support
            </div>
            <div class="toggle-container">
                <p>
                    <table style="color:black;font-size:15px;">
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td style="">                                
                                Database Administration Support for Various Database Platforms.
                            </td>
                            <td style="color:red;padding-left:60px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td style="">
                                Database Design
                            </td>                            
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td style="">
                                <br/>
                                Backup and Recovery
                            </td>
                            <td style="color:red;padding-left:60px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td style="">
                                <br/>   
                                Database Performance Tuning with utilities.
                            </td>                                                        
                        </tr>
                    </table>
                </p>
            </div>
            <div class="toggle-trigger">
                AMC Solutions
            </div>
            <div class="toggle-container">
                <p>
                    <table style="color:black;font-size:15px;">
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                Annual Maintenance Contract for Desktop.
                            </td>                           
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Annual Maintenance Contract for Server.
                            </td>                                                        
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Annual Maintenance Contract for Network Infrastructure.
                            </td>
                        </tr>                     
                    </table>
                </p>
            </div>
            <div class="toggle-trigger">
                Antivirus Solutions
            </div>
            <div class="toggle-container">
                <p>
                    <table style="color:black;font-size:15px;">
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                Antivirus protection for Desktop Level.
                            </td>                           
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Antivirus protection for Server Level. 
                            </td>                                                        
                        </tr>                 
                    </table>
                </p>
            </div>
            <div class="toggle-trigger">
                IT Training
            </div>
            <div class="toggle-container">
                <p>
                    <table style="color:black;font-size:15px;">
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                Apart from providing IT services, we are also engaged in providing IT Training.
                            </td>                           
                        </tr>
                        <tr>
                            <td style="color:red;padding-left:50px;">
                                <br/>
                                √&nbsp;&nbsp;
                            </td>
                            <td>
                                <br/>
                                Different IT training modules :-                                
                                <table>
                                    <tr>
                                        <td style="padding-left:30px;color:red;">
                                            √&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            Software Modules
                                            <br/>
                                            <span style="padding-left:20px;color:red;">
                                                √&nbsp;&nbsp;
                                            </span>
                                            Core Programming Languages & Technologies
                                            <ul style="padding-left:50px;">
                                                <li>
                                                    * C
                                                </li> 
                                                <li>
                                                    * C++
                                                </li>
                                                <li>
                                                    * Java
                                                </li>
                                                <li>
                                                    * C#
                                                </li>
                                                <li>
                                                    * VB
                                                </li>
                                                <li>
                                                    * Python
                                                </li>    
                                                <li>
                                                    * Basics of Swing
                                                </li>
                                                <li>
                                                    * Winforms development using C#
                                                </li>
                                                <li>
                                                    * Project Training
                                                </li>
                                            </ul>                                                                                                
                                        </td>
                                        <td>
                                            <br/>
                                            <span style="padding-left:10px;color:red;">
                                                √&nbsp;&nbsp;
                                            </span>
                                            Web based Technologies
                                            <ul style="padding-left:50px;">
                                                <li>
                                                    * J2EE
                                                    <br/>
                                                    (JDBC, Servlet, JSP, Javabean)
                                                </li> 
                                                <li>
                                                    * ASP.Net(C#)
                                                </li>
                                                <li>
                                                    * PHP(4 and Above)
                                                </li>
                                                <li>
                                                    * Basics of Perl
                                                </li>
                                                <li>
                                                    * XML
                                                </li>
                                                <li>
                                                    * Project Training
                                                </li>                                                
                                            </ul>                                                                                                
                                        </td>                                        
                                        <td>
                                            <br/>
                                            <span style="padding-left:10px;color:red;">
                                                √&nbsp;&nbsp;
                                            </span>
                                            Database
                                            <ul style="padding-left:50px;">
                                                <li>
                                                    * SQL
                                                </li> 
                                                <li>
                                                    * Pl-SQL
                                                    <br/>
                                                    * Platforms :- 
                                                    <br/>
                                                    Oracle, SQL Server, MySQL
                                                </li>                                                
                                            </ul>                                                                                                
                                        </td>                                                                                
                                    </tr>
                                    <tr>
                                        <td style="padding-left:30px;color:red;">
                                            <br/>
                                            √&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            <br/>
                                            IT Training for Hardware.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-left:30px;color:red;">
                                            <br/>
                                            √&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            <br/>
                                            IT Training for Basic Networking.
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td style="padding-left:30px;color:red;">
                                            <br/>
                                            √&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            <br/>
                                            IT Training for Advance System  Network (Industry Base)
                                            <br/>
                                            <ul style="padding-left:50px;">
                                                <li>
                                                    * Microsoft Certified Solutions Associate (MCSA)
                                                </li> 
                                                <li>
                                                    * Microsoft Certified System Engineer (MCSE)
                                                </li>
                                                <li>
                                                    * Cisco Certified Network associate (CCNA)
                                                </li>
                                                <li>
                                                    * Cisco Certified Network Professional (CCNP)
                                                </li>
                                                <li>
                                                    * RedHat certified System Administrator (RHCSA)
                                                </li>
                                                <li>
                                                    * RedHat certified Engineer (RHCE)
                                                    <br/><br/>
                                                </li>    
                                            </ul>                                            
                                        </td>
                                    </tr>
                                </table>
                            </td>                                                        
                        </tr>                 
                    </table>
            </div>            
            
        <!-- ENDS Toggle --> 
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
