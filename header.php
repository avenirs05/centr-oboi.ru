<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="format-detection" content="telephone=no" />
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); wp_title(); ?>
</head>
<body>

<div class="container-fluid header">
	<div class="row header-fixed">
        <div class="col-xs-6 logo"><a href="http://centr-oboi.loc/">ОБОИ ЦЕНТР</a></div>
        <div class="col-xs-6" id="right-corner">
			<div class="phone-digits text-right">
				<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
				<span>+7 (863) 231 10 99</span>			
			</div>
			<div class="phone-digits text-right">
			    <span>+7 (863) 223 90 75</span>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid menu-wrapper">
	<div class="row menu-wrapper-fixed">		
        <div class="col-md-10 col-md-offset-1 menu">
			<?php dynamic_sidebar('menu-header'); ?>
			</div>	
	</div>
</div>