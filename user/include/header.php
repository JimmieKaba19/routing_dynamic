<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rout-ing || Client Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@100..900&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0 shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-6 text-primary"><i class="fas fa-bus text-secondary me-3"></i>Rout-ing</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav me-auto">
                        <!-- Other navbar items can go here if needed -->
                    </div>
                    <div class="navbar-nav ms-auto">
                        <span class="me-3 text-muted d-none d-lg-block">Logged in as: <strong id="currentUser ">User  Name</strong></span>
                        <a href="logout.html" class="btn btn-secondary rounded py-2 px-4 d-none d-lg-block">Logout</a>
                    </div>
                    <div class="navbar-nav d-lg-none">
                        <span class="text-muted">Logged in as: <strong id="currentUser ">User  Name</strong></span>
                        <a href="logout.html" class="btn btn-secondary rounded py-2 px-4">Logout</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Start -->
            <div class="col-lg-2 col-md-4 col-sm-12 pt-5 sidebar shadow bg-dark">
                <div class="justify-content-center rounded bg-light p-3 mb-1 text-center">
                    <img src="img/cobb Kaba.jpg" class="rounded-circle" style="width: 100px; height: 100px;" alt="Image">  
                    <p class="mb-0">User  Name</p>
                    <p class="text-primary mt-0">username@gmail.com</p>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-item nav-link custom-link" href="dash.php">
                            <i class="fas fa-pager text-danger me-3"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link custom-link" href="book.php">
                            <i class="fas fa-ticket-alt text-danger me-3"></i>Book a Trip
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link custom-link" href="profile.php">
                            <i class="fas fa-user-cog text-danger me-3"></i>Manage Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link custom-link" href="contact.php">
                            <i class="fas fa-headset text-danger me-3"></i>Contact & Help
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar End -->