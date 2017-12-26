<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/light-bootstrap-dashboard.css?v=1.4.0') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,700,300">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/trumbowyg.css') }}">
    @yield('css')
</head>
<body>
    
    <div class="wrapper">
        <div class="sidebar" data-color="azure">
            <div class="sidebar-wrapper">
                <div class="logo"><a href="" class="simple-text">DSWD</a></div>
                <ul class="nav">
                    <li class="active">
                        <a href="/admin/dashboard">
                            <i class="fa fa-pie-chart"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/citizen_charter">
                            <i class="fa fa-user"></i>
                            <p>Citizen Charter</p>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/organization_structure">
                            <i class="fa fa-group"></i>
                            <p>Organization Structure</p>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/faqs">
                            <i class="fa fa-question-circle"></i>
                            <p>FAQs</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-gears"></i>
                            <p>Settings</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                         
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="">Testing</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content" ng-app="dswd-app">
                @yield('content')
            </div>
        </div>
    </div>
    

    <script type="text/javascript" src="{{ asset('js/jquery.3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-notify.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/light-bootstrap-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/trumbowyg.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/angular-resource.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/assets/main.js') }}"></script>
    <script type="text/javascript">
        $(document).on('show.bs.modal', '.modal', function() {
            $(this).appendTo('body');
        })
    </script>
    @yield('script')
</body>
</html>
