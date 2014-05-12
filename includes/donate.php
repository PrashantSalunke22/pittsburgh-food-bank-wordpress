<!--Donate-->
<div class="donate">
	<div class="lc">
		<h2 class="section-title">Help feed the the greater Pittsburgh community</h2>
		<form method="post" action="#" class="donate-form">
				<fieldset class="donate-step donate-range-container" id="donate-step-1">
					<legend><span class="donate-slider-amount blank"></span> <span class="donate-slider-message">Slide to choose amount to donate:</span></legend>
					<div class="field-container">
						<label for="donate-range" class="field-instruction is-vishidden">Slide to choose amount to donate:</label>
						<input type="number" data-type="range" class="donate-range ui-slider-input" id="donate-range" value="5" min="1" max="100" />
					</div>
					<div class="field-container checkbox-container">
						<input type="checkbox" id="donate-monthly" />
						<label for="donate-monthly">Yes, I would like to donate this amount monthly</label>
					</div>
				</fieldset><!--end .donate-step-->

				<fieldset class="donate-step" id="donate-step-2">
					<legend class="donate-step-legend"><span class="form-step">2</span> Enter your information:</legend>
					<div class="g g-2up">
						<div class="field-container gi">
							<label for="donate-name">Name</label>
							<input type="text" id="donate-name" placeholder="First Last" autocomplete="off" required data-parsley-error-message="Please enter your full name" />
						</div>
						<div class="field-container gi">
							<label for="donate-email">E-mail</label>
							<input type="email" id="donate-email" placeholder="your@email.com" required data-parsley-error-message="Please enter a valid e-mail address" />
						</div>
						<div class="field-container gi">
							<label for="donate-address">Address</label>
							<input type="text" id="donate-address" placeholder="123 Main St, Apt 2" autocomplete="off" required data-parsley-error-message="Please enter your street address" />
						</div>
						<div class="field-container gi">
							<label for="donate-city">City, State</label>
							<input type="text" id="donate-city" placeholder="Pittsburgh, PA" autocomplete="off" required data-parsley-error-message="Please enter your city and state, separated by a comma" pattern="\,+"	HTML5
data-parsley-pattern="\,+" />
						</div>
						
					</div><!--end .g-2up-->
				</fieldset><!--end .donate-step-->
				
				<fieldset class="donate-step" id="donate-step-3">
					<legend class="donate-step-legend"><span class="form-step">3</span> Credit card info:</legend>
					<div class="credit-card-group">
						<input placeholder="1234 5678 9012 3456" pattern="[0-9]*" type="text" class="card-number" id="card-number">
						<input placeholder="MM/YY" pattern="[0-9]*" type="text" class="card-expiration">
						<input placeholder="CVV" pattern="[0-9]*" type="text" class="card-cvv">
						<input placeholder="ZIP" pattern="[0-9]*" type="text" class="card-zip">
					</div>
				</fieldset><!--end .donate-step-->
				<button class="donate-submit btn">Donate</button>
		</form><!--end .donate-form-->
	</div><!-- end .lc-->
</div><!-- end .donate-slider-->
<!--End Donate-->