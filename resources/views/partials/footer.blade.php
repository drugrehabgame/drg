<footer>
    @yield('footer')
    <p>&copy; 2015 DrugDrop, Inc.</p>
</footer>

@push('scripts')
<script>
    $("#main-rating").jRate({
        startColor: "#FFE614",
        endColor: "#FFCB14",
        rating:0,
        precision: 1,
    });
</script>
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
                    window.location = "{{url('/dashboard')}}";
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