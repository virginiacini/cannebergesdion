<div id="contact" class="container-fluid">
	<div class="row">
	  <div class="col-xs-offset-1 col-xs-10 col-md-offset-4 col-md-4">
	  	<hr>
	  	<h2 class="page-title">CONTACTEZ-NOUS</h2>
	  	<hr>	
	  </div>
	</div><!-- end row -->
	
	<div class="row">
		<div class="col-xs-offset-1 col-xs-10 col-md-offset-1 col-md-5">
			<form method='post' action='contactform.php' name='contactform' id='contactform'>
				<div class="form-group">
					<input type='text' name='fullname'class="form-control" placeholder='Nom' />
				</div>
				<div class="form-group">
					<input type='text' name='email' class="form-control" placeholder='Courriel'/>
				</div>
				<div class="form-group">
					<textarea name='message' rows="4" class="form-control" cols="" placeholder="Message"></textarea>
				</div>
				<div class="form-group">
					<input type='submit' name='submit' class="btn btn-default" value='Submit Form' />
				</div>
			</form>
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
			</div>
		</div>
	</div>

	<!-- google map -->
	<div class="row">
		<div id="map-canvas"></div>
	</div><!-- end row -->

</div>