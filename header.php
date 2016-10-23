<!DOCTYPE html>
<html lang="en" class="html">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo get_bloginfo( 'name' ); ?></title>

	<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/styles/theme.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
	<?php wp_head();?>
</head>

<body>
	<header>
	<div  class="container">
		<img src="<?php bloginfo('template_directory');?>/images/logo-tranparent.png"  onclick="document.location.href = '<?php echo get_site_url() ?>'" style="width: 100%"/>
	</div>
	</header>
	<div class="navbar navbar-default">
		<div class="container">
			<ul class="nav navbar-nav">
				<li>
					<a href="/">Home</a>
				</li>
				<?php foreach(get_pages() as $page){ ?> 
				<li>
					<a href="<?php echo get_page_link($page->ID); ?>">
						<?php echo $page->post_title ?>
					</a>
				</li>
				<?php } ?>
			</ul> 
		</div> 
	</div>
	
	<div class="container">