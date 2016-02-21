@extends('...layouts.master')
@section('title', 'Journal')
@section('content')
    <div class="shorter-page">
        <div class="update-journal green-bg">
            <h4><i class="fa fa-pencil"></i> Update Journal</h4>
            <hr>
            <div class="row">
                <form action="{{url('/journal')}}" method="post">
                    <input type="hidden" value="{{ csrf_token()}}" name="_token"/>
                    <input type="hidden" id="mood-rating-journal" name="status"/>
                    <div class="col-md-2">
                        <img src="http://lorempixel.com/80/80/"/>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <textarea placeholder="How is your progress going.." class="form-control" name="entry"></textarea>
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
        @foreach($journals as $journal)
            <div class="update-journal green-bg">
                <div class="row">
                    <div class="col-md-2">
                        <img src="http://lorempixel.com/80/80/"/>
                    </div>
                    <div class="col-md-10">
                        <div class="pull-left">
                            <h4>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h4>
                            <p>{{$journal->created_at->format('d/m/Y')}}</p>
                            <p><strong>Mood rating</strong> <span id="rating{{$journal->id}}"></span></p>
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
                        </div>
                    </div>
                </div>
                <hr>
                <p>{{$journal->entry}}</p>
            </div>
        @endforeach
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
        rating:0,
        precision: 1,
        onChange: function(rating) {
            $('#mood-rating-journal').val(rating);
        }
    });
</script>
@endpush