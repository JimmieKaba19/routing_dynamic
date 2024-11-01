<?php
    include("include/header.php");
    ?>

<!-- Dashboard Overview Start -->
<div class="col-lg-10 col-md-8 col-sm-12 content">
    <!-- Dashboard Overview Start -->
    <!-- <div class="content"> -->
        <div class="container py-5">
            
            <div class="row bg-breadcrumb rounded">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize text-white mb-3">Welcome, [User 's Name]!</h1>
                    <p class="mb-0">Here’s a quick overview of your upcoming trips and notifications.</p>
                </div>
            </div>
            
            
            <div class="row g-4 my-3">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card text-center p-4 bg-breadcrumb">
                        <h5 class="mb-3 text-white">Total Trips</h5>
                        <p>Trips travelled with Rout-ing</p>
                        <p class="btn btn-light">10</p>                    
                    </div>
                </div> 
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card text-center p-4 bg-breadcrumb">
                        <h5 class="mb-3 text-white">Rout-ing Travel Points</h5>
                        <p>Redeem points to when traveling to save you some money.</p>
                        <p class="btn btn-light">RP: 500</p>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card text-center p-4 bg-breadcrumb">
                        <h5 class="mb-3 text-white">Total Amount spent</h5>
                        <p>How much have you spent with us.</p>
                        <p class="btn btn-light">Ksh: 5500</p>
                    </div>
                </div>
               
            </div>
            
            <div class="row g-4">
                <!-- last trips Start -->
                <div class="row g-4 mt-4 shadow">
                    <div class="col-lg-12">
                        <h4 class="mb-3">Last trips</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Matatu Number</th>
                                    <th>Route</th>
                                    <th>Sacco</th>
                                    <th>Seats Booked</th>
                                    <th>Fare</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Matatu 1</td>
                                    <td>NRB - NYK</td>
                                    <td>Nanyuki Cabs</td>
                                    <td>2</td>
                                    <td>Ksh: 1600</td>
                                </tr>
                                <tr>
                                    <td>Matatu 2</td>
                                    <td>NRB - Meru</td>
                                    <td>Raha Coach</td>
                                    <td>1</td>
                                    <td>Ksh: 1200<td>
                                </tr>
                                <tr>
                                    <td>Matatu 3</td>
                                    <td>Meru - NYK</td>
                                    <td>Menany Shuttle</td>
                                    <td>3</td>
                                    <td>Ksh: 1050</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    
                <!-- Upcoming Trips Section -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card p-4">
                        <h5 class="mb-3">Upcoming Trips</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Trip to Nairobi on <strong>25th Dec 2023</strong> at <strong>10:00 AM</strong></li>
                            <li class="list-group-item">Trip to Meru on <strong>30th Dec 2023</strong> at <strong>2:00 PM</strong></li>
                            <li class="list-group-item">Trip to Nakuru on <strong>5th Jan 2024</strong> at <strong>8:00 AM</strong></li>
                        </ul>
                    </div>
                </div>
                    
                    <!-- Notifications Section -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card p-4">
                        <h5 class="mb-3">Notifications</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Booking confirmation for your trip to Nairobi.</li>
                            <li class="list-group-item">Reminder: Your trip to Meru is in 5 days.</li>
                            <li class="list-group-item">New offers available for upcoming trips!</li>
                        </ul>
                    </div>
                </div>
            </div>
                
                <!-- Quick Links Section -->
            <div class="row g-4 mt-4">
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card text-center p-4">
                        <h5 class="mb-3">Book a Trip</h5>
                        <p>Quickly book your next matatu ride.</p>
                        <a href="ticket.html" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card text-center p-4">
                        <h5 class="mb-3">Profile Settings</h5>
                        <p>Update your personal information.</p>
                        <a href="profile.html" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card text-center p-4">
                        <h5 class="mb-3">Customer Support & Help</h5>
                        <p>View and manage your current bookings.</p>
                        <a href="client-contact.html" class="btn btn-primary">Contact us</a>
                    </div>
                </div>
            </div>
        </div>  
        <!-- </div> -->
        
        <!-- Dashboard Overview End -->
    </div>
    <!-- Dashboard Overview End -->
    
    <?php
        include("include/footer.php");
        ?>