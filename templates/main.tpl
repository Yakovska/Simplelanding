{* Smarty*}
<!DOCTYPE html>
<html>
<head>
	<title>{$title}</title>
	<meta charset="utf-8">
	<link rel="icon" href="templates/images/ax-favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="templates/stylesheets/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="stylesheets/ie.css">
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		</head>
		<body>
			<div class="b-container">
				<div class="b-container__header">
					<header class="b-header">
						<div class="b-container__wrap">
							<div class="b-header__logo">
								<div class="b-logo">
									<a href="#" class="b-logo__link">
										<img src="templates/images/header/logo-small.png" alt="" class="b-logo__img">
									</a>
								</div>
							</div>
							<nav class="b-header__menu">
								<ul class="b-menu">
									{foreach from=$menu_data key=path item=text}
									<li class="b-menu__item"><a href="{$path}" class="b-menu__link">{$text}</a></li>
									{/foreach}
									</ul>
							</nav>	
						</div>
					</header>
				</div>	
				<div class="b-container__info" id="features">
					<div class="b-info">			
						<div class="b-container__wrap">
							<div class="b-info__downloads">
								<div class="b-downloads">
									<img src="templates/images/header/logo.png" alt="" class="b-downloads__img">
									<h1 class="b-downloads__heading">MODERN AXURE TEMPLATE FOR BEAUTIFUL PROTOTYPES</h1>
									<div class="b-downloads__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</div>
									<a href="#" class="b-downloads__ghost-btn">Download</a>

								</div>
							</div>
							<div class="b-info__get-trial">
								<div class="b-get-trial">
									<div class="b-get-trial__heading">Try Your <span class="b-get-trial__free-text">FREE</span> Trial Today</div>
									<form action="" method="" class="b-get-trial__form">
										<input type="text" name="name" placeholder="Name" class="b-get-trial__textfield b-get-trial__textfield_display" required>

										<!-- <span class="b-get-trial__label">E-mail</span> -->
										<input type="e-mail" name="email" placeholder="E-mail" class="b-get-trial__textfield b-get-trial__textfield_email" required>
										<input type="password" name="pswd" placeholder="Password" class="b-get-trial__textfield">
										<input type="submit" value="Get Started" class="b-get-trial__btn">
									</form>
								</div>
							</div>	
						</div>			
					</div>
				</div>
				<div class="b-container__aboutUs" id="about">
					<section class="b-block-with-tabs">			
						<div class="b-container__wrap">
							<div class="b-block-with-tabs__tabs">
								<menu class="b-tabs">
									<li class="b-tabs__item b-tabs__item_current">tab1</li>
									<li class="b-tabs__item">tab2</li>
									<li class="b-tabs__item">tab3</li>
								</menu>
							</div>	
							<article class="b-block-with-tabs__text">
								<h3 class="b-block-with-tabs__heading">Tabs with soft transitioning effect.</h3>
								<p class="b-block-with-tabs__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
								<p  class="b-block-with-tabs__p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
								<a href="#" class="b-block-with-tabs__link">Download</a>
							</article>
						</div>				
					</section>
				</div>	
				<div class="b-container__articles" id="articles">
					<section class="b-articles">
						<div class="b-container__wrap">
							<h2 class="b-articles__heading">WHY THIS IS AWESOME</h2>
							<aside class="b-articles__details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</aside>
							<div class="b-articles__article b-articles__article_first">
								<article class="b-article">
									<div class="b-article__icon"><span class="b-article__fa fa fa-lightbulb-o"></span></div>
									<h3 class="b-article__heading">Thoughtful Design</h3>
									<p class="b-article__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra.</p>
								</article>
							</div>	
							<div class="b-articles__article">
								<article class="b-article">
									<div class="b-article__icon"><span class="b-article__fa fa fa-keyboard-o"></span></div>
									<h3 class="b-article__heading">Well Crafted</h3>
									<p class="b-article__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra.</p>
								</article>
							</div>
							<div class="b-articles__article">
								<article class="b-article">
									<div class="b-article__icon"><span class="b-article__fa fa fa-flash"></span></div>
									<h3 class="b-article__heading">Easy to Customize</h3>
									<p class="b-article__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra.</p>
								</article>
							</div>
						</div>			
					</section>
				</div>
				<div class="b-container__contacts" id="contacts">
					{include file="templates/contacts.tpl"}
				</div>
				<div class="b-container__footer">
					<div class="b-footer">
						<div class="b-container__wrap">
							<div class="b-footer__socials">
								<ul class="b-socials">
									<li class="b-socials__item"><a href="#" class="b-socials__link b-socials__link_fb"></a></li>
									<li class="b-socials__item"><a href="#" class="b-socials__link b-socials__link_tw"></a></li>
									<li class="b-socials__item"><a href="#" class="b-socials__link b-socials__link_google"></a></li>
									<li class="b-socials__item"><a href="#" class="b-socials__link b-socials__link_pin"></a></li>
									<li class="b-socials__item"><a href="#" class="b-socials__link b-socials__link_inst"></a></li>
									<li class="b-socials__item"><a href="#" class="b-socials__link b-socials__link_stumble"></a></li>
									<li class="b-socials__item"><a href="#" class="b-socials__link b-socials__link_rss"></a></li>
								</ul>
							</div>	
							<div class="b-footer__copyright">&copy; 2015 Axure Themes</div>
						</div>			
					</div>
				</div>		
			</div>


		</body>
		</html>