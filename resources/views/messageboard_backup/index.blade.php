@extends('layouts.master')
@section('title', 'Messageboard')
@section('content')
<div class="jumbotron">
  <div class="container">
    <h1>Messageboard</h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
    <p><a role="button" href="#" class="btn btn-primary btn-lg">Learn more »</a></p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-8">
      <h2>Messages:</h2>
      <div id="messagelist">
      	Loading messages...
      </div>
   </div>
   <form id="message_form">
   <div class="col-md-3">
   		<h2>Tell Your Allies</h2>
   	  	<textarea id="message" required="required" class="form-control"></textarea>
   </div>
   <div class="col-md-1">
   		<h2>&nbsp;</h2>
		<button type="submit" id="message_submit" class="btn btn-success">Post It</button>   	
   </div>
   </form>
  </div>

  <hr>

  <footer>
    <p>&copy; 2015 Company, Inc.</p>
  </footer>
</div>
@stop




@push('scripts')
<script src="/js/timeago.jquery.js"></script>

<script>
	$(function() {
		$( "#message_form" ).submit(function( event ) {
			event.preventDefault();
			
			var data = { 
				message : $('#message').val(), 
				_token : "{{ csrf_token() }}",
			};
			
			//disable buttons
			$('#message').attr('disabled', 'disabled');
			$('#message_submit').attr('disabled', 'disabled');
			
			//autocomplete
			$('#message_submit').text('Posting...');
			
			
			$.post("messageboard",data, function(data) {
				$('#messagelist').html('Loading...');
				updateMessages();
				
				$('#message_submit').removeAttr("disabled");
				$('#message').removeAttr("disabled");
				$('#message_submit').text("Post It");
				$('#message').val('');	
            });
		});
		
		updateMessages();
	});
	
	function updateMessages() {
		var data = {
			from : 0,
			to : 0,
			_token : "{{ csrf_token() }}",
		}
		$.get("messages",data, function(data) {
			$('#messagelist').html('');
			$.each(data, function(key, value) {
				var html = '<div>'+value.character_name+' said @ '+value.created_at+': <br />'+value.message+'</div>';
				$('#messagelist').append(html);	
			});
       });
	}
</script>
@endpush


