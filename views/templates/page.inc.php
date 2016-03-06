<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="robot" content="nofollow"/>
        <title>Natural Corner - Votre magasin bio de proximité</title>
        <meta name="description" content=""/>
        <meta name="viewport" content="user-scalable=no, width=device-width"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<link rel="icon" type="image/png" href="stylesheets/favicon.ico" />
        <link rel="apple-touch-startup-image" href="stylesheets/img/natural_corner.jpg"/>
        <link rel="apple-touch-icon" href="stylesheets/apple-touch-icon.jpg">
        <link rel="stylesheet" href="stylesheets/css/bootstrap.min.css">
<!--         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->
        
        <!--  <link rel="stylesheet" href="stylesheets/jquery.mobile/jquery.mobile.css">  -->     
        <link rel="stylesheet" href="stylesheets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="stylesheets/css/main.css">
        <!-- Latest compiled and minified CSS -->
<!-- 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  -->
<!-- 		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"  -->
<!-- 		crossorigin="anonymous"> -->
		
		<!-- Optional theme -->
<!-- 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"  -->
<!-- 		integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"  -->
<!-- 		crossorigin="anonymous"> -->
		

		<script src="stylesheets/js/jquery.js"></script>
		        <script src="stylesheets/js/bootstrap.min.js"></script>
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
		     js.src = "//connect.facebook.net/fr_FR/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
        <div class="container-fluid">
        	 
        	<header class="row">	
	        	<?php 
	        		if($this->login==null){
	        			if(isset($_GET['action'])){
	        				if($_GET['action']==='Inscription' OR $_GET['action']==='Login'){
	        					$this->displayHeader();      					 
	        				}else{
	        					$this->displayHeader();
		        				$this->displayCarousel();
	        					 
	        				}
	        			}else{
	        				$this->displayHeader();
	        				$this->displayCarousel();
	        			}
	        		}
	        	?>
	        </header>
	        </br>
        	<section>
        		<?php 

        		$commandesAffiches=false;
        		if($this->login!=null){ 
        			$this->displayCommands();
        			$commandesAffiches=true;
				}	
				?>
        	</section>
        	<section>
	        	<?php
        			if($this->login==null){
        				$this->displayBody();
        				
        			} 
					else{
						$this->displayBody();
						
					} 
						
				?>
			</section>
			</br>
			</br>
			</br>
        	<footer  class="row">   	
        		<div class="col-lg-4 col-sm-offset-1 col-sm-3 col-md-4 col-xs-10"> 
        			<?php if($this->login!=null){
        				echo '<div class="fb-like" 
						data-href="http://www.your-domain.com/your-page.html" 
						data-layout="standard" 
						data-action="like" 
						data-show-faces="true"
						data-width="1000">
						</div>';
        			}?>
			        		
				</div>
        	</footer>
        </div>
    <!-- /container -->        
<!--     	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->

<!-- 		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->


        <script src="stylesheets/js/main.js"></script>
<!-- Latest compiled and minified JavaScript -->
<!-- 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"  -->
<!-- 		integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"  -->
<!-- 		crossorigin="anonymous"></script> -->
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