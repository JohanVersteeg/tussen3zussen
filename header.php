<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

	<?php wp_head();?>
</head>

<body>
	<header>
	<div  class="container">
		<img src="<?php bloginfo('template_directory');?>/images/logo-tranparent.png" style="width: 100%"/>
		</div>
	</header>
	<div class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav"> 
				<li class="active">
					<a href="#">Home</a>
				</li> 
				<li>
					<a href="#">Contact</a>
				</li>
				<li>
					<a href="#">Categorien</a>
				</li>  
				<li>
					<a href="#">Over mij</a>
				</li> 
			</ul> 
		</div>
	</div>

	<style>
	html, body{
		padding: 0;
		margin-top: 0 !important;
	}
	header{
		background: #FFF9FA;
		padding:20px;
	}
		.navbar.navbar-default{
			background: #FFF9FA;
			background-image: none;
			border: none;
			/*border-top: solid 1px #cccccc;*/
			border-bottom: solid 1px #cccccc;
			box-shadow: none;
		}
	</style>
	
	<div class="container">