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
    $(".jRate").jRate({
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
<script src="{{url('/js/Chart.min.js')}}"></script>
<script>
    $(function () {
        var ctx = $("#user-graph").get(0).getContext("2d");
        var data = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };
        var options = {

            ///Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines : true,

            //String - Colour of the grid lines
            scaleGridLineColor : "rgba(0,0,0,.05)",

            //Number - Width of the grid lines
            scaleGridLineWidth : 1,

            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,

            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,

            //Boolean - Whether the line is curved between points
            bezierCurve : true,

            //Number - Tension of the bezier curve between points
            bezierCurveTension : 0.4,

            //Boolean - Whether to show a dot for each point
            pointDot : true,

            //Number - Radius of each point dot in pixels
            pointDotRadius : 4,

            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth : 1,

            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius : 20,

            //Boolean - Whether to show a stroke for datasets
            datasetStroke : true,

            //Number - Pixel width of dataset stroke
            datasetStrokeWidth : 2,

            //Boolean - Whether to fill the dataset with a colour
            datasetFill : true,

            //String - A legend template
            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

        };
        var myLineChart = new Chart(ctx).Line(data, options);
    });
</script>
@endpush