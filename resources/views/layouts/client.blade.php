<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,700,300">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/trumbowyg.css') }}">
    <link rel="stylesheet" href="{{ asset('css/client.main.css') }}">
    @yield('css')
</head>
<body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/client/dashboard">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown">Citizens Charter<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/client/citizen_charter/vision_mission">Vision Mission</a></li>
                            <li><a href="/client/citizen_charter/organization_functions">Organization and Functions</a></li>
                            <li><a href="/client/citizen_charter/service_pledge">Service Plegde</a></li>
                            <li><a href="/client/citizen_charter/feedbacks">Receiving Feedback</a></li>
                            <li><a href="/client/citizen_charter/frontline_services">Frontline Services</a></li>
                            <li><a href="/client/citizen_charter/dswd_officials">DSWD Officials and Key Positions</a></li>
                        </ul>
                    </li>
                    <li><a href="/client/organization_structure">Organization Structure</a></li>
                    <li><a href="/client/faqs">FAQs</a></li>
                </ul>
            </div>
        </nav>
        <div class="clearfix"></div>
        <div class="container">
            @yield('content')
        </div>
        <footer>
            <script type="text/javascript" src="{{ asset('js/jquery.3.2.1.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
            @yield('script')
        </footer>
</body>
</html>

