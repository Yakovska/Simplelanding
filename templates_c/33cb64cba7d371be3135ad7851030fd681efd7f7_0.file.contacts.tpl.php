<?php
/* Smarty version 3.1.29, created on 2016-10-21 22:47:43
  from "/var/www/irayakovskaya1/data/www/yakovska.in.ua/templates/contacts.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_580a70df5580f6_62332008',
  'file_dependency' => 
  array (
    '33cb64cba7d371be3135ad7851030fd681efd7f7' => 
    array (
      0 => '/var/www/irayakovskaya1/data/www/yakovska.in.ua/templates/contacts.tpl',
      1 => 1477062475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580a70df5580f6_62332008 ($_smarty_tpl) {
?>
<div class="b-container__contacts" id = "feedback">
	<div class="b-contacts">
		<div class="b-container__wrap">
			<h2 class="b-contacts__heading">CONTACT US</h2>
			<div class="b-contacts__details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
			<div class="b-contacts__message"></div>
			<div class="b-contacts__feedback">
				<form class="b-feedback" action="" method="post" >
					<div class="b-feedback__column1">
						<input type="text" name="name" placeholder="Name" class="b-feedback__textfield">
						<input type="text" name="email" placeholder="E-mail" class="b-feedback__textfield">
						<input type="text" name="subject" placeholder="Subject" class="b-feedback__textfield">
					</div>
					<div class="b-feedback__column2">
						<textarea name="message" placeholder="Message" class="b-feedback__textarea"></textarea>
					</div>
					<div class="b-container__clearfix"></div>
					<input type="submit" value="Send Message" class="b-feedback__btn">
					<input type = "hidden" name = "action" value = "feedback"> <!--скрытое поле-->
				</form>
			</div>	
		</div>			
	</div>
</div><?php }
}
