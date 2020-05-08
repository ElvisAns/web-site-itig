<?php if ( ! defined('BASEPATH')) exit('No direct script accessallowed');?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title><?=$titre?></title>
	<meta name="theme-color" content="#014464"> <!--la couleur sur la barre de notification -->
	<meta name='viewport' content='width=device-width, initial-scale=1.0' >
	<meta name="description" content="La Portaille officielle de l'institut Tehnique Industriel de Goma ">
	<meta property="og:title" content="ITIG Goma">
	<meta property="og:type" content="website">
	<meta property="fb:app_id" content="246270049874183">
	<meta property="og:description" content="La Portail officiel de l'institut Tehnique Industriel de Goma">
	<meta property="og:image" content="<?php echo img_url('logo.png')?>">
	<meta property="og:image:width" content="150">
	<meta property="og:image:height" content="150">
	<meta property="og:url" content="<?php echo site_url()?>">

   	<link rel="icon" type="image/png" href="<?php echo img_url('favicon.png')?>">
    <link href="<?=css_url('bootstrap.min');?>" rel="stylesheet" >
    <link href="<?=css_url('animate');?>" rel="stylesheet" >


    <style type="text/css">
    	body,
		html {
		  width: 100%;
		  height: 100%;
		}

		body {
		  font-family: 'Merriweather', 'Helvetica Neue', Arial, sans-serif;
		}

		hr {
		  max-width: 50px;
		  border-width: 3px;
		  border-color: #F05F40;
		}

		a {
		  -webkit-transition: all 0.2s;
		  transition: all 0.2s;
		}


		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
		  font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
		}

		@font-face {
		  font-family: 'Font Awesome 5 Brands';
		  font-style: normal;
		  font-weight: normal;
		  src: url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-brands-400.eot");
		  src: url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-brands-400.eot?#iefix") format("embedded-opentype"), url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-brands-400.woff2") format("woff2"), url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-brands-400.woff") format("woff"), url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-brands-400.ttf") format("truetype"), url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-brands-400.svg#fontawesome") format("svg"); }

		
		@font-face {
		  font-family: 'Font Awesome 5 Free';
		  font-style: normal;
		  font-weight: 400;
		  src: url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-regular-400.eot");
		  src: url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"), url("../webfonts/fa-regular-400.woff2") format("woff2"), url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-regular-400.woff") format("woff"), url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-regular-400.ttf") format("truetype"), url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-regular-400.svg#fontawesome") format("svg"); }

		
		@font-face {
		  font-family: 'Font Awesome 5 Free';
		  font-style: normal;
		  font-weight: 900;
		  src: url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-solid-900.eot");
		  src: url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-solid-900.eot?#iefix") format("embedded-opentype"), url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-solid-900.woff2") format("woff2"), url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-solid-900.woff") format("woff"), url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-solid-900.ttf") format("truetype"), url("<?=base_url();?>assets/icon/fontawesome/webfonts/fa-solid-900.svg#fontawesome") format("svg"); }

		 @font-face {
  		font-family: 'ws-fullscreen';
  		src: url('<?=base_url();?>assets/sliderIcons/fullscreen.eot');
  		src: url('<?=base_url();?>assets/sliderIcons/fullscreen.eot#iefix') format('embedded-opentype'),url('<?=base_url();?>assets/sliderIcons/fullscreen.svg#ws-fullscreen') format('svg');
  		font-weight: normal;
  		font-style: normal;
		}

		#wowslider-container1 .ws_bullets a { 
		font:14px/30px 'Open Sans',Arial,Helvetica,sans-serif; 
		font-weight: bold;
		color:#000000;
		text-align:center;
		margin-left:5px;
		width:30px;
		height:30px;
		background: url(<?=base_url();?>assets/sliderIcons/bullet.png) left top;
		float: left; 
		position:relative;
		border-radius: 15px;
		box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
		}


		#wowslider-container1 a.ws_next, #wowslider-container1 a.ws_prev {
		background-size: 200%;
		position:absolute;
		top:50%;
		margin-top:-4em;
		z-index:60;
		height: 7.8em;
		width: 7.7em;
		background-image: url(<?=base_url();?>assets/sliderIcons/arrows.png);
		}

		#wowslider-container1 .ws_pause {
		background-size: 100%;
	    background-image: url(<?=base_url();?>assets/sliderIcons/pause.png);
		}

		#wowslider-container1 .ws_play {
		background-size: 100%;
	    background-image: url(<?=base_url();?>assets/sliderIcons/play.png);
		}

		#wowslider-container1 .ws_bulframe span{
		display:block;
		position:absolute;
		bottom:-11px;
		margin-left:2px;
		left:43px;
		background:url(<?=base_url();?>assets/sliderIcons/triangle.png);
		width:15px;
		height:6px;
		}

		#wowslider-container1 a.ws_next, #wowslider-container1 a.ws_prev {
		background-size: 200%;

		position:absolute;
		top:50%;
		margin-top:-2.8em;
		z-index:60;
		height: 5em;
		width: 5.1em;
		background-image: url(<?=base_url();?>assets/sliderIcons/arrows.png);
		/*max-height:20%;
		max-width:12%;
		background-size:200% 200%;*/

		}

		#wowslider-container1 .ws_shadow{
		background: url(<?=base_url();?>assets/sliderIcons/shadow.png) left 100%;
		background-size:100%;
		width:140%;
		height:45%;
		position: absolute;
		left:-21.7%;
		bottom:-30%;
		z-index:-1;
		}

		* html #wowslider-container1 .ws_shadow{/*ie6*/
			background:none;
			filter:progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?=base_url();?>assets/sliderIcons/shadow.png', sizingMethod='scale');
			}
		*+html #wowslider-container1 .ws_shadow{/*ie7*/
			background:none;
			filter:progid:DXImageTransform.Microsoft.AlphaImageLoader( src='<?=base_url();?>assets/sliderIcons/shadow.png', sizingMethod='scale');
		}


		#wowslider-container1 .ws_bullets a { 
		margin-left:4px;
		width:22px;
		height:20px;
		background: url(<?=base_url();?>assets/sliderIcons/bullet.png) left top;
		float: left; 
		text-indent: -4000px; 
		position:relative;
		color:transparent;
		}

		nav {

			padding: 20px. !important;

			background-color: rgba(34,44,197,0.5) !important; 
			font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
  			-webkit-transition: all 0.2s;
 			 transition: all 0.2s;
			font-weight: normal;
			font-size: 11px;
			-moz-border-radius: 20px;
			-webkit-border-radius: 20px;
			border: 2px inset rgba(8,13,89,0.1) !important;
			-moz-box-shadow: inset 0px 0px 5px rgba(8,13,89,0.5);
			-webkit-box-shadow:inset 0px 0px 5px rgba(8,13,89,0.5);
			box-shadow: inset 0px 0px 1px rgba(8,13,89,0.1);
		}

		
		.landing p{
			font-family: 'Segoe UI',Candara;
			letter-spacing: 2px;

		}

		.landing .display-4{
			font-family: Candara, verdana, Ubuntu;
			font-weight: bolder;
		}

		    @media (min-width: 1000px) {
        
		        .landing{
		        	padding: 10rem;
		          	padding-top: 5rem;       
		        }

		        .landing .display-4{
		        	font-size: 5rem !important;
		        	letter-spacing: 3px;
		        }
	    	}

	    	 @media (max-width: 1000px) {
        
		        .landing{
		           padding: 2rem;       
		        }

		        .landing .display-4{
		        	font-size: 2.5rem !important;
		        	letter-spacing: 2px;
		        }

	    	}

		 .show-more > .btn-info{
			background-color: rgba(34,44,197,0.9) !important; 
		}

		.show-more > .btn-info:hover , .show-more > .btn-info:active{
			background-color: rgba(37,40,47,0.9) !important; 
		}


			header.masthead {
			  padding-top: 10rem;
			  padding-bottom: calc(10rem - 56px);
			  background:transparent;
			  background-position: center center;
			  background-size: cover;
			}

			header.masthead hr {
			  margin-top: 30px;
			  margin-bottom: 30px;
			  border-color: rgba(255,255,255,.8);
			}

			header.masthead h1 {
			  font-size: 2rem;
			}

			header.masthead p {
			  font-weight: 300;
			}

			@media (min-width: 768px) {
			  header.masthead p {
			    font-size: 1.15rem;
			  }
			}

			@media (min-width: 992px) {
			  header.masthead {
			    height: 100vh;
			    min-height: 650px;
			    padding-top: 0;
			    padding-bottom: 0;
			  }
			  header.masthead h1 {
			    font-size: 3rem;
			  }
			}

			@media (min-width: 1200px) {
			  header.masthead h1 {
			    font-size: 4rem;
			  }
			}


			.btn {
			  font-weight: 700;
			  border: none;
			  border-radius: 300px;
			  font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
			}

			.btn-xl {
			  padding: 1rem 2rem;
			}

			.btn-primary {
			  background-color: rgba(34,44,194,.6);
			  border-color: #F05F40;
			}

			.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
			  color: #fff;
			  background-color: rgba(34,44,194,.9) !important;
			}

			.btn-primary:active, .btn-primary:focus {
			  -webkit-box-shadow: 0 0 0 0.2rem rgba(240, 95, 64, 0.5) !important;
			  box-shadow: 0 0 0 0.2rem rgba(240, 95, 64, 0.5) !important;
			}
		
			
		nav ul{
			-moz-border-radius: 20px;
			-webkit-border-radius: 20px;
			padding: 12px;

		}

		.dropdown-menu{
			background-color: rgba(34,44,197) !important; 
			border: none;
		}

		.dropdown-menu a{
			color: #d0d0d0;
		}

		.dropdown-menu a:hover{
			color: white;
			background-color: rgba(34,44,197) !important; 
			border: none;
		}
		
		.fixed-top-style{
			border-radius: 0px;
			background-color: rgba(34,44,197,1) !important; 
		}

		.navbar-toggler .navbar-text, .navbar-toggler .navbar-toggler-icon{
			font-family: Helvetica, Ubuntu, Arial;
			font-weight: bold;
			color: white;
		}

		.navbar-toggler{
			border:none;
		}

		.navbar-toggler i{
			color: white !important;
			font-size: 1.3rem;
		}

		.jumbotron{
			background-image: url('<?=img_url("background_header.jpg")?>');
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
			color: white;

		}

		.navbar-brand{
			font-size: 1.2rem !important;
			font-weight: bolder;
		}

		.header-number{
			font-size: 3rem;
			background-color: blue;
			width: auto;
			height:7rem;
			border-radius: 3.5rem;
			color: white;
			align-self: center;
			margin-bottom: -40px;
			position:relative;
			z-index: 100;
			margin-left:31%;
			margin-right: 31%;
			padding-top:.5rem; 


		}

		.section-organisee{
			letter-spacing: 1px;
			font-size: 27px;
			font-weight: 900;
		}

		.personnel{
			letter-spacing: 1px;
			font-size: 27px;
			font-weight: 900;
		}

		.info-overlay{
			font-family: 'Roboto', sans-serif;
			font-size: 100%;
			background-color: rgba(255,255,255,.6);
			text-align: left;
			min-height: 100%;
		}

		.galerie-overlay{

			background: url(<?=img_url("background-galerie.jpg")?>) no-repeat;
		}

		.personnel-overlay{
			background: url(<?=img_url("background-personel.jpg")?>) no-repeat;
		}

		.personnel-overlay, .galerie-overlay{
			font-family: 'Roboto', sans-serif;
			font-size: 100%;
		    background-position:0px 0px;
			text-align: left;
			min-height: 100%;
			background-size:cover;
			/*min-height:900px;*/
			background-position:center;
			background-attachment:fixed;
		}


		.white-color-overlay{
			background: rgba(255,255,255,.5);
			padding: 10px;
		}

		.info-heading{
			background-color: rgba(255,255,255,.2); !important;
		}


		.home-section {
	    padding-top: 150px;
		display:block;
	    position:relative;
	    z-index:120;
		}

		.callaction {
			padding:30px 30px 20px 30px;
			border-radius: 4px;
			border-bottom: 2px solid #f2f2f2;
		}

		.divider-short,.color-dark .divider-short,.bg-gray .divider-short {
			background: #aaa;
		}

		.cta-text {
			margin-top:10px;
			text-align: center;
		}

		.cta-text h1 {
			line-height:1.1em;
			margin-bottom: 20px;
			font-weight: bolder;
			font-size: 33px;
		}
		.cta-btn {
			padding:10px 5px 10px 10px;
			margin-top:10px;
			background-color: rgba(34,44,197,1);
			border-radius: 10px;
			text-transform: uppercase;
		}

		.cta-btn a{
			color: white;
			font-weight: normal;
		}

		.cta-btn a:hover{
			color: white;
			font-weight: bolder;
		}
		
		.service-box {
			margin-bottom: 40px;
		}

		.service-icon {
			margin: 0 20px 20px 0;
		}	

		.service-desc h5 {
			margin-bottom: 10px;
			color: rgba(34,44,194,1);
		}

		.service-desc p{
			clear: both;
		}
		.h-light{
			font-weight: bolder;
		}


		.Personal-names h5{
			letter-spacing: 2px;
			font-size: 12px;
		}

		.Personal-names h2{

			font-size: 22px;
		}

		.prefet-speech{
			letter-spacing: 2px;
		}

		.bg-light-white{
			background-color: rgba(255,255,255,0.3); 
		}
			.widget ul {
			list-style: none;
			margin-left:0;
			padding-left:0;
			}

			.widget .company-social li {
			float: left;
			margin: 10px;
			font-size: 25px;
			display: block;
			}

			footer {
			    background-color: #f2f2f2;
			    letter-spacing: 1px;
			    font-style: 'verdana';
			}

			footer {
				padding: 50px 0 0;
				
			}

			footer .widget {
				margin-bottom: 30px;
			}

			footer .widget h5 {
				font-size: 20px;
				margin-bottom: 10px;
				text-transform: uppercase;
			}


			.sub-footer {
				margin-top: 30px;
			   background-color: rgb(34,44,197);
				border-top: 1px solid #ddd;
				padding: 30px 0 10px;
			}

			.sub-footer a, .sub-footer p{
				color: white;
			}

			footer .sub-footer  p {
				font-size: 14px;
			}


			/* -- icon var -- */

			.bg-dark {
				background: #666;
			}

			.bg-light {
				background: #fff;
			}



			.icon-primary {
				color: #4765a0;
			}	
			.icon-success {
				color: #7db53b;
			}	
			.icon-info {
				color: #51b6bf;
			}	
			.icon-warning {
				color: #e6e039;
			}	
			.icon-danger {
				color: #e24e47;
			}	

			.prefet-speech{
				font-size: 25px;
				font-weight: bolder;
				font-family: 'Lucida Handwriting';
			}

    </style>
	<link rel="stylesheet" type="text/css" href="<?=css_url('style_slider');?>" >
    <link href="<?=fontawesome_url('all.css');?>" rel="stylesheet" >
 
  	<!--script type="text/javascript" src="<?= js_url('jquery.min');?>"></script-->
	
    <script type="text/javascript" src="<?=js_url('jquery.min');?>"></script>
    <script type="text/javascript" src="<?=js_url('bootstrap.bundle.min');?>"></script>
    <script type="text/javascript" src="<?=js_url('bootstrap.min');?>"></script>


</head>