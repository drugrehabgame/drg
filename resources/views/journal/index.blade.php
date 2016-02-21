@extends('...layouts.master')
@section('title', 'Journal')
@section('content')
    <div class="shorter-page">
        <div class="update-journal green-bg">
            <h4><i class="fa fa-pencil"></i> Update Journal</h4>
            <hr>
            <div class="row">
                <form action="{{url('/journal')}}" action="post">
                    <input type="hidden" value="{{ csrf_token()}}" name="_token"/>
                    <div class="col-md-2">
                        <img src="http://lorempixel.com/80/80/"/>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <textarea placeholder="How is your progress going.." class="form-control"></textarea>
                        </div>
                        <div class="pull-right">
                            <div class="mood-rating">
                                <strong class="small white-color">Mood Rating</strong>
                                <span id="journal-rate"></span>
                            </div>
                            <button class="btn btn-success"><i class="fa fa-check"></i> Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="update-journal green-bg">
            <div class="row">
                <div class="col-md-2">
                    <img src="http://lorempixel.com/80/80/"/>
                </div>
                <div class="col-md-10">
                    <div class="pull-left">
                        <h4>Frank Sine</h4>
                        <p>16/02/2016</p>
                        <p><i class="fa fa-check"></i> Positive</p>
                    </div>
                </div>
            </div>
            <hr>
            <p>Good work this week, I see you have done a few quests that is great.  why not try
                and work on the things we talked about in our session.
                Remember that 1. it's about emotion
                2. identify the emotion
                3. control the emotion
                4. be free
                Your doing well, keep at it.  Remeber our 3 steps back but 2 steps forward! IMPORTANT!!</p>
        </div>
    </div>
@stop
@push('scripts')
<script>
    $("#journal-rate").jRate({
        startColor: "#FFE614",
        endColor: "#FFCB14",
        rating:0
    });
</script>
@endpush