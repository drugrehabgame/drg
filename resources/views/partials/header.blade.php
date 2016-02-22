<header>
  
    <nav class="navbar navbar-fixed-top">
      
        <div class="container">
      
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}" title="Drug Rehab Game" id="logo">
                <img src="{{url('/css/img/drg.png')}}"/>
              </a>
            </div>
          
          
          
            <div id="navbar" class="navbar-collapse collapse">
            @if (Auth::check())
            <div class="moodbox pull-left">
                <span class="small">Mood Rating</span><br>
                <span id="main-rating"></span>
            </div>
            <div class="pull-left mood-form-container">
                <form action="{{url('/journal')}}" method="POST" id="mood-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="status" id="journal-status-header"/>
                    <div class="form-group pull-left text-area-container">
                        <input type="text" name="entry" class="form-control" placeholder="Enter your status" id="entry-header">
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i></button>
                </form>
            </div>
              
              
              
              
          <div class="pull-left mini-stats-container">
           <ul class="user-mini-stats">
              <li class="level"><i class="fa fa-trophy"></i> Level: <span class="game-actions level">
                      {{$UserProfile['levels']['points']['name']}}</span>
              </li>
              <li class="xp"><i class="fa fa-bolt"></i> XP: <span class="game-actions xp">
                      {{$UserProfile['exp']['points']}}</span></li>
              <li class="hp"><i class="fa fa-medkit"></i> HP: <span class="game-actions hp">
                {{$UserProfile['health']['points']}}</span></li>
            </ul>
          </div>
            @endif
            <div class="navbar-right">
                @if (Auth::check())
                <span><em class="small">Welcome {{Auth::user()->first_name}}</em></span>
                <a href="{{url('/goodbye')}}" title="Logout" class="info-btn"><i class="fa fa-sign-out"></i></a>
                <a href="{{url('/messageboard')}}" class="info-btn" title="Messages"><i class="fa fa-envelope"></i></a>
                @else
                    @include('partials.login-form')
                @endif
                <a href="{{url('/info')}}" class="info-btn" title="Info"><i class="fa fa-info"></i></a>
                <a href="{{url('/support')}}" class="info-btn" title="Support"><i class="fa fa-question"></i></a>
            </div>
              
              
        </div><!--/.navbar-collapse  -->
      
        </div>
      
      
    </nav>

  
  
</header>
@push('scripts')
<script>
    $("#main-rating").jRate({
        startColor: "#FFE614",
        endColor: "#FFCB14",
        rating:0,
        precision: 1,
        onChange: function(rating) {
            $('#journal-status-header').val(rating);
        }
    });
</script>
<script>
    $('#mood-form').on('submit', function(e){
        e.preventDefault();
        var data = {
            _token : "{{ csrf_token() }}",
            status : $('#journal-status-header').val(),
            entry : $('#entry-header').val(),
        };
        $.post("journal",data, function(data) {
            $('#journal-status-header').val('');
            $('#entry-header').val('');
            window.location.reload();
        });
    });
  
 function goBack() {
    window.history.back();
}
</script>
@endpush