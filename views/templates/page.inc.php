<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Natural Corner - Votre magasin bio de proximité</title>
        <meta name="description" content="">
        <meta name="viewport" content="user-scalable=no, width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="apple-touch-startup-image" href="stylesheets/img/fruits-NC.jpg"/>
        <link rel="apple-touch-icon" href="stylesheets/apple-touch-icon.png">
        <link rel="stylesheet" href="stylesheets/css/bootstrap.min.css">
        <!--  <link rel="stylesheet" href="stylesheets/jquery.mobile/jquery.mobile.css">  -->     
        <link rel="stylesheet" href="stylesheets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="stylesheets/css/main.css">
		<script src="stylesheets/js/jquery.js"></script>
		<!--  <script src="stylesheets/jquery.mobile/jquery.mobile.js"></script>--> 
        <script src="stylesheets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '479314665605501',
		      xfbml      : true,
		      version    : 'v2.5'
		    });
		  };
		
		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
        <div class="container-fluid">
        	 
        
        	<header class="row">       		
        		<div class="col-lg-4 col-md-4 col-xs-1"></div>
        		<a href="<?php echo $_SERVER['PHP_SELF'].'?action=Default';?>"><p class="col-lg-4 col-md-4 col-xs-10"><h1 id="natural">Natural</h1><h1 id="corner">Corner</h1></p> </a> 
        		<div class="col-lg-4 col-md-4 col-xs-1"></div>        		    	
        	</header>
        	<section class="row">
        		<?php if($this->login!=null) 
        					$this->displayCommands();?>
        	</section>
        	<section class="row">
	        	<?php
        			if($this->login===null){
        				$this->displayLoginForm();
        				$this->displayBody();
        				
        			} 
					else{
						$this->displayBody();
						$this->displayLogoutForm();
					} 
						
				?>
			</section>
        	<footer  class="row">
         		<div class="col-lg-4 col-md-4 col-xs-1"></div>       	
        		<p class="col-lg-4 col-md-4 col-xs-10"> </p>
        		<div class="col-lg-4 col-md-4 col-xs-1"></div>
        	</footer>
        	
        </div>
   
    <!-- /container -->        <!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="stylesheets/js/jquery.js"><\/script>')</script>
		
        <script src="stylesheets/js/bootstrap.min.js"></script>
        <script src="stylesheets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--  <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> -->
    </body>
</html>