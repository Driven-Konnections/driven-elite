<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	
	<body>
		
<?php wp_nav_menu(array('theme_location'=>'primary')); ?>

<img src="<?php header_iamge();?>" height="<?php echo get_custom_header()->height;?>"
	width="<?php echo get_custom_header()->width;?>" alt="" />