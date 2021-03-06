<head>
	<meta http-equiv="x-ua-compatible" content="IE=Edge"/> 
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title(' | ', true, 'right'); ?> <?php echo get_bloginfo ( 'name' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6629892/627864/css/fonts.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/print.css" type="text/css" media="print" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
	
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>
	
	<!--[if lte IE 8 ]>
	<script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js"></script>
	<![endif]-->
	
	<?php if ( is_front_page() ) : ?>
		<style type="text/css">
			<?php 
				$image = get_field('homepage_hero',791);
				$url = $image['url'];
				$small = $image['sizes']['large'];
			?>
		
			.banner-hero {
				background-image: url(<?php echo $small; ?>);
			}
		
			@media all and (min-width: 45em) {
				.banner-hero {
					background-image: url(<?php echo $url; ?>);
				}
			}
		
		</style>
	
	<?php endif; ?>
	
	<?php wp_head(); ?>
</head>