<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Under Construction</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        
        <link rel="stylesheet" href="css/main.css">
        <script src="js/libs/Modernizr-2.8.2.min.js"></script>
    </head>
        
    <?php $pageName = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4); ?>
	<body class="<?php echo $pageName; ?>">
  	<!--[if lt IE 8]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- mainNav -->
    <nav class='headerNav' id='mainNav'>
		<div class="vectorMeWrap"><img class="vectorMe" src="images/vectorMe.png"/></div>
        <ul>
            <li><a href='profile.php' class='navLinks'>Profile</a></li>
            <li><a href='about.php' class='navLinks'>Recent Work</a></li>
            <li><a href='faq.php' class='navLinks'>Contact</a></li>
        </ul>
    </nav>
    <section class="pageWrap">
		<header>
        	<div class="container">
            	<!-- headerLogo -->
            	<a href="/" class="logoLink">
				
					<svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="70px" height="70px" viewBox="0 0 60 60" 
					enable-background="new 0 0 60 60" xml:space="preserve">
						<path class="path"  fill="transparent" stroke="#3498DB" stroke-width="1" d="M29.393,0.292L3.666,15.146v29.708l25.728,14.854l25.728-14.854V15.146L29.393,0.292z M45.506,29.117h-6.748
							v-7.266c-2.742,0-2.373,1.928-2.373,1.928s0,10.232,0,12.753c0,2.521,2.373,2.002,2.373,2.002v-6.896h6.748v11.639
							c0,0-11.346-0.014-11.717,0c-4.273-1.033-4.474-3.876-4.457-4.583c-0.104,4.505-4.347,4.583-4.347,4.583H12.88V31.666h6.747v6.868
							c2.596,0,2.225-2.002,2.225-2.002s0-10.231,0-12.753s-2.225-1.928-2.225-1.928v7.266H12.88V17.19c0,0,2.003,0.001,8.972,0
							c6.971-0.001,7.489,4.661,7.489,4.661c0-4.82,6.637-4.66,6.637-4.66h9.527V29.117z"/>
						<path fill="#3498DB" d="M29.394,25.458c-0.047,0-0.088,0.028-0.117,0.071c-0.03,0.046-0.049,0.106-0.049,0.175V30v4.293
							c0,0.068,0.019,0.132,0.049,0.177c0.029,0.044,0.07,0.072,0.117,0.072c0.045,0,0.086-0.028,0.115-0.072
							c0.031-0.045,0.049-0.108,0.049-0.177V30v-4.296c0-0.068-0.018-0.129-0.049-0.175C29.48,25.486,29.439,25.458,29.394,25.458z"/>
					</svg>
                    <!--<svg class="logoSVG" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="55" height="65" viewBox="0 0 44.373 51.236" enable-background="new 0 0 44.373 51.236" xml:space="preserve">
                    <path class="path" fill="transparent" stroke="#3498DB" stroke-width="1" stroke-miterlimit="15" d="M22.187,0.577L0.5,13.098v25.041l21.687,12.521l21.687-12.521
                        V13.098L22.187,0.577z M35.768,24.875H30.08V18.75c-2.313,0-2,1.625-2,1.625s0,8.625,0,10.75s2,1.688,2,1.688V27h5.688v9.81
                        c0,0-9.563-0.011-9.875,0c-3.602-0.871-3.772-3.268-3.758-3.862c-0.087,3.797-3.664,3.862-3.664,3.862H8.268v-9.787h5.688v5.79
                        c2.188,0,1.875-1.688,1.875-1.688s0-8.625,0-10.75s-1.875-1.625-1.875-1.625v6.125H8.268V14.821c0,0,1.688,0,7.563,0
                        s6.313,3.929,6.313,3.929c0-4.063,5.594-3.928,5.594-3.928h8.031V24.875z"/>
                    </svg>
                     <h1 class="logo">David<span class="logoLight">Conner</span></h1>-->
					<hr/>
                </a>
                <!-- navToggle -->
                <a class="navToggle">   
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="38px" height="33px" viewBox="0 0 38 33" enable-background="new 0 0 38 33" xml:space="preserve">
						
						<rect x="14" y="3" fill="#fff" width="10" height="9"/>
						<rect y="12" x="4" fill="#fff" width="10" height="9"/>
						<rect x="14" y="12" fill="#fff" width="10" height="9"/>
						
						<rect x="14" y="20" fill="#fff" width="10" height="9"/>
						<rect x="24" y="12" fill="#fff" width="10" height="9"/>
					</svg>
				</a>
            </div>
        </header>