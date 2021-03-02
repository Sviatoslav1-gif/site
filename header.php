<?php
/**
* Чистый Шаблон для разработки
* Шаблон хэдера
* @package WordPress
* @subpackage clean
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<!-- RSS, стиль и всякая фигня -->
<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
<title>
<?php
sitename();
?>
</title>
<?php
	wp_head(); // Необходимо для работы плагинов и функционала wp
?>
</head>
<body class="backgraund-fon1">
	<div class="preloader">
		<div class="lds-default" style="
    background: #000;
"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
	</div>
	<header class="header-bg">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark menunav">
				<div class="w-100">
					<a class="h1 td text-center d-block header-description" href="#">Фрегат</a>
	   				<?php
						$args = array( // Выводим верхнее меню
							'theme_location'=>'top',
							'container'=>'',
							'depth'=> 0);
						wp_nav_menu($args);
					?>
				</div>
			</nav>
			<div class="write">
				<div class="header-text mb-5">
					<p class="h1">Добро пожаловать в клуб Фрегат!</p>
					<p class="h2">Вас ждёт незабываемое приключение</p>
				</div>
				<div class="mt-5">
					<a class="write-us" href="#"><p class="h5 m-0 mt-4">На борт!</p><br><p class="m-0 mb-4">(написать нам)</p></a>
				</div>
			</div>
		</div>
	</header>
<div class="container">