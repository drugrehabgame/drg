@extends('layouts.master')
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
            <h3>{{Auth::user()->first_name}} {{Auth::user()->first_name}}</h3>
            <ul class="user-dashboard">
              <li class="level"><i class="fa fa-trophy"></i> Level <span class="game-actions level">5</span></li>
              <li class="xp"><i class="fa fa-bolt"></i> XP: <span class="game-actions xp">200</span></li>
              <li class="hp"><i class="fa fa-medkit"></i> HP: <span class="game-actions hp">233</span></li>
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
              <div class="col-md-3">
                <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                <P>Name name</P>
              </div>
              <div class="col-md-3">
                <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                <p>Jhon hammond</p>
              </div>
              <div class="col-md-3">
                <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                <p>Caribbean</p>
              </div>
              <div class="col-md-3">
                <img class="media-object" src="http://lorempixel.com/200/200/" alt="Allies">
                <p>Johnny Bravo</p>
              </div>
            </div>
            <a href="{{url('/allies')}}">More..</a>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="journal">
            <form id="create-journal" action="{{url('/journal')}}" method="post">
              <div class="pull-right">
                <span class="action-ok journal-action"><i class="fa fa-check"></i></span>
                <span class="action-cancel journal-action"><i class="fa fa-times"></i></span>
              </div>
              <textarea name="entry" placeholder="Today i feel..." class="form-control"></textarea>
            </form>
            <hr>
            <p><em class="small pull-right">Past entries</em></p>
            <div class="journal-entry">
              <p><em>The lord jesus</em></p>
            </div>
            <div class="journal-entry">
              <p><em>The lord jesus</em></p>
            </div>
            <div class="journal-entry">
              <p><em>The lord jesus</em></p>
            </div>
            <a href="{{url('/journal')}}">More..</a>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="history">
            <ul>
              <li>Mon 22-Feb-2016 @ 3:40 mood set to 3/4</li>
              <li>Mon 22-Feb-2016 @ 3:40 mood set to 3/4</li>
            </ul>
            <a href="{{url('/history')}}">More..</a>
          </div>
        </div>

      </div>
    </div>
  </div>
@stop
