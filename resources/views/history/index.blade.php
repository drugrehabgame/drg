@extends('...layouts.master') @section('title', 'Allies') @section('content')
<div class="row">
  <div class="history">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">History</div>
      <div class="panel-body">
        <p>This page shows all your past activity in DRG.</p>

        <div class="row">
          <div class="col-md-2">
            <h6>Mon 22-Feb-2016 @ 3:40p.m.</h6>
          </div>
          <div class="col-md-10">
            <h5>Mood set to 3/5</h5></div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <h6>Mon 22-Feb-2016 @ 2:55a.m.</h6>
          </div>
          <div class="col-md-10">
            <h5>Completed quest [link:quest title]</h5></div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <h6>Sun 21-Feb-2016 @ 3:55a.m.</h6>
          </div>
          <div class="col-md-10">
            <h5>You wrote a journal entry [link:First few words of entry]</h5></div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <h6>Sat 20-Feb-2016 @ 4:26p.m.</h6>
          </div>
          <div class="col-md-10">
            <h5>You received a reward from [link: Sender person or org] : [link:Reward title]</h5></div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <h6>Fri 19-Feb-2016 @ 1:32p.m.</h6>
          </div>
          <div class="col-md-10">
            <h5>You received a message from: [link: Firstname Lastname]</h5></div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <h6>Fri 18-Feb-2016 @ 3:32p.m.</h6>
          </div>
          <div class="col-md-10">
            <h5>You created/accepted a new quest: [link: quest title]</h5></div>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
@stop