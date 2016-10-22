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
</div>