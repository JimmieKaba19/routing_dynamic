<?php

include('include/config.php');
include('include/database.php');
include('include/functions.php');
secure();

include("include/header.php");

?>

<!-- Dashboard Overview Start -->
<div class="col-lg-10 col-md-8 col-sm-12 content">
    <div class="container py-5">
        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Profile Settings</h1>
            <p class="mb-0">Manage your account information and settings.</p>
        </div>

        <!-- Profile Information Start -->
        <div class="row g-4 mt-4 py-3 shadow-lg ">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <?php
                // Assuming you have the user ID stored in the session or passed as a parameter
                $userId = $_SESSION['id']; // or however you are identifying the user

                if ($stm = $connect->prepare('SELECT * FROM users WHERE id = ?')) {
                    $stm->bind_param('i', $userId); // Bind the user ID
                    $stm->execute();
                    $result = $stm->get_result();

                    if ($result->num_rows > 0) {
                        $record = $result->fetch_assoc(); // Fetch the single user record
                ?>
                        <img src="<?php echo htmlspecialchars($record['image']); ?>" class="rounded-start" style="width: 200px; height: 200px;" alt="Image">
            </div>
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th>Date Registered</th>
                        <td><?php echo htmlspecialchars($record['date-added']); ?></td>
                    </tr>
                    <tr>
                        <th>Full Name</th>
                        <td><?php echo htmlspecialchars($record['fullname']); ?></td>
                    </tr>
                    <tr>
                        <th>User Name</th>
                        <td><?php echo htmlspecialchars($record['username']); ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo htmlspecialchars($record['email']); ?></td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td><?php echo htmlspecialchars($record['phone']); ?></td>
                    </tr>
                </table>
                <button class="btn btn-primary w-100 py-2 mt-4">
                    <i class="fas fa-edit text-light me-3"></i>
                    <a href="edit-profile.php?id=<?php echo $userId; ?>" class="text-light">Edit Profile</a>
                </button>
            </div>
    <?php
                    } else {
                        echo 'No user information found!';
                    }

                    $stm->close();
                } else {
                    echo 'Could not prepare statement!';
                }
    ?>
        </div>
    </div>

    <!-- My Bookings Start -->
    <!-- <div class="content"> -->
    <div class="container py-5">
        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">My Bookings</h1>
            <p class="mb-0">View and manage your current and past bookings.</p>
        </div>
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto">
                <form class="d-flex">
                    <input type="text" class="form-control me-2" placeholder="Search by booking ID or date" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>

        <!-- Booking List Start -->
        <div class="row g-4 mt-4 shadow-lg">
            <div class="col-lg-12">
                <h4 class="mb-3">Booking List</h4>
                <div class="table-responsive"> <!-- Added this div for responsiveness -->
                    <table class="table table-striped booking-table">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Trip Date</th>
                                <th>Departure</th>
                                <th>Destination</th>
                                <th>Seat Number</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Booking 1</td>
                                <td>2023-02-20</td>
                                <td>Nanyuki</td>
                                <td>Nairobi</td>
                                <td>Seat 12</td>
                                <td>Active</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                    <a href="#" class="btn btn-danger btn-sm">Cancel Booking</a>
                                    <a href="#" class="btn btn-success btn-sm">Download/Print</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Booking 2</td>
                                <td>2023-02-25</td>
                                <td>Meru</td>
                                <td>Nanyuki</td>
                                <td>Seat 7</td>
                                <td>Cancelled</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                    <a href="#" class="btn btn-success btn-sm">Download/Print</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Booking 3</td>
                                <td>2023-03-01</td>
                                <td>Nairobi</td>
                                <td>Meru</td>
                                <td>Seat 15</td>
                                <td>Pending</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                    <a href="#" class="btn btn-danger btn-sm">Cancel Booking</a>
                                    <a href="#" class="btn btn-success btn-sm">Download/Print</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- End of responsive div -->
            </div>
        </div>

        <!-- Pagination Start -->
        <div class="row g-4 mt-4">
            <div class="col-lg-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Pagination End -->
    </div>
    <!-- </div> -->
    <!-- My Bookings End -->

    <!-- Content Start -->
    <!-- <div class="content"> -->
    <div class="container py-5">
        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Payment History</h1>
            <p class="mb-0">View and manage your payment history.</p>
        </div>
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto">
                <form class="d-flex">
                    <input type="text" class="form-control me-2" placeholder="Search by amount or date" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="row g-4 mt-4 shadow-lg">
            <div class="col-lg-12">
                <h4 class="mb-3">Payment List</h4>
                <div class="table-responsive"> <!-- Added this div for responsiveness -->
                    <table class="table table-striped payment-table">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Transaction 1</td>
                                <td>2023-02-20</td>
                                <td>KES 500.00</td>
                                <td>Successful</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                    <a href="#" class="btn btn-success btn-sm">Download Receipt</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Transaction 2</td>
                                <td>2023-02-25</td>
                                <td>KES 800.00</td>
                                <td>Pending</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                    <a href="#" class="btn btn-success btn-sm">Download Receipt</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Transaction 3</td>
                                <td>2023-03-01</td>
                                <td>KES 1,200.00</td>
                                <td>Failed</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">View Details</a>
                                    <a href="#" class="btn btn-success btn-sm">Download Receipt</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Pagination Start -->
        <div class="row g-4 mt-4">
            <div class="col-lg-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Pagination End -->
    </div>
    <!-- </div> -->
    <!-- Content End -->

    <!-- Danger Zone Start -->
    <div class="danger-zone col-md-4">
        <h4 class="text-danger mb-3"><i class="fas fa-exclamation me-3"></i>Danger Zone</h4>
        <button class="btn btn-danger w-100 py-2" id="delete-account-btn">Delete Account</button>
        <div class="delete-account-confirm" style="display: none;">
            <p class="text-danger mb-3">Are you sure you want to delete your account?</p>
            <button class="btn btn-danger w-100 py-2">Confirm Delete</button>
        </div>
    </div>
    <!-- Danger Zone End -->
</div>
</div>
<!-- Profile Settings End -->

<?php
include("include/footer.php");
?>