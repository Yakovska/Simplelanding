<?php
/* Smarty version 3.1.29, created on 2016-10-22 16:50:13
  from "/var/www/irayakovskaya1/data/www/yakovska.in.ua/simple-landing/templates/main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580b6e956ab308_91776991',
  'file_dependency' => 
  array (
    'f9e317d4d7fac248c91877c4a6774cc202ca79ce' => 
    array (
      0 => '/var/www/irayakovskaya1/data/www/yakovska.in.ua/simple-landing/templates/main.tpl',
      1 => 1477144211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/contacts.tpl' => 1,
  ),
),false)) {
function content_580b6e956ab308_91776991 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta charset="utf-8">
	<link rel="icon" href="templates/images/ax-favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="templates/stylesheets/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="stylesheets/ie.css">
			<?php echo '<script'; ?>
 src="http://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
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
									<?php
$_from = $_smarty_tpl->tpl_vars['menu_data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_text_0_saved_item = isset($_smarty_tpl->tpl_vars['text']) ? $_smarty_tpl->tpl_vars['text'] : false;
$__foreach_text_0_saved_key = isset($_smarty_tpl->tpl_vars['path']) ? $_smarty_tpl->tpl_vars['path'] : false;
$_smarty_tpl->tpl_vars['text'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['path'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['text']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->_loop = true;
$__foreach_text_0_saved_local_item = $_smarty_tpl->tpl_vars['text'];
?>
									<li class="b-menu__item"><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
" class="b-menu__link"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a></li>
									<?php
$_smarty_tpl->tpl_vars['text'] = $__foreach_text_0_saved_local_item;
}
if ($__foreach_text_0_saved_item) {
$_smarty_tpl->tpl_vars['text'] = $__foreach_text_0_saved_item;
}
if ($__foreach_text_0_saved_key) {
$_smarty_tpl->tpl_vars['path'] = $__foreach_text_0_saved_key;
}
?>
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
					<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:templates/contacts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
		</html><?php }
}
