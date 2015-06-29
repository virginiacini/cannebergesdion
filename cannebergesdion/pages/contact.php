<div id="contact" class="container-fluid">
	<div class="row">
	  <div class="col-xs-offset-1 col-xs-10 col-md-offset-4 col-md-4">
	  	<hr>
	  	<h2 class="page-title">CONTACTEZ-NOUS</h2>
	  	<hr>	
	  </div>
	</div><!-- end row -->

	<div class="row">
	  <div class="col-xs-12 col-md-12 nopadding">
		<img src="img/canneberges-cuillere.jpg" class="img-responsive" alt="Responsive image">
	  </div>
	</div><!-- end row -->

	<div class="row">
		<div class="col-xs-offset-1 col-xs-10 col-md-offset-1 col-md-4">
			<form method='post' action='contactform.php' name='contactform' id='contactform'>
				<div class="form-group">
					<input type='text' name='fullname' placeholder='NOM' />
					<span id="errName">Veuillez entrer votre nom.</span>
				</div>
				<div class="form-group">
					<input type='text' name='email' placeholder='COURRIEL'/>
					<span id="errEmail">Veuillez entrer votre courriel.</span>
				</div>
				<div class="form-group">
					<textarea name='message' rows="4" placeholder="MESSAGE"></textarea>
					<span id="errMsg">Veuillez entrer votre message.</span>
				</div>
				<div class="row">
					<div class="col-xs-offset-1 col-xs-10 col-md-offset-9 col-md-3">
						<div class="form-group btn-send">
							<input type='submit' name='submit' value='ENVOYER' />
						</div>
					</div>
				</div>
			</form>
			<span id="success">Votre message a été envoyé!</span>
		</div>
		<div class="col-xs-offset-1 col-xs-10 col-md-offset-1 col-md-4">
			<div class="address">
				<p>Où nous trouver:</p>
				<p>
					140 Route 9 rang <br>
					Ste-Séraphine <br> 
					QC J0A 1E0
				</p>
				<p>
					819-336-5649
				</p>
			</div> <!-- end address -->
		</div>
	</div><!-- end row -->

	<!-- google map -->
	<div class="row">
		<div id="map-canvas"></div>
	</div><!-- end row -->

</div><!-- end container-fluid -->