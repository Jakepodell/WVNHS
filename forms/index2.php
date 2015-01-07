<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>

		<title>WVNHS Board!</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		
		<link rel="stylesheet" href="css/mosaic.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../events/eventInfoStyle.css" type="text/css" media="screen" />
		<link rel="stylesheet" type="text/css" href="../events/headbar.css">
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
		<script type="text/javascript" src="../events/header.js"></script>
		<script type="text/javascript" src="js/mosaic.1.0.1.js"></script>

		<style>
			.headbar{
			margin-top:-8.6em;
			}
			p{
			margin-bottom:0em;
			}
		</style>
		
		<script type="text/javascript">  
			
			jQuery(function($){
				
				$('.circle').mosaic({
					opacity		:	0.8			//Opacity for overlay (0-1)
				});
				
				$('.fade').mosaic();
				
				$('.bar').mosaic({
					animation	:	'slide'		//fade or slide
				});
				
				$('.bar2').mosaic({
					animation	:	'slide'		//fade or slide
				});
				
				$('.bar3').mosaic({
					animation	:	'slide',	//fade or slide
					anchor_y	:	'top'		//Vertical anchor position
				});
				
				$('.cover').mosaic({
					animation	:	'slide',	//fade or slide
					hover_x		:	'400px'		//Horizontal position on hover
				});
				
				$('.cover2').mosaic({
					animation	:	'slide',	//fade or slide
					anchor_y	:	'top',		//Vertical anchor position
					hover_y		:	'80px'		//Vertical position on hover
				});
				
				$('.cover3').mosaic({
					animation	:	'slide',	//fade or slide
					hover_x		:	'400px',	//Horizontal position on hover
					hover_y		:	'300px'		//Vertical position on hover
				});
		    
		    });
		    
		</script>
		
		<style type="text/css">
		
			/*Demo Styles*/
			body{
				text-align: left;
			}
			
		</style>
		
	</head>

<body>
	<h1>Forms</h1>
	<div class = "headbar">
		<div class = "signup" id='signup'>Create Account!</div>
		<div class = "signup" id='admin'>Admin Login</div>
		<div class = "signup" id='events'>Events</div>
		<div class = "signup" id='members'>Members</div>
		<div class = "signup" id='mystats'>My Stats</div>
		<div class = "signup" id='forms'>Forms</div>
		<div class = "signup" id='home'>Home</div>
	</div>

	<div id="content">
		
		<!--Circle-->	
		<div class="mosaic-block fade">
			<a class="mosaic-overlay">
				<div class="details">
					<h4>Mighty Social Icons</h4>
					<p>By Build Internet</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="img/thumb1.jpg"/></div>
		</div>
	
		<!--Fade-->
		<div class="mosaic-block fade">
			<a target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Mighty Social Icons</h4>
					<p>By Build Internet</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="img/migs.jpg"/></div>
		</div>
		
		<div class="mosaic-block fade">
			<a target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Mighty Social Icons</h4>
					<p>By Build Internet</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="img/lauren.jpg"/></div>
		</div>
		
		<div class="mosaic-block fade">
			<a target="_blank" class="mosaic-overlay">
				<div class="details">
					<h4>Mighty Social Icons</h4>
					<p>By Build Internet</p>
				</div>
			</a>
			<div class="mosaic-backdrop"><img src="img/puck.jpg"/></div>
		</div>
		<div class="clearfix"></div>
	</div>
	
</body>
</html>
