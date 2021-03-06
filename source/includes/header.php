<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title><?php echo $page_title;?></title>
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <meta name="description" content="NRDO">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Hind:400,700,600,500,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    
  </head>
  <body>
    <!--[if lt IE 8]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--[if lt IE 10]>
      <script src="/assets/js/css3-multi-column.js"></script>
    <![endif]-->

    <!-- Add your site or application content here -->
        
    <header class="header">
      <div class="wrapper">                      
        <div class="header-logo clearfix">
          <div class="logo-left">   
            <a href="http://www.hpb.gov.sg/" target="_blank"><img src="/assets/img/logo1.png" alt="logo1" /></a>
            <a href="http://www.moh.gov.sg/" target="_blank"><img src="/assets/img/logo2.png" alt="logo2" /></a>
          </div><!--   
      --> <div class="logo-right">
            <img src="/assets/img/logo3.png" alt="logo3" />
            <ul class="header-link">
              <li class="first"><a href="#">Contact Info</a></li>
              <li><a href="#">Feedback</a></li>
              <li class="last"><a href="/sitemap/">Sitemap</a></li>                                     
            </ul>
          </div>
        </div>  
        <div class="header-search clearfix">
          <p class="heading"><a href="https://www.nrdo.gov.sg/" target="_blank">National Registry of Diseases Office</a></p><!--
       --><div class="search1">
            <span class="button menu-button">Menu</span>
            <form>   
              <input type="text" class="head-search-input" placeholder="Search in NRDO website" /><a class="mobile-search-button" href="#"></a><span class="button">Search</span>
            </form>
          </div> 
        </div>
      </div>

      <nav class="primary-nav">  
        <div class="wrapper">
          <ul class="nav-bar">
            <li class="home-image <?php if($primary==1){ echo 'active';} ?>"><a href="/"><!--<img src="assets/img/home.png" />--><div class="home-icon <?php if($primary==1){ echo 'active-home';} ?>"></div></a></li>
            <li class="home-text <?php if($primary==1){ echo 'active-mobile';} ?>"><a href="/" class="menu-link">Home</a></li>
            <li class="<?php if($primary==2){ echo 'active active-mobile';} ?>"><a href="/about_us/" class="menu-link">About Us</a></li>
            <li class="<?php if($primary==3){ echo 'active active-mobile';} ?>"><a href="/publications/" class="has-sub" ><span>Publications</span></a><span class="menu-link sub-menu"></span>
              <ul class="inner-list">
                <li><a href="/publications/ami/"><span>Acute Myocardial Infarction (AMI)</span></a></li>
                <li><a href="/publications/cancer/"><span>Cancer</span></a></li>
                <li><a href='#'><span>Chronic Kidney Failure</span></a></li>
                <li><a href='#'><span>Stroke</span></a></li>
                <li class='last'><a href='#'><span>Trauma</span></a></li>
              </ul>
            </li>
            <li  class="<?php if($primary==4){ echo 'active active-mobile';} ?>"><a href="#" class="menu-link">Legislation</a></li>                                            
            <li><a href="#" class="has-sub" >Diseases Notification</a><span class="menu-link sub-menu"></span>
              <ul class="inner-list">
                <li><a href='#'><span>Acute Myocardial Infarction Notification</span></a></li>
                <li><a href='#'><span>Cancer Registry Notification</span></a></li>
                <li><a href='#'><span>Chronic Kidney Failure Notification</span></a></li>
                <li class='last'><a href='#'><span>Donor Care Registry Notification</span></a></li>
              </ul>
            </li>  
            <li class="<?php if($primary==6){ echo 'active active-mobile';} ?>"><a href="#" class="menu-link">Data Request</a></li>        
          </ul>  
        </div>                 
      </nav>
    </header><!--