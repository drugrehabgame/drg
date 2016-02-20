@extends('...layouts.master')
@section('title', 'Journal')
@section('content')
    <div class="row">
        <div class="shorter-page">
            <div class="update-journal">
                <div class="row">
                    <form action="{{url('/')}}"
                    <div class="col-md-3">
                        <img src="http://lorempixel.com/80/80/"/>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <textarea placeholder="How is your progress going.." class="form-control"></textarea>
                        </div>
                        <div class="pull-right">
                            <div class="mood-rating">
                                <span class="small">Mood Rating</span><br>
                                <span class="jRate"></span>
                            </div>
                            <button class="btn btn-success"><i class="fa fa-check"></i> Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop