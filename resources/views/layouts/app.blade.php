<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Training</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">HCAS Hockeyschool</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-nav mr-auto" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                
                </ul>
                <li class="nav-item activ">
                    <a class="nav-link" href="#">Oefenstof <!--<span class="sr-only">(current)</span>--></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mijn account</a>
                </li>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log uit</button>
            </div>
        </nav>
         <!-- End Navigation -->
         <!-- Start Sub Header -->
         <div class="menu">
        <div class="content">
            <h1 id="teamtext">Trainingen - H1</h1>
            <div class="userwrapper">
                <div class="profile">
                    <img class="avatar" src="/img/avatar_icon.png">
                    <div class="name">charaf</div>
                </div>
                <div class="dividerwrapper">
                    <div class="divider"></div>
                </div>
                <div class="team">
                    <img class="avatar" src="/img/team_icon.png">       
                    <label>
                        <select name="team" id="chooseteam">
                        <option class="Senioren" id="1">H1</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
        </div>
         <!-- End Sub Header -->
         <container>

         </container> 
         <!-- Start Footer -->
         <div class="footer">
            <h5>Ⓒ HCAS - 2020</h5>
        </div>
        <!-- End Footer -->
    </body>
</html>