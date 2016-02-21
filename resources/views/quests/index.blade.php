@extends('...layouts.master')
@section('title', 'Quests')
@section('content')

<?php /*
<div class="row">
       <div class="col-xs-2 col-md-1 col-lg-1">
         <button type="button" class="btn btn-default btn-s">
          <span class="glyphicon glyphicon-chevron-left"></span> 
        </button>
       </div>



         <div class="col-xs-12 col-md-9 col-lg-9">
      <div class="newquest-column">
        <div class="row">
          <div class="col-md-12">
      
  <!--<div class="panel panel-default">          
  <!-- Default panel contents -->
  <div class="panel-heading"><h3><?php $gamedetails['definition']['name'];
 ?>
  <div class="panel-body">
    <p>Step 5. admitt to god, ourselves and to another human...</p>
  </div>

  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item text-right"><button type="button" class="btn btn-default">Details</button> <button type="button" class="btn btn-success">Join Quest</button> <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-right"></span></button></li>
  </ul>

<div class="row">
   <div class="col-xs-2 col-md-1 col-lg-1">
        
   </div>
   <div class="col-md-9">
      
     <div class="panel panel-default">          
     <!-- Default panel contents -->
        
          <div class="panel-body">
              <div class="col-md-2">
              	<img src="http://lorempixel.com/100/100/" class="profile-image"/>
              </div>
              <div class="col-md-10">
              	<h2>{{$gamedetails['definition']['name']}}</h2>
              </div>
          </div>

          <!-- List group -->
          <ul class="list-group">
         <?php $count = 0;?>
          <?php foreach ($gametasks as $task): ?>
          	<?php $count++;?>
          	<?php if (isset($task['rewards']) && isset($task['description'])):?>
          		<li class="list-group-item clearfix">
          			<p class="pull-left">
          				<h3><?php echo $task['name'];?></h3>
          				<?php echo $task['description'];?><br />
          			<?php foreach ($task['rewards'] as $reward):?>
          				<?php echo $reward['value'];?> <?php echo $reward['metric']['name'];?><br />
          			<?php endforeach;?>
          			<a role="button" class="btn btn-primary pull-right" id="trigger_<?php echo $count;?>" onclick="javascript:doTask(<?php echo $count;?>); return false;" x-data-trigger="<?php echo $task['trigger'];?>" href="#">Complete</a>
          		</li>
          	<?php endif;?>
          <?php endforeach; ?>
           <!--
           <li class="list-group-item"><p class="pull-left">Dapibus ac facilisis in</p> <button type="button" class="btn btn-primary pull-right">Complete</button>
                <div class="clearfix"></div>
              </li>
              <li class="list-group-item"><p class="pull-left">Dapibus ac facilisis in</p> <button type="button" class="btn btn-primary pull-right">Complete</button>
                <div class="clearfix"></div>
              </li>
            <li class="list-group-item disable"><p>Dapibus ac facilisis in</p></li>
            <li class="list-group-item disable"><p>Dapibus ac facilisis in</p></li>
           -->
          </ul>
       </div>
    </div>
  
</div>

  
@push('scripts')
<script>
	$(document).ready(function() {
		
		$('li.list-group-item a').each(function(index) {
			var href = $(this).attr('href');
			if (href.indexOf('youtube') > -1) {
				var youtube = '<iframe width="560" height="315" src="'+href+'" frameborder="0" allowfullscreen></iframe>';
				$(this).after(youtube);
				$(this).remove();
			}
			if (href.indexOf('soundcloud') > -1) {
				var soundcloud = '<iframe width="100%" height="166" scrolling="no" frameborder="no" src="'+href+'"></iframe>';
				$(this).after(soundcloud);
				$(this).remove();
			}
			

		});
	});
	//https://www.youtube.com/embed/Tv40sIUCqMI

	function doTask(id) {
		
		var data = {
				gameId : '<?php echo $gameId;?>',
                trigger : $('#trigger_'+id).attr('x-data-trigger'),
                _token : "{{ csrf_token() }}",
            };
            
		$.post("dotask",data, function(data) {
                window.location = '/quests?continue=<?php echo $gameId;?>';
        });
	}
</script>    	
@endpush
  
@stop