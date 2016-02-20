<footer>
    @yield('footer')
    <p>&copy; 2015 DrugDrop, Inc.</p>
</footer>

@push('scripts')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
    $(function() {
        $('.disable-on-submit').attr('disabled', false);
        $( "#login_form" ).submit(function( event ) {
            event.preventDefault();

            var data = {
                email : $('#login_email').val(),
                password : $('#login_password').val(),
                _token : "{{ csrf_token() }}",
            };

            //disable buttons
            $('.disable-on-submit').attr('disabled', 'disabled');

            //autocomplete
            $('#login_submit').text('Signing in...');

            $.post("login",data, function(data) {
                if (data.success) {
                    window.location = '/dashboard';
                } else {
                    //enable and let them know...
                    $('#login_submit').text('Sign In');
                    //remove all attr
                    $('.disable-on-submit').removeAttr("disabled");
                }
            });
        });
    });
</script>
@endpush