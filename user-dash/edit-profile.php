<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('include/config.php');
include('include/database.php');
include('include/functions.php');
secure();

// Retrieve the user member's ID from the URL
$user_member_id = $_GET['id'];

// Retrieve the user member's data from the database
$stm = $connect->prepare('SELECT * FROM users WHERE id = ?');
$stm->bind_param('i', $user_member_id);
$stm->execute();
$user_member = $stm->get_result()->fetch_assoc();

if (isset($_POST['update-info'])) {
    $fullname = mysqli_real_escape_string($connect, $_POST['fullname']);
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $password = $_POST['password']; // Get the password input
    $image = $_FILES['image']['name'];

    // Handle image upload
    if (!empty($image)) {
        $path = "uploads/"; // Path for Uploading your Image
        $image_extension = pathinfo($image, PATHINFO_EXTENSION); // Image Extension
        $filename = time() . '.' . $image_extension; // Renaming the Image
        $dest_path = $path . $filename; // Destination path

        // Move the uploaded file to the destination
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $dest_path)) {
            echo "Error uploading the image.";
            exit;
        }
    } else {
        // If no new image is uploaded, keep the old one
        $dest_path = $user_member['image'];
    }

    // Update user information
    if (!empty($password)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $updateQuery = 'UPDATE users SET fullname = ?, username = ?, email = ?, phone = ?, password = ?, image = ? WHERE id = ?';
        $stm = $connect->prepare($updateQuery);
        $stm->bind_param('ssssssi', $fullname, $username, $email, $phone, $hashedPassword, $dest_path, $user_member_id);
    } else {
        $updateQuery = 'UPDATE users SET fullname = ?, username = ?, email = ?, phone = ?, image = ? WHERE id = ?';
        $stm = $connect->prepare($updateQuery);
        $stm->bind_param('sssssi', $fullname, $username, $email, $phone, $dest_path, $user_member_id);
    }

    if ($stm->execute()) {
        echo "Profile updated successfully!";
        // Optionally redirect to the profile page
        header("Location: profile.php");
        exit;
    } else {
        echo "Error updating profile: " . $stm->error;
    }

    $stm->close();
}

include("include/header.php");
?>

<div class="col-lg-10 col-md-8 col-sm-12 content">
    <div class="container py-5">
        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Profile Settings</h1>
            <p class="mb-0">Manage your account information and settings.</p>
        </div>
        <div class="row g-4 mt-4 p-3 shadow-lg">
            <h2>Edit Profile</h2>
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $user_member['fullname']; ?>">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $user_member['username']; ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $user_member['email']; ?>">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $user_member['phone']; ?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password (optional)</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Profile Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <img src="<?php echo $user_member['image']; ?>" alt="Current Profile Image" class="img-thumbnail">
                </div>
                <button type="submit" name="update-info" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
    </div>
</div>

<?php
include("include/footer.php");
?>