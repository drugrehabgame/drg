@extends('...layouts.master')
@section('title', 'Quests')
@section('content')

<div class="row">
       <div class="col-xs-2 col-md-1 col-lg-1">
         <button type="button" class="btn btn-default btn-s">
          <span class="glyphicon glyphicon-chevron-left"></span> Left
        </button>
       </div>



         <div class="col-xs-12 col-md-9 col-lg-9">
      <div class="newquest-column">
        <div class="row">
          <div class="col-md-9">
      
  <div class="panel panel-default">          
  <!-- Default panel contents -->
  <div class="panel-heading">New Quest</div>
  <div class="panel-body">
    <p>Step 5. admitt to god, ourselves and to another human...</p>
  </div>

  <!-- List group -->
  <ul class="list-group">
    <li class="list-group-item text-right"><button type="button" class="btn btn-default">Details</button> <button type="button" class="btn btn-success">Join Quest</button> <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-right"></span></button></li>
              </ul>
            </div>
          </div>
          
        </div>
       </div>
      </div>
</div>



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
                <div class="col-md-6">
              <p>Step 5. admitt to god, ourselves and to another human...</p>
              </div>
              <div class="col-md-4">
              <p>50% </p>
               <canvas id="myChart" width="100" height="100"></canvas>
             </div>
          </div>

          <!-- List group -->
          <ul class="list-group">
           <li class="list-group-item"><p class="pull-left">Dapibus ac facilisis in</p> <button type="button" class="btn btn-primary pull-right">Complete</button>
                <div class="clearfix"></div>
              </li>
              <li class="list-group-item"><p class="pull-left">Dapibus ac facilisis in</p> <button type="button" class="btn btn-primary pull-right">Complete</button>
                <div class="clearfix"></div>
              </li>
            <li class="list-group-item disable"><p>Dapibus ac facilisis in</p></li>
            <li class="list-group-item disable"><p>Dapibus ac facilisis in</p></li>
          </ul>
       </div>
    </div>
  
</div>

  
@stop