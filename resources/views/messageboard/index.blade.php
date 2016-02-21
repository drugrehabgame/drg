@extends('layouts.master') @section('title', 'Messageboard') @section('content')
<h1>Message Board</h1>
<div class="messageboard">
	<div class="row">
		<div class="col-md-12">
			<br>
			<form role="form">
				<div class="form-group">
					<label for="messageText">Write a message:</label><input type="email" class="form-control" id="exampleMessageText" />
  <div class="btn-group">
    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Select a recipient <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#">Ally 1's name</a></li>
      <li><a href="#">Ally 2's name</a></li>
      <li><a href="#">Ally 3's name</a></li>
      <li><a href="#">Ally 4's name</a></li>
      <li><a href="#">Ally 5's name</a></li>
      <li class="divider"></li>
      <li><a href="#">Broadcast to all</a></li>
    </ul>
  </div>
					<button type="submit" class="btn btn-default">
					Submit
				</button>
				</div>
			</form>
			
			
			<h3>
				Message History:
			</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<blockquote>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
						</p> <small>You <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Ally's Name <cite>@ 12-Jan-2016 @ 3:53p.m.</cite></small>
					</blockquote>
					<blockquote>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
						</p> <small>You <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Ally's Name <cite>@ 12-Jan-2016 @ 3:53p.m.</cite></small>
					</blockquote>
					<blockquote>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
						</p> <small>You <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Ally's Name <cite>@ 12-Jan-2016 @ 3:53p.m.</cite></small>
					</blockquote>
					<blockquote>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
						</p> <small>You <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Ally's Name <cite>@ 12-Jan-2016 @ 3:53p.m.</cite></small>
					</blockquote>
					<blockquote>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
						</p> <small>You <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Ally's Name <cite>@ 12-Jan-2016 @ 3:53p.m.</cite></small>
					</blockquote>
				</div>
			</div>

		</div>
	</div>

	
	@stop
	
	@push('scripts')
<script src="/js/timeago.jquery.js"></script>

<script type='text/javascript'>
        
        $(document).ready(function() {
        
            $(".dropdown-menu li a").click(function(){
  var selText = $(this).text();
  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
});
        
        });
        
        </script>

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