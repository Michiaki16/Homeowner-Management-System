<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
     <!-- Leaflet CSS -->
     <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<title>Homeowners Management System</title>
</head>
<style>
    #map {
        height: 700px;
        width: 70%;
        margin: auto;
    }
    h1 {
            text-align: center; /* Center the text */
        }
</style>
<body>
    <div class="container-fluid">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">HMS</a>
        <!-- Navbar toggle button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links and search form -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('layout')}}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/homeowners">
                        <i class="fas fa-users"></i> Members
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('events.index')}}">
                        <i class="far fa-calendar-alt"></i> Events
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('complaints.index') }}">
                        <i class="fas fa-exclamation-circle"></i> Complaints
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('maps.index')}}">
                        <i class="fas fa-map"></i> Maps
                    </a>
                </li>
            </ul>
            <!-- Search form -->
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</nav>
<br><br>
<div class="container">
    <h1>Map of the Subdivision</h1>
    <div id="map"></div>
    <br>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>

        var map = L.map('map').setView([14.5824, 121.0568], 13);


        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);


        L.marker([14.5824, 121.0568]).addTo(map)
            .bindPopup("You're in Garden way Subdivision")
            .openPopup();
    </script>
    </div>
</body>
</html>
