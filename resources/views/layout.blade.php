
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
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Homeowners Management System</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.header {
    background-color: #4CAF50;
    color: white;
    padding: 10px 0;
    text-align: center;
}

.nav {
    text-align: center;
    margin: 20px 0;
}

.nav a {
    margin: 0 15px;
    text-decoration: none;
    color: #4CAF50;
    font-weight: bold;
}

.main-content {
    padding: 20px;
}

.stats-overview {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
}

.stat-item {
    background-color: white;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
    width: 20%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.stat-item h3 {
    margin: 0;
    font-size: 1.2em;
    color: #4CAF50;
}

.stat-item p {
    font-size: 2em;
    margin: 10px 0 0 0;
}

.recent-activity,
.quick-actions,
.upcoming-events,
.pending-complaints {
    background-color: white;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.recent-activity ul,
.upcoming-events ul,
.pending-complaints ul {
    list-style: none;
    padding: 0;
}

.recent-activity li,
.upcoming-events li,
.pending-complaints li {
    margin-bottom: 10px;
}

.quick-actions button {
    display: block;
    width: 100%;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.quick-actions button:hover {
    background-color: #45a049;
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">
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
                <li class="nav-item">
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
       
        <!-- Rest of your content -->
<br><br>
            <div class="container">
                <h2 style="text-align: center;">Welcome to the Homeowners Management System</h2>
<br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                <h3>{{ $homeownersCount }}</h3>
                                <p>Homeowners</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">
                                <h3>{{ $eventsCount }}</h3>
                                <p>Events</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">
                                <h3>{{ $complaintsCount }}</h3>
                                <p>Complaints</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-4">
 
            <!-- Statistics Overview -->
            <div class="row">
             
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Events</h5>
                            <p class="card-text">5</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pending Complaints</h5>
                            <p class="card-text">7</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Resolved Complaints</h5>
                            <p class="card-text">6</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Recent Activity -->
            <div class="mt-4">
                <h3>Recent Activity</h3>
                <ul class="list-group">
                    <li class="list-group-item">Complaint resolved: Noise Complaint (John Doe) - 2024-05-15</li>
                    <li class="list-group-item">New Event: Summer Pool Party - 2024-07-20</li>
                    <li class="list-group-item">Homeowner added: Olivia Anderson, Block H, House 8</li>
                    <li class="list-group-item">Complaint filed: Unauthorized Construction (Jane Smith) - 2024-05-14</li>
                </ul>
            </div>
    

    
            <!-- Upcoming Events -->
            <div class="mt-4">
                <h3>Upcoming Events</h3>
                <ul class="list-group">
                    <li class="list-group-item">Community BBQ - 2024-07-04</li>
                    <li class="list-group-item">Summer Pool Party - 2024-07-20</li>
                    <li class="list-group-item">Fall Harvest Festival - 2024-10-05</li>
                    <li class="list-group-item">Winter Wonderland Party - 2024-12-20</li>
                </ul>
            </div>
    
            <!-- Pending Complaints -->
            <div class="mt-4">
                <h3>Pending Complaints</h3>
                <ul class="list-group">
                    <li class="list-group-item">Noise Complaint - Loud music playing late at night from neighboring house.</li>
                    <li class="list-group-item">Unkept Lawn - The lawn of house 10B is overgrown and unsightly.</li>
                    <li class="list-group-item">Unauthorized Construction - Homeowner is building a shed without approval.</li>
                    <li class="list-group-item">Water Leak - There is a persistent water leak in the common area.</li>
                </ul>
            </div>
        </div>
    


    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>