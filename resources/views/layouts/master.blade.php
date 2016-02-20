
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>DRG - @yield('title')</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Jquery UI -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	
	<link rel="stylesheet" href="/css/default.css">
	
  </head>

  <body>



    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Drug Rehab Game</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form id="login_form" class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" id="login_email" placeholder="Email" value="drugrehabgame@gmail.com" class="form-control" required="required">
            </div>
            <div class="form-group">
              <input type="password" id="login_password" placeholder="Password" value="drugrehabgame123" class="form-control" required="required">
            </div>
            <button type="submit" id="login_submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    @yield('content')
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	
	@push('scripts')
    <script>
    	$(function() {
    		$( "#login_form" ).submit(function( event ) {
    			event.preventDefault();
    			
    			var data = { 
    				email : $('#login_email').val(), 
    				password : $('#login_password').val(),
    				_token : "{{ csrf_token() }}",
    			};
    			
    			//disable buttons
    			$('#login_email').attr('disabled', 'disabled');
    			$('#login_password').attr('disabled', 'disabled');
    			$('#login_submit').attr('disabled', 'disabled');
    			
    			//autocomplete
    			$('#login_submit').text('Signing in...');
    			
    			
    			$.post("login",data, function(data) {
    				if (data.success) {
    					window.location = '/dashboard';
    				} else {
    					//enable and let them know...
	                    $('#login_submit').text('Sign In');
	                    //remove all attr
	                    $('#login_email').removeAttr("disabled");
	    				$('#login_password').removeAttr("disabled");
	    				$('#login_submit').removeAttr("disabled");	
    				}
    				
    				
                });
    		});
    	});
    </script>
	@endpush
	
	@stack('scripts')

  </body>
</html>
