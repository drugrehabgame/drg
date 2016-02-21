@extends('...layouts.master')
@section('title', 'Dashboard')
@section('content')
  <div class="row">
    <div class="col-md-4">
      <div class="dashboard-column">
        <div class="row">
          <div class="col-md-4">
            <img src="http://lorempixel.com/200/200/" class="profile-image"/>
          </div>
          <div class="col-md-8">
            <h3>{{Auth::user()->character_name}}</h3>
            
            <ul class="user-dashboard">
              <li class="level"><i class="fa fa-trophy"></i> Level <span class="game-actions level"><?php echo $profile['levels']['points']['name'];?></span></li>
              <li class="xp"><i class="fa fa-bolt"></i> XP: <span class="game-actions xp"><?php echo $profile['exp']['points'];?></span></li>
              <li class="hp"><i class="fa fa-medkit"></i> HP: <span class="game-actions hp"><?php echo $profile['health']['points'];?></span></li>
            </ul>
          </div>
        </div>
        <div class="dashboard-section">
          <h3 class="text-center"><a href="{{url('/rewards')}}"><i class="fa fa-gift"></i> Rewards</a></h3>
          <ul class="rewards-list">
            <li>Enjoy a free coffee</li>
            <li>Claim your 1 month subscription to Spotify</li>
          </ul>
        </div>
        <div class="dashboard-section">
          <h3 class="text-center"><a href="{{url('/stats')}}"><i class="fa fa-area-chart"></i> Stats</a></h3>
          <canvas id="user-graph" height="400"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="dashboard-column">
        <h3 class="text-center"><a href="{{url('/quests')}}"><i class="fa fa-binoculars"></i> Quests</a></h3>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <?php foreach($quests as $key => $value): ?>
		  
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading_<?php echo $value['id'];?>">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $value['id'];?>" aria-expanded="false" aria-controls="collapse_<?php echo $value['id'];?>">
                  <?php echo $value['name'];?>
                </a>
                <?php if ($value['current']):?>
                	<span>[In Progress]</span>
                <?php endif;?>
              </h4>
            </div>
            <div id="collapse_<?php echo $value['id'];?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_<?php echo $value['id'];?>">
              <div class="panel-body">
              	<?php if (isset($value['description'])):?>
                <?php echo $value['description'];?>
                <?php endif;?>
                <br /><br />
                <?php if ($value['current']):?>
                	<a role="button" class="btn btn-success" href="/quests?continue=<?php echo $value['id'];?>">Continue Quest</a>
                <?php else:?>
                	<a role="button" class="btn btn-success" href="/quests?join=<?php echo $value['id'];?>">Start Quest</a>
                <?php endif;?>
                
              </div>
            </div>
          </div>
          
          <?php endforeach;?>
          
          <!--
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Quest 1
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Quest 2
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Quest 3
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          -->
        </div>
      </div>
   </div>
    <div class="col-md-4">
      <div class="allies-tabs dashboard-column">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#allies" aria-controls="home" role="tab" data-toggle="tab">Allies</a></li>
          <li role="presentation"><a href="#journal" aria-controls="profile" role="tab" data-toggle="tab">Journal</a></li>
          <li role="presentation"><a href="#history" aria-controls="messages" role="tab" data-toggle="tab">History</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="allies">
            <div class="media">
              <div class="media-left">
                  <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
              </div>
              <div class="media-body">
                <h4 class="media-heading">You are an inspiration, Keep up the good work</h4>
                <p class="pull-right"><em class="small">Sunday 21-Feb-2016</em></p>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
              </div>
              <div class="media-body">
                <h4 class="media-heading">Hey bro, loving your progress!</h4>
                <p class="pull-right"><em class="small">Sunday 21-Feb-2016</em></p>
              </div>
            </div>
            <div class="row allies-row">
              <div class="col-md-12">
             	<h4>Friends of <?php echo Auth::user()->character_name;?></h4>		
              </div>
              <?php foreach ($allies as $ally):?>
              <div class="col-md-3">
                <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                <p><?php echo $ally['character_name'];?></p>
              </div>
              <?php endforeach;?>
            </div>
            <a href="{{url('/allies')}}" class="read-more">More..</a>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="journal">
            <form id="create-journal" action="{{url('/journal')}}" method="post">
              <input type="hidden" name="status" id="journal-status-panel"/>
              <p class="small pull-left">Mood rating <span id="rating-panel"></span></p>
              <div class="pull-right">
                <span class="action-ok journal-action"><i class="fa fa-check"></i></span>
              </div>
              <textarea name="entry" placeholder="Today i feel..." class="form-control" id="entry-panel"></textarea>
            </form>
            <hr>
            <p><em class="small pull-right">Past entries</em></p>
            @foreach($journals as $journal)
            <div class="journal-entry">
              <p><em>{{$journal->entry}}</em></p>
              <p class="small pull-left">Mood rating <span id="rating{{$journal->id}}"></span></p>
              @push('scripts')
              <script>
                $("#rating{{$journal->id}}").jRate({
                  startColor: "#FFE614",
                  endColor: "#FFCB14",
                  readOnly: true,
                  rating:{{(int)$journal->status}},
                });
              </script>
              @endpush
              <p class="small pull-right"><em>{{$journal->created_at->diffForHumans()}}</em></p>
            </div>
            @endforeach
            <a href="{{url('/journal')}}" class="read-more">More..</a>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="history">
            <ul>
              <li>Mon 22-Feb-2016 @ 3:40 mood set to 3/4</li>
              <li>Mon 22-Feb-2016 @ 3:40 mood set to 3/4</li>
            </ul>
            <a href="{{url('/history')}}" class="read-more">More..</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
