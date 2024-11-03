<?php
include("include/header.php");
?>

<div class="col-lg-10 col-md-8 col-sm-12 content">
    <!-- Book a Trip Start -->
    <div class="container py-5">
        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Book a Trip</h1>
            <p class="mb-0">Find and book your next matatu ride.</p>
        </div>

        <!-- Booking Form Start -->
        <div class="row g-4 justify-content-center bg-breadcrumb">
            <div class="col-lg-8 booking-form shadow-lg">
                <h4 class="text-white mb-4">Book Your Matatu Ticket</h4>
                <form>
                    <div class="row g-3">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                    <span class="fas fa-map-marker-alt"></span> <span class="ms-1">Travelling From</span>
                                </div>
                                <input class="form-control" type="text" placeholder="Your town or location e.g. Nanyuki" aria-label="Enter a City or Town">
                            </div>
                            <div class="input-group mb-3">
                                <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                    <span class="fas fa-map-marker-alt"></span><span class="ms-1">Travelling To</span>
                                </div>
                                <input class="form-control" type="text" placeholder="Travelling to e.g. Nairobi" aria-label="Enter a City or Town">
                            </div>
                            <div class="input-group mb-3">
                                <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                    <span class="fas fa-map-marker-alt"></span> <span class="ms-1">Pick Up</span>
                                </div>
                                <input class="form-control" type="text" placeholder="Enter current pickup point e.g. TRM/petrol station etc" aria-label="Enter a City or Town">
                            </div>
                        </div>
                        <!-- Right Column -->
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                    <span class="fas fa-calendar-alt"></span><span class="ms-1">Date</span>
                                </div>
                                <input class="form-control" type="date">
                            </div>
                            <div class="input-group mb-3">
                                <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                    <span class="fas fa-clock"></span><span class="ms-1">Time</span>
                                </div>
                                <input class="form-control" type="time">
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-light w-100 py-2">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Available Matatus Start -->
        <div class="row g-4 mt-4 shadow">
            <div class="col-lg-12">
                <h4 class="mb-3">Available Matatus</h4>
                <p>Here's a list of all available vehicles matching your search.</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Matatu Number</th>
                            <th>Route</th>
                            <th>Sacco</th>
                            <th>Capacity</th>
                            <th>Fare</th>
                            <th>Book Now</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Matatu 1</td>
                            <td>NYK - NRB</td>
                            <td>Nanyuki Cabs</td>
                            <td>11 seats</td>
                            <td>KES 800</td>
                            <td><button class="btn btn-primary">Book Now</button></td>
                        </tr>
                        <tr>
                            <td>Matatu 2</td>
                            <td>NYK - NRB</td>
                            <td>Nyakati Shuttle</td>
                            <td>14 seats</td>
                            <td>KES 700</td>
                            <td><button class="btn btn-primary">Book Now</button></td>
                        </tr>
                        <tr>
                            <td>Matatu 3</td>
                            <td>NYK - NRB</td>
                            <td>Nanaiso Shuttle</td>
                            <td>10 seats</td>
                            <td>KES 850</td>
                            <td><button class="btn btn-primary">Book Now</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Related Guides Start -->
        <div class="row g-4 mt-4 shadow">
            <div class="col-lg-12">
                <h4 class="mb-3">Related Guides</h4>
                <p>Here's a list of related trips you may be interested in.</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Main Routes</th>
                            <th>Prices</th>
                            <th>Book Now</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nairobi - Nanyuki</td>
                            <td>KES 500</td>
                            <td><button class="btn btn-primary">Book Now</button></td>
                        </tr>
                        <tr>
                            <td>Nanyuki - Meru</ td>
                            <td>KES 600</td>
                            <td><button class="btn btn-primary">Book Now</button></td>
                        </tr>
                        <tr>
                            <td>Meru - Nairobi</td>
                            <td>KES 700</td>
                            <td><button class="btn btn-primary">Book Now</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include("include/footer.php");
?>