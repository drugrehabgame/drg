@extends('...layouts.master') @section('title', 'Rewards') @section('content')

  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-1">
          <a href="{{url('/')}}" class="btn btn-block btn-default">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
        </div>
        <div class="col-md-2">
          <img alt="Bootstrap Image Preview" src="http://lorempixel.com/100/100/" class="img-circle center-block" />
          <h5 class="text-center text-primary">
            <strong>The Miricale Badge</strong>
          </h5>
          <small>
            <p class="text-center">Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna.</p>
          </small>
          </p>
        </div>
        <div class="col-md-2">
          <img alt="Bootstrap Image Preview" src="http://lorempixel.com/100/100/" class="img-circle center-block" />
          <h5 class="text-center text-primary">
            <strong>The Miricale Badge</strong>
          </h5>
          <small><p class="text-center">Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna.</p></small>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
        </div>
      </div>

    </div>
  </div>

@stop