@push('scripts')
<script>
  $(function () {
    var ctx = $("#user-graph").get(0).getContext("2d");
    var data = {
      labels: ["January", "February", "March", "April", "May", "June", "July"],
      datasets: [
        {
          label: "My First dataset",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56, 55, 40]
        },
        {
          label: "My Second dataset",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [28, 48, 40, 19, 86, 27, 90]
        }
      ]
    };
    var options = {

      ///Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines : true,

      //String - Colour of the grid lines
      scaleGridLineColor : "rgba(0,0,0,.05)",

      //Number - Width of the grid lines
      scaleGridLineWidth : 1,

      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,

      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,

      //Boolean - Whether the line is curved between points
      bezierCurve : true,

      //Number - Tension of the bezier curve between points
      bezierCurveTension : 0.4,

      //Boolean - Whether to show a dot for each point
      pointDot : true,

      //Number - Radius of each point dot in pixels
      pointDotRadius : 4,

      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth : 1,

      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius : 20,

      //Boolean - Whether to show a stroke for datasets
      datasetStroke : true,

      //Number - Pixel width of dataset stroke
      datasetStrokeWidth : 2,

      //Boolean - Whether to fill the dataset with a colour
      datasetFill : true,

      //String - A legend template
      legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

    };
    var myLineChart = new Chart(ctx).Line(data, options);
  });
</script>
@endpush
@push('scripts')
<script>
  $("#rating-panel").jRate({
    startColor: "#FFE614",
    endColor: "#FFCB14",
    rating:0,
    precision: 1,
    onChange: function(rating) {
      $('#journal-status-panel').val(rating);
    }
  });
</script>
@endpush
@push('scripts')
<script>
  $('.action-ok').on('click', function(){
    $('.action-ok').off('click');
    sendJournal();
  });
  function sendJournal(){
    var data = {
      _token : "{{ csrf_token() }}",
      status : $('#journal-status-panel').val(),
      entry : $('#entry-panel').val(),
    };
    $.post("journal",data, function(data) {
      $('#journal-status-panel').val('');
      $('#entry-panel').val('');
      window.location.reload();
    });
  }
</script>
@endpush