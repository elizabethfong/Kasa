<!--
	The .php file for the header. 

	References:
	https://www.siteground.com/tutorials/wordpress/wordpress_create_theme.htm

	@author: Elizabeth Fong
	@version: January 2016

	Notes to self:
	- apparently, the file is mostly written as html, but with php stuff in it
	- so it's kinda like Python, it seems
	- also it seems that separating out the html into multiple files means that
	  anything that is wrapped gets broken up. For example, the /html tag does
	  not exist in this file because this is the header and not the end of the
	  whole design of the webpage. The /html tag does belong in the footer

	- can specify in this file:
		- meta tags (title, description etc.)
		- keywords
-->

<!DOCTYPE html>

<html>

	<!-- header for the html code, NOT the header for the theme design -->
	<head>
		<title>EF's WordPress Theme Creation First Run!</title>

		<!-- this is how we tell WordPress to load the style.css file -->
		<link  rel = "stylesheet"  href = "<?php bloginfo('stylesheet_url'); ?>">
	</head>

	<!-- The body - this contains the header for the theme design! -->
	<body>
		<!-- wrapper for the entire site design, closed after footer -->
		<div  id = "wrapper">

			<!-- HEADER, content specified here, design in css stylesheet -->
			<div  id = "header">
				<h1>HEADER - Placeholder text</h1>
			</div>