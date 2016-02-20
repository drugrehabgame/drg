<footer>
    @yield('footer')
    <p>&copy; 2015 DrugDrop, Inc.</p>
</footer>

@push('scripts')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="{{url('/js/jRate.min.js')}}"></script>
<script>
    $("#jRate").jRate({
        startColor: "#FFE614",
        endColor: "#FFCB14",
        rating:0
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
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    $(function () {
        $('#user-graph').highcharts({
            chart: {
                type: 'spline'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Temperature'
                },
                labels: {
                    formatter: function () {
                        return this.value + '°';
                    }
                }
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                name: 'Tokyo',
                marker: {
                    symbol: 'square'
                },
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
                    y: 26.5,
                    marker: {
                        symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
                    }
                }, 23.3, 18.3, 13.9, 9.6]

            }, {
                name: 'London',
                marker: {
                    symbol: 'diamond'
                },
                data: [{
                    y: 3.9,
                    marker: {
                        symbol: 'url(https://www.highcharts.com/samples/graphics/snow.png)'
                    }
                }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });
    });
</script>
@endpush