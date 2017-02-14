<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="container">
			<div class="row head">
				<div class="col-md-4 alllogo">
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg" alt=""></a>
					<img src="<?php bloginfo('template_directory'); ?>/img/logo2.jpg" alt="">
				</div>
				<div class="col-md-5 text-center">
					<span class="years">10 ЛЕТ</span>
					<span class="years2">С 2006 года на рынке</span>
				</div>
				<div class="col-md-3 text-right call">
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/tel.png" alt=""></a>
					<span class="tel">(234)-456-789</span>
				</div>
			</div>
			<br>
			<div class="row family">
			</div>
		</div>
	</header>
	<content>

	</content>
	<footer>

	</footer>
</body>
	<?php wp_footer(); ?>
</html>