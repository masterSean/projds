<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>DSWD Guest Kiosk</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,700,300">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/trumbowyg.css') }}">
        <link rel="stylesheet" href="{{ asset('css/client.main.css') }}">
        @yield('css')
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-4 sidebar1">
                    <div class="logo">
                        <img src="{!! asset('images/logo.png') !!}" class="img-responsive" alt="Logo">
                    </div>
                    <br>
                    <div class="left-navigation">
                        <ul class="list">
                            <li class="{!! Request::is('client/dashboard') ? 'active_nav' : '' !!}"><a href="/client/dashboard">Home</a></li>
                            <li class="{!! Request::is('client/organization_structure') ? 'active_nav' : '' !!}"><a href="/client/organization_structure">Organization Structure</a></li>
                            <li class="{!! Request::is('client/faqs') ? 'active_nav' : '' !!}"><a href="/client/faqs">FAQs</a></li>
                        </ul>

                        <br>

                        <ul class="list">
                            <h5><strong>Citizens Charter</strong></h5>
                            <li class="{!! Request::is('client/citizen_charter/vision_mission') ? 'active_nav' : '' !!}"><a href="/client/citizen_charter/vision_mission">Vision Mission</a></li>
                            <li class="{!! Request::is('client/citizen_charter/organization_functions') ? 'active_nav' : '' !!}"><a href="/client/citizen_charter/organization_functions">Organization and Functions</a></li>
                            <li class="{!! Request::is('client/citizen_charter/service_pledge') ? 'active_nav' : '' !!}"><a href="/client/citizen_charter/service_pledge">Service Plegde</a></li>
                            <li class="{!! Request::is('client/citizen_charter/feedbacks') ? 'active_nav' : '' !!}"><a href="/client/citizen_charter/feedbacks">Receiving Feedback</a></li>
                            <li class="{!! Request::is('client/citizen_charter/frontline_services') ? 'active_nav' : '' !!}"><a href="/client/citizen_charter/frontline_services">Frontline Services</a></li>
                            <li class="{!! Request::is('client/citizen_charter/dswd_officials') ? 'active_nav' : '' !!}"><a href="/client/citizen_charter/dswd_officials">DSWD Officials and Key Positions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 col-sm-8">
                    <div class="main-container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <script type="text/javascript" src="{{ asset('js/jquery.3.2.1.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
            @yield('script')
        </footer>
    </body>
</html>

