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
            <a class="navbar-brand" href="{{url('/')}}">Drug Rehab Game</a>
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
                    <div class="form-group pull-left text-area-container">
                        <textarea name="entry" class="form-control" placeholder="Enter your status"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Send</button>
                </form>
            </div>
            @endif
            <div class="navbar-right">
                @if (Auth::check())
                <span><em class="small">Welcome {{Auth::user()->first_name}}</em></span>
                <a href="{{url('/goodbye')}}" title="Logout" class="info-btn"><i class="fa fa-sign-out"></i></a>
                <a href="{{url('/messages')}}" class="info-btn" title="Messages"><i class="fa fa-envelope"></i></a>
                @else
                    @include('partials.login-form')
                @endif
                <a href="{{url('/info')}}" class="info-btn" title="Info"><i class="fa fa-info"></i></a>
                <a href="{{url('/support')}}" class="info-btn" title="Support"><i class="fa fa-question"></i></a>
            </div>
        </div><!--/.navbar-collapse -->
        </div>
    </nav>
</header>