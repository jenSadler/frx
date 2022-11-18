<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @package FRX

 */

?>
<!doctype html>
<html lang="<?php language_attributes(); ?>" >
<head>
	<meta charset="<?php bloginfo('charset')?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<header></header>
