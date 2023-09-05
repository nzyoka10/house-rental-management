<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.css">
    <link href='fullcalendar/core/main.css' rel='stylesheet' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        /* Style for the pop-up container */
        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
            z-index: 1;
        }

        /* Style for the pop-up content */
        .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }
    </style>

</head>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Logo-here</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <!-- div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </div -->

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#registrationModal">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </div>



     <!-- Registration Modal -->
     <div class="modal" id="registrationModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-md-center">User Account</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <!-- Registration form goes here -->
                    <form action="./includes/user.php" method="post">
                        <div class="form-group">
                            <label for="fname">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Your name here..." required>
                        </div>

                        <div class="form-group">
                            <label for="username">Email:</label>
                            <input type="text" class="form-control" id="username" name="email" placeholder="email@example.com.."  required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="create password..."  required>
                        </div>

                        <div class="form-group">
                            <label for="userRole">User type:</label>
                            <select class="form-control" id="userRole" name="userRole" required>
                                <option value="landlord">Landlord</option>
                                <option value="admin">Admin</option>
                                <option value="tenant">Tenant</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Register user</button>
                    </form>
                </div>

                
            </div>
        </div>
    </div>



</nav>



















<!-- Sidebar -->
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="position-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Module 1
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Module 2
                        </a>
                    </li>
                    <!-- Add more submenus for other modules -->
                </ul>
            </div>
        </nav>

        <!-- Main Content Area -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <!-- Content of the selected module will go here -->
            <h1>Dashboard</h1>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 1</h5>
                            <p class="card-text">Some information about Card 1.</p>
                            <a href="#" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 2</h5>
                            <p class="card-text">Some information about Card 2.</p>
                            <a href="#" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 3</h5>
                            <p class="card-text">Some information about Card 3.</p>
                            <a href="#" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 4</h5>
                            <p class="card-text">Some information about Card 4.</p>
                            <a href="#" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left-side card (User Info and Calendar) -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- User Info -->
                            <div class="user-info">
                                <h4 class="card-title text-green">logged User Name</h4>
                            <span class="card-text"> Title</span>
                            </div>
                            

                            <!-- Calendar (You can use a calendar library or embed a calendar here) -->
                            <div id="calendar" style="width: 100%; height: 120px;">
                                <!-- Calendar content goes here -->
                                <div id='calendar'></div>

                                <script>

                                    document.addEventListener('DOMContentLoaded', function() {
                                      var calendarEl = document.getElementById('calendar');
                                      var calendar = new FullCalendar.Calendar(calendarEl, {
                                        initialView: 'dayGridMonth'
                                      });
                                      calendar.render();
                                    });
                              
                                  </script>

                            </div>
                        </div>
                    </div>
                </div>


<!-- Right-side card (Recent Listings Table) -->
<div class="col-md-6 mb-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Recent Listings</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Landloard</th>
                        <th>Total units</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample table row, repeat this for each listing -->
                    <tr>
                        <td>1</td>
                        <td>Cozy Apartment</td>
                        <td>Nairobi name</td>
                        <td>100</td>
                        <td>Mombasa</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Luxury Villa</td>
                        
                        <td>Mombasa lotan</td>
                        <td>25,000 </td>
                        <td>Mombasa</td>
                    </tr>
                    <!-- Add more table rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>




            </div>
        </main>
    </div>
</div>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    


</body>
</html>
