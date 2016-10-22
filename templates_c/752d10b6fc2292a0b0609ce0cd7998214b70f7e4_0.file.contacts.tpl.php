<?php
/* Smarty version 3.1.29, created on 2016-10-20 18:48:11
  from "Z:\home\localhost\www\24\templates\contacts.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5808e73b0abae3_74600274',
  'file_dependency' => 
  array (
    '752d10b6fc2292a0b0609ce0cd7998214b70f7e4' => 
    array (
      0 => 'Z:\\home\\localhost\\www\\24\\templates\\contacts.tpl',
      1 => 1476978452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5808e73b0abae3_74600274 ($_smarty_tpl) {
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
