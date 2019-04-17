<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
         <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head> --}}
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" type="image/png" href="http://demo.truebus.co.in/admin/assets/uploads/favicons/1495099426_bus1.jpg" />
        <title>Online Bus Ticket Booking</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
        <!-- custom CSS -->
        <link href="http://demo.truebus.co.in/assets/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="http://demo.truebus.co.in/assets/css/truebus.css" rel="stylesheet">
        <link href="http://demo.truebus.co.in/assets/css/parsley.css" rel="stylesheet">
        <link href="http://demo.truebus.co.in/assets/css/datepick.css" rel="stylesheet">

        <script src="http://demo.truebus.co.in/assets/js/jquery.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
        <script src="http://demo.truebus.co.in/assets/js/jquery.raty.js"></script>

        <style>
           html, body {
               background-color: #fff;
               color: #636b6f;
               font-family: 'Nunito', sans-serif;
               font-weight: 200;
               height: 100vh;
               margin: 0;
           }

           .full-height {
               height: 100vh;
           }

           .flex-center {
               align-items: center;
               display: flex;
               justify-content: center;
           }

           .position-ref {
               position: relative;
           }

           .top-right {
               position: absolute;
               right: 10px;
               top: 18px;
           }

           .content {
               text-align: center;
           }

           .title {
               font-size: 84px;
           }

           .links > a {
               color: #636b6f;
               padding: 0 25px;
               font-size: 13px;
               font-weight: 600;
               letter-spacing: .1rem;
               text-decoration: none;
               text-transform: uppercase;
           }

           .m-b-md {
               margin-bottom: 30px;
           }
       </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <!--SEARCH-BAR-->
        <div class="container" ng-controller="search">
            <div class="row" style="min-height:400px;margin-top:120px;">
                <div class="col-md-6">
                    <form id="myForm" method="post" data-parsley-validate="" autocomplete="off">
                        <section id="Search" class="LB XXCN  P20">
                            <h1 class="bookTic XCN TextSemiBold">Online Bus Tickets Booking</h1>
                            <div class="searchRow clearfix">
                                <div class="LB">
                                    <label class="inputLabel">From</label>
                                    <select class="browser-default XXinput  custom-select searchings">
                                      <option selected>Open this select menu</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>

                                </div>
                                <div class="searchRight retJouney">
                                    <label class="inputLabel">To</label>
                                    <select class="browser-default XXinput  custom-select searchings">
                                      <option selected>Open this select menu</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="searchRow clearfix" style="margin-top:20px;">
                                <div class="LB">
                                    <label class="inputLabel">Date of Journey</label>
                                    <span class="blackTextSmall"></span>
                                    <input id="Calenderfrom" class="XXinput calendar date-pick  pickup_date pickup_datef Calenderfrom" placeholder="dd-mm-yyyy" readonly type="text" title="Date in the format dd-mmm-yyyy" tabindex="3" />
                                </div>
                                <div class="searchRight retJouney">
                                    <label class="inputLabel">Date of Return<span class="opt">&nbsp;(Optional)</span></label>
                                    <input id="Calenderreturn" class="XXinput calendar date-pick pickup_dater" placeholder="dd-mm-yyyy" type="text" title="Date in the format dd-mmm-yyyy" readonly tabindex="4" />
                                </div>
                            </div>

                            <div class=""  style="margin-top:20px;">
                              <button class="button reset_new" id="resetBtn" ng-click="resetbtn()">Reset Date</button>
                              <button class="RB Xbutton" id="searchBtn" ng-click="homesearch()">Search Buses</button>
                            </div>
                        </section>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="tb_bus">
                        <img src="http://demo.truebus.co.in/assets/images/bus.png">
                    </div>
                </div>
            </div>
        </div>
        <!--SEARCH-BAR-END-->
    </body>
</html>
