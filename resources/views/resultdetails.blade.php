{{-- <!DOCTYPE html>
 
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
 
         <title>Greylux Properties</title>
 
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 
         <!-- Styles -->
         <style>
             /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
         </style>
 
         <style>
             body {
                 font-family: 'Nunito';
             }
         </style>
     </head>
     <body class="antialiased">
         <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
             @if (Route::has('login'))
                 <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                     @auth
                         <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                     @else
                         <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
 
                         @if (Route::has('register'))
                             <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                         @endif
                     @endauth
                 </div>
             @endif
             <h1>Create Post</h1>
 
 @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif
 
           
         </div>
     </body>
 </html> --}}
 
 @extends('layouts.mainlayout')
 @section('content')
   
  <!--Loader-->
  <div class="loader">
     <div class="span">
         <div class="location_indicator"></div>
     </div>
 </div>
 <!--Loader-->
 
 
 <!--Slider-->
 <div class="rev_slider_wrapper">
     <div id="rev_overlaped" class="rev_slider" data-version="5.0">
         <ul>
             <!-- SLIDE -->
             <li data-transition="fade">
                 <img src="/frontend/images/home1-banner1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                     class="rev-slidebg">
             </li>
        
             <div class="tp-static-layers">
                 <div class="tp-caption tp-static-layer" id="slide-37-layer-2" data-x="['left','left','left','left']"
                     data-hoffset="['50','50','50','50']" data-y="['bottom','bottom','bottom','bottom']"
                     data-voffset="['230','180','150','100']" data-whitespace="nowrap"
                     data-visibility="['on','on','on','on']" data-fontsize="['48','48','28','28']" data-start="500"
                     data-responsive_offset="on" data-basealign="slide" data-startslide="0" data-endslide="5"
                     style="z-index: 5;">
                     <h1><span class="t_white">We Can Find just Right <br>Property for You.</span></h1>
                 </div>
                 <div class="tp-caption tp-static-layer" id="slide-37-layer-2" data-x="['left','left','left','left']"
                     data-hoffset="['50','50','50','50']" data-y="['bottom','bottom','bottom','bottom']"
                     data-voffset="['150','100','120','120']" data-whitespace="nowrap"
                     data-visibility="['on','on','on','on']" data-start="500" data-basealign="slide"
                     data-startslide="0" data-endslide="5" style="z-index: 5;">
                     <p class="t_white">We Deal with Different kinds of Properties No matter you need a House,
                         an Apartment or garage. <br> You’ll find a good option on our Theme.
                     </p>
                 </div>
                 <div class="tp-caption tp-static-layer" id="slide-37-layer-2" data-x="['left','left','left','left']"
                     data-hoffset="['50','50','50','50']" data-y="['bottom','bottom','bottom','bottom']"
                     data-voffset="['60','60','60','60']" data-whitespace="nowrap"
                     data-visibility="['on','on','on','on']" data-start="500" data-basealign="slide"
                     data-startslide="0" data-endslide="5" style="z-index: 5;"><a href="listing1.html"
                         class="btn-white border_radius uppercase">view Properties</a>
                 </div>
             </div>
         </ul>
     </div>
 </div>
 <!--Slider ends-->
 
 
 <!--Header-->
 <div id="mainMenuBarAnchor"></div>
 <header class="white_header">
     <nav class="navbar navbar-default bootsnav">
         <div class="container">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="attr-nav">
                         <div class="upper-column info-box first">
                             <div class="icons"><i class="icon-telephone114"></i></div>
                             <ul>
                                 <li><strong>Phone Number</strong></li>
                                 <li>+1 900 234 567 - 68</li>
                             </ul>
                         </div>
                     </div>
                     <div class="navbar-header">
                         <button type="button" class="navbar-toggle" data-toggle="collapse"
                             data-target="#navbar-menu">
                             <i class="fa fa-bars"></i>
                         </button>
                         <a class="navbar-brand" href="index6.html"><img src="images/logo.png" class="logo"
                                 alt=""></a>
                     </div>
                     <div class="collapse navbar-collapse" id="navbar-menu">
                         <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                             <li class="dropdown active">
                                 <a href="#." class="dropdown-toggle" data-toggle="dropdown">Home </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="index-1.html">Home Style 1</a></li>
                                     <li><a href="index2.html">Home Style 2</a></li>
                                     <li><a href="index3.html">Home Style 3</a></li>
                                     <li><a href="index4.html">Home Style 4</a></li>
                                     <li> <a href="index5.html">Home Style 5</a></li>
                                     <li> <a href="index6.html">Home Style 6</a></li>
                                     <li> <a href="index7.html">Home Style 7</a></li>
                                     <li> <a href="index8.html">Home Style 8</a></li>
                                     <li> <a href="index9.html">Home Style 9</a></li>
                                     <li> <a href="fullscreen.html">Home Fullscreen<span>new</span></a></li>
                                 </ul>
                             </li>
                             <li class="dropdown megamenu-fw">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Listing</a>
                                 <ul class="dropdown-menu megamenu-content" role="menu">
                                     <li>
                                         <div class="row">
                                             <div class="col-menu col-md-3">
                                                 <h5 class="title">PROPERTIES LIST</h5>
                                                 <div class="content">
                                                     <ul class="menu-col">
                                                         <li><a href="listing1.html">Properties List</a></li>
                                                         <li><a href="index7.html">Single Property</a></li>
                                                         <li><a href="listing2.html">Search by City</a></li>
                                                         <li><a href="listing5.html">Search by Category</a></li>
                                                         <li><a href="listing3.html">Search by Type</a></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <div class="col-menu col-md-9">
                                                 <h5 class="title bottom20">PROPERTIES LIST</h5>
                                                 <div class="row">
                                                     <div id="nav_slider" class="owl-carousel">
                                                         <div class="item">
                                                             <div class="image bottom15">
                                                                 <img src="images/nav-slider1.jpg"
                                                                     alt="Featured Property">
                                                                 <span class="nav_tag yellow text-uppercase">for
                                                                     rent</span>
                                                             </div>
                                                             <h4><a href="property_detail1.html">Park Avenue
                                                                     Apartment</a></h4>
                                                             <p>Towson London, MR 21501</p>
                                                         </div>
                                                         <div class="item">
                                                             <div class="image bottom15">
                                                                 <img src="images/nav-slider2.jpg"
                                                                     alt="Featured Property">
                                                                 <span class="nav_tag yellow text-uppercase">for
                                                                     rent</span>
                                                             </div>
                                                             <h4><a href="property_detail2.html">Park Avenue
                                                                     Apartment</a></h4>
                                                             <p>Towson London, MR 21501</p>
                                                         </div>
                                                         <div class="item">
                                                             <div class="image bottom15">
                                                                 <img src="images/nav-slider3.jpg"
                                                                     alt="Featured Property">
                                                                 <span class="nav_tag yellow text-uppercase">for
                                                                     rent</span>
                                                             </div>
                                                             <h4><a href="property_detail3.html">Park Avenue
                                                                     Apartment</a></h4>
                                                             <p>Towson London, MR 21501</p>
                                                         </div>
                                                         <div class="item">
                                                             <div class="image bottom15">
                                                                 <img src="images/nav-slider1.jpg"
                                                                     alt="Featured Property">
                                                                 <span class="nav_tag yellow text-uppercase">for
                                                                     rent</span>
                                                             </div>
                                                             <h4><a href="property_detail1.html">Park Avenue
                                                                     Apartment</a></h4>
                                                             <p>Towson London, MR 21501</p>
                                                         </div>
                                                         <div class="item">
                                                             <div class="image bottom15">
                                                                 <img src="images/nav-slider2.jpg"
                                                                     alt="Featured Property">
                                                                 <span class="nav_tag yellow text-uppercase">for
                                                                     rent</span>
                                                             </div>
                                                             <h4><a href="property_detail2.html">Park Avenue
                                                                     Apartment</a></h4>
                                                             <p>Towson London, MR 21501</p>
                                                         </div>
                                                         <div class="item">
                                                             <div class="image bottom15">
                                                                 <img src="images/nav-slider3.jpg"
                                                                     alt="Featured Property">
                                                                 <span class="nav_tag yellow text-uppercase">for
                                                                     rent</span>
                                                             </div>
                                                             <h4><a href="property_detail3.html">Park Avenue
                                                                     Apartment</a></h4>
                                                             <p>Towson London, MR 21501</p>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </li>
                                 </ul>
                             </li>
                             <li class="dropdown megamenu-fw">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                                 <ul class="dropdown-menu megamenu-content bg" role="menu">
                                     <li>
                                         <div class="row">
                                             <div class="col-menu col-md-3">
                                                 <h5 class="title">PROPERTY LISTINGS</h5>
                                                 <div class="content">
                                                     <ul class="menu-col">
                                                         <li><a href="listing1.html">List Style 1</a></li>
                                                         <li><a href="listing2.html">List Style 2</a></li>
                                                         <li><a href="listing3.html">List Style 3</a></li>
                                                         <li><a href="listing4.html">List Style 4</a></li>
                                                         <li><a href="listing5.html">List Style 5</a></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <div class="col-menu col-md-3">
                                                 <h5 class="title">PROPERTY LISTINGS</h5>
                                                 <div class="content">
                                                     <ul class="menu-col">
                                                         <li><a href="listing6.html">List Style 5</a></li>
                                                         <li><a href="listing7.html">List Style 6</a></li>
                                                         <li><a href="listing1.html">Search by City</a></li>
                                                         <li><a href="listing2.html">Search by Category</a></li>
                                                         <li><a href="listing3.html">Search by Type</a></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <div class="col-menu col-md-3">
                                                 <h5 class="title">PROPERTY DETAIL</h5>
                                                 <div class="content">
                                                     <ul class="menu-col">
                                                         <li><a href="property_detail1.html">Property Detail 1</a>
                                                         </li>
                                                         <li><a href="property_detail2.html">Property Detail 2</a>
                                                         </li>
                                                         <li><a href="property_detail3.html">Property Detail 3</a>
                                                         </li>
                                                         <li><a href="index7.html">Single Property</a></li>
                                                         <li><a href="listing4.html">Search by Type</a></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <div class="col-menu col-md-3">
                                                 <h5 class="title">OTHER PAGES</h5>
                                                 <div class="content">
                                                     <ul class="menu-col">
                                                         <li><a href="favorite_properties.html">Favorite
                                                                 Properties</a></li>
                                                         <li><a href="agent_profile.html">Agent Profile</a></li>
                                                         <li><a href="404.html">404 Error</a></li>
                                                         <li><a href="contact.html">Contact Us</a></li>
                                                         <li><a href="testimonial.html">Testimonials</a></li>
                                                     </ul>
                                                 </div>
                                             </div>
                                         </div>
                                     </li>
                                 </ul>
                             </li>
                             <li class="dropdown">
                                 <a href="#." class="dropdown-toggle" data-toggle="dropdown">Features </a>
                                 <ul class="dropdown-menu">
                                     <li class="dropdown">
                                         <a href="#." class="dropdown-toggle" data-toggle="dropdown">News</a>
                                         <ul class="dropdown-menu">
                                             <li><a href="news.html">news Style1</a></li>
                                             <li><a href="news2.html">news Style2<span>new</span></a></li>
                                             <li><a href="news3.html">news Style3<span>new</span></a></li>
                                         </ul>
                                     </li>
                                     <li class="dropdown">
                                         <a href="#." class="dropdown-toggle" data-toggle="dropdown">Property
                                             Agents</a>
                                         <ul class="dropdown-menu">
                                             <li><a href="agent1.html">Agent Style1</a></li>
                                             <li><a href="agent2.html">Agent Style2</a></li>
                                             <li><a href="agent3.html">Agent Style3<span>new</span></a></li>
                                             <li><a href="agent4.htm4">Agent Style4<span>new</span></a></li>
                                             <li><a href="agent5.htm5">Agent Style5<span>new</span></a></li>
                                         </ul>
                                     </li>
                                     <li class="dropdown">
                                         <a href="#." class="dropdown-toggle" data-toggle="dropdown">Agetn Profile
                                             Styles</a>
                                         <ul class="dropdown-menu">
                                             <li><a href="agent_profile.html">Agent Profile 1</a></li>
                                             <li><a href="agent_profile2.html">Agent Profile 2</a></li>
                                         </ul>
                                     </li>
                                     <li class="dropdown">
                                         <a href="#." class="dropdown-toggle" data-toggle="dropdown">Testimonials</a>
                                         <ul class="dropdown-menu">
                                             <li><a href="testimonial.html">Style 1</a></li>
                                             <li><a href="testimonial2.html">Style 2<span>new</span></a></li>
                                         </ul>
                                     </li>
                                     <li class="dropdown">
                                         <a href="#." class="dropdown-toggle" data-toggle="dropdown">FAQ's</a>
                                         <ul class="dropdown-menu">
                                             <li><a href="faq.html">Style 1</a></li>
                                             <li><a href="faq2.html">Style 2<span>new</span></a></li>
                                         </ul>
                                     </li>
                                     <li><a href="favorite_properties.html">Favorite Properties</a></li>
                                     <li class="dropdown">
                                         <a href="#." class="dropdown-toggle" data-toggle="dropdown">404 Error</a>
                                         <ul class="dropdown-menu">
                                             <li><a href="404.html">404 Error 1</a></li>
                                             <li><a href="404-2.html">404 Error 2<span>new</span></a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>
                             <li><a href="contact.html">Contact Us</a></li>
                             <li><a href="#.">Buy Now</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </nav>
 </header>
 <!--Header Ends-->
 
 
 
 
 <button type="button" class="form_opener"><i class="fa fa-bars"></i></button>
 <div class="tp_overlay">
     <div class="topbar clearfix">
         <ul class="breadcrumb_top">
             <li><a href="favorite_properties.html"><i class="icon-icons43"></i>Favorites</a></li>
             <li><a href="submit_property.html"><i class="icon-icons215"></i>Submit Property</a></li>
             <li><a href="my_properties.html"><i class="icon-icons215"></i>My Property</a></li>
             <li><a href="profile.html"><i class="icon-icons230"></i>Profile</a></li>
             <li><a href="login.html"><i class="icon-icons179"></i>Login / Register</a></li>
             <li class="last-icon"><i class="icon-icons215"></i></li>
         </ul>
     </div>
 
     <form class="callus top30 clearfix centered">
         <h2 class="text-uppercase t_white bottom20 text-center">advanced search</h2>
         <div class="row">
             <div class="col-sm-6">
                 <div class="single-query bottom15">
                     <input type="text" class="keyword-input" placeholder="Keyword (e.g. 'office')">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="single-query bottom15">
                     <div class="intro">
                         <select>
                             <option selected="" value="any">Location</option>
                             <option>All areas</option>
                             <option>Bayonne </option>
                             <option>Greenville</option>
                             <option>Manhattan</option>
                             <option>Queens</option>
                             <option>The Heights</option>
                         </select>
                     </div>
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="single-query bottom15">
                     <div class="intro">
                         <select>
                             <option class="active">Property Type</option>
                             <option>All areas</option>
                             <option>Bayonne </option>
                             <option>Greenville</option>
                             <option>Manhattan</option>
                             <option>Queens</option>
                             <option>The Heights</option>
                         </select>
                     </div>
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="single-query bottom15">
                     <div class="intro">
                         <select>
                             <option class="active">Property Status</option>
                             <option>All areas</option>
                             <option>Bayonne </option>
                             <option>Greenville</option>
                             <option>Manhattan</option>
                             <option>Queens</option>
                             <option>The Heights</option>
                         </select>
                     </div>
                 </div>
             </div>
             <div class="search-2">
                 <div class="col-md-3 col-sm-6 col-xs-6">
                     <div class="single-query bottom15">
                         <div class="intro">
                             <select>
                                 <option class="active">Min Beds</option>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                                 <option>6</option>
                             </select>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 col-xs-6">
                     <div class="single-query bottom15">
                         <div class="intro">
                             <select>
                                 <option class="active">Min Baths</option>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                                 <option>6</option>
                             </select>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-3 col-sm-6 col-xs-6">
                 <div class="single-query bottom15">
                     <input type="text" class="keyword-input" placeholder="Min Area (sq ft)">
                 </div>
             </div>
             <div class="col-md-3 col-sm-6 col-xs-6">
                 <div class="single-query bottom15">
                     <input type="text" class="keyword-input" placeholder="Max Area (sq ft)">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-8 col-sm-8 col-xs-8 bottom15">
                 <div class="single-query-slider">
                     <div class="clearfix top20">
                         <label class="pull-left">Price Range:</label>
                         <div class="price text-right">
                             <span>$</span>
                             <div class="leftLabel"></div>
                             <span>to $</span>
                             <div class="rightLabel"></div>
                         </div>
                     </div>
                     <div data-range_min="0" data-range_max="1500000" data-cur_min="0" data-cur_max="1500000"
                         class="nstSlider">
                         <div class="bar"></div>
                         <div class="leftGrip"></div>
                         <div class="rightGrip"></div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4 col-sm-4 col-xs-4 text-right form-group top30">
                 <button type="submit" class="border_radius btn-yellow text-uppercase">Search</button>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-12">
                 <div class="group-button-search">
                     <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter">
                         <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide"
                             aria-hidden="true"></i>
                         <div class="text-1">Show more search options</div>
                         <div class="text-2 hide">less more search options</div>
                     </a>
                 </div>
                 <div class="search-propertie-filters collapse">
                     <div class="container-2">
                         <div class="row">
                             <div class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="search-form-group white bottom10">
                                     <input type="checkbox" name="check-box">
                                     <span>Features</span>
                                 </div>
                             </div>
                             <div class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="search-form-group white bottom10">
                                     <input type="checkbox" name="check-box">
                                     <span>Balcony</span>
                                 </div>
                             </div>
                             <div class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="search-form-group white bottom10">
                                     <input type="checkbox" name="check-box">
                                     <span>Gas Heat</span>
                                 </div>
                             </div>
                             <div class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="search-form-group white bottom10">
                                     <input type="checkbox" name="check-box">
                                     <span>Washer, Dryer</span>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="search-form-group white bottom10">
                                     <input type="checkbox" name="check-box">
                                     <span>TV Cable</span>
                                 </div>
                             </div>
                             <div class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="search-form-group white bottom10">
                                     <input type="checkbox" name="check-box">
                                     <span>Swimming Pool</span>
                                 </div>
                             </div>
                             <div class="col-md-3 col-sm-6 col-xs-12">
                                 <div class="search-form-group white bottom10">
                                     <input type="checkbox" name="check-box">
                                     <span>Home Theater</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </form>
 </div>
 
 
 
 <!--Deals-->
 

