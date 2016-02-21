@extends('...layouts.master')
@section('title', 'Journal')
@section('content')
    <div class="shorter-page">
        <div class="update-journal green-bg">
            <h4><i class="fa fa-pencil"></i> Update Journal</h4>
            <hr>
            <div class="row">
                <form action="{{url('/journal')}}" action="post">
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