<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>

	<?php
		if(is_front_page()):
			$drivEliteClasses = array('drivElite-class', 'my-class');
		else:
			$drivEliteClasses = array('');
		endif;
	?>
	
	<body <?php body_class($drivEliteClasses);?>>
		<div class="container">
			<div class="row">
			 	<div class="col-xs-12">
				 	<nav class="navbar navbar-default">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
					        		<span class="icon-bar"></span>
					        		<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#">Driven Elite Theme</a>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<?php 
									wp_nav_menu(array(
										'theme_location'=>'primary'
										)
									); 
								?>
							</div>
						</div><!--end of container fluid div-->
					</nav><!--end of nav div-->
				</div>
			</div>

<img src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt="" />