<!-- Property Detail Start -->
@foreach($properties as $property)     
<section id="property" class="padding_top padding_bottom_half">
  <div class="container">
    <div class="row">
      <div class="col-md-12 listing1 property-details">
        <h2 class="text-uppercase">{{$property->name}}</h2>
              
        <div class="col-md-4">
    <div class="thumbnail">
        <img src="{{$property->photo_path}}" alt="Lights" style="width:100%">
        <div class="caption">

        </div>

    </div>
  </div>
 
  <div class="col-md-12 col-sm-12 mt-3 mb-5">
      <h3 class="text-center mb-3">Property Description</h3>
      <h5 class="m-3">{{$property->description}}</h5>
  </div>
  <div class="">
    <div   class="col-md-12 col-sm-12 mt-3">
    <h3 class="text-center mb-3">Quick Summary</h3>
    <div class="row property-d-table bottom40">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>Property Id</b></td>
                  <td class="text-right">{{$property->id}}</td>
                </tr>
                <tr>
                  <td><b>Property Type</b></td>
                  <td class="text-right">{{$property->property_type}}</td>
                </tr>
                <tr>
                  <td><b>Featured</b></td>
                  <td class="text-right">{{$property->featured}}</td>
                </tr>
                <tr>
                  <td><b>Location</b></td>
                  <td class="text-right">{{$property->location}}</td>
                </tr>
                <tr>
                  <td><b>State of property</b></td>
                  <td class="text-right">{{$property->state_of_property}}</td>
                </tr>

                <tr>
                  <td><b>Price</b></td>
                  <td class="text-right">{{$property->price}}</td>
                </tr>
                <tr>
                  <td><b>Property Size</b></td>
                  <td class="text-right">{{$property->land_size}}</td>
                </tr>
                <tr>
                  <td><b>Bedrooms</b></td>
                  <td class="text-right">{{$property->beds}}</td>
                </tr>
                <tr>
                  <td><b>Bathrooms</b></td>
                  <td class="text-right">{{$property->bath}}</td>
                </tr>
                <tr>
                  <td><b>Impresions</b></td>
                  <td class="text-right">{{$property->impresions}}</td>
                </tr>
                <tr>
                  <td><b>Shares</b></td>
                  <td class="text-right">{{$property->shares}}</td>
                </tr>
                <tr>
                  <td><b>Saves</b></td>
                  <td class="text-right">{{$property->saves}}</td>
                </tr>
                <tr>
                  <td><b>Created at</b></td>
                  <td class="text-right">{{$property->created_at}}</td>
                </tr>
                <tr>
                  <td><b>Last updated</b></td>
                  <td class="text-right">{{$property->updated_at}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <table class="table table-striped table-responsive">
              <tbody>
                <tr>
                  <td><b>Status</b></td>
                  <td class="text-right">{{$property->status}}</td>
                </tr>
                <tr>
                  <td><b>Owner</b></td>
                  <td class="text-right">{{$property->owner}}</td>
                </tr>
                <tr>
                  <td><b>Agent</b></td>
                  <td class="text-right">{{$property->agent}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
          <div >
          <h2 class="text-uppercase bottom20">Contact Agent</h2>
        <div class="row">
          <div class="col-sm-6 bottom40">
            <div class="agent_wrap">
              <div class="image">
                <img src="frontend/images/home1-banner1.jpg" alt="Agents">
              </div>
            </div>
          </div>
          <div class="col-sm-6 bottom40">
            <div class="agent_wrap">
              <h3>{{$property->agent}}</h3>
              <p class="bottom30">Brief description of agent</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+234) 90779090</td>
                  </tr>
                  <tr class="bottom10">
                    <td><strong>Mobile:</strong></td>
                    <td class="text-right">(+234) 90779090</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">agent@greyluxassets.com</a></td>
                  </tr>
                  <tr>
                    <td><strong>Skype:</strong></td>
                    <td class="text-right"><a href="#.">live:kunleMohamed</a></td>
                  </tr>
                </tbody>
              </table>
          </div>
          </div>
  </div>

     
      </div>
      
  
    </div>
  </div>
</section>

@endforeach
 <!--Deals ends-->
 
 
 <!--About Owner ends-->
 
 
 <!--Testinomials-->
 
 <!--Testinomials ends-->
 
 
 <!--Partners-->
 
 <!--Partners Ends-->
     @endsection