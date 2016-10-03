<!DOCTYPE html>
<html lang="en" class="html">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->

	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/styles/theme.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script   src="http://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

	<?php wp_head();?>

	<script>
	$(function() {
		$(window).scroll(checkScrollPosition);
		checkScrollPosition();
	});

function checkScrollPosition(){
		if ($(window).scrollTop() > $("header").outerHeight()) {
			$("body").addClass("fixed-menu");
		} else {
			$("body").removeClass("fixed-menu");
		}
}
	</script>
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
				<li>
					<a href="/">Home</a>
				</li>
				<?php foreach(get_pages() as $page){ ?> 
				<li <?php if (is_page($page->ID)) echo 'class="active"'; ?>>
					<a 
						href="<?php echo get_page_link($page->ID); ?>"						
						>
						<?php echo $page->post_title ?></a>
				</li>
				<?php } ?>
			</ul> 
		</div>
	</div>
	
	<div class="container">