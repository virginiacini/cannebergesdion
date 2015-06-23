<div id="contact" class="container-fluid">
	<div class="row">
	  <div class="col-xs-offset-1 col-xs-10 col-md-offset-4 col-md-4">
	  	<hr>
	  	<h2 class="page-title">CONTACTEZ-NOUS</h2>
	  	<hr>	
	  </div>
	</div><!-- end row -->
	
	<div class="row">
		<form method='post' action='contactform.php' name='contactform' id='contactform'>
			<p>
			<label for='fullname'>Your Name:</label><br/>
			<input type='text' name='fullname' />
			</p>

			<p>
			<label for='email' >Email Address:</label><br/>
			<input type='text' name='email' />
			</p>
			<input type='submit' name='submit' value='Submit Form' />
		</form>
		<script>
		document.contactform.onsubmit=function()
		{
			if(document.contactform.fullname.value =='')
			{
				alert("Please enter your name");
				document.contactform.fullname.focus();
				return false;
			}
			else if(document.contactform.email.value =='')
			{
				alert("Please enter your Email address");
				document.contactform.email.focus();
				return false;
			}
			return true;
		}
		</script>
	</div>

	<!-- google map -->
	<div class="row">
		<div id="map-canvas"></div>
	</div><!-- end row -->

</div>