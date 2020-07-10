<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
@yield("head")
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/tamplet/default.css" rel="stylesheet" />
<link href="/tamplet/fonts.css" rel="stylesheet" />
</head>
<body>
    <div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/">SimpleWork</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{ Request::path() === '/' ? 'current_page_item' : ''}} "><a href="/" accesskey="1" >Homepage</a></li>
				<li class="{{ Request::path() === '' ? 'current_page_item' : ''}} "><a href="#"  >Our Clients</a></li>
				<li class="{{ Request::path() === 'about' ? 'current_page_item' : ''}} "><a href="/about"  >About Us</a></li>
				<li class="{{ Request::path() === 'articles' ? 'current_page_item' : ''}} "><a href="/articles"  >Articles</a></li>
				<li class="{{ Request::path() === '' ? 'current_page_item' : ''}} "><a href="#"  >Contact Us</a></li>
				<li class="{{ Request::path() === 'articles/creat' ? 'current_page_item' : ''}} "><a href="/articles/creat"  >Crerat</a></li>
				<li class="{{ Request::path() === 'articles/1/edit' ? 'current_page_item' : ''}} "><a href="/articles/1/edit"  >edit</a></li>

			</ul>
		</div>
	</div>
	</div>
    </div>
		@yield("contant")
	<div id="copyright" class="container">
		<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
	</div>

</body>
</html>
