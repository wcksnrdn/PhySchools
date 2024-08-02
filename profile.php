<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$profileImage = isset($_SESSION['profileImage']) ? $_SESSION['profileImage'] : 'default-profile.png';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhySchools - Edit Profile</title>
    <link rel="icon" type="image/x-icon" href="foto/moleculeicon.png">
    <link rel="stylesheet" href="profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="profile-container">
        <div class="profile-dropdown">
            <button onclick="toggleDropdown()" class="dropbtn"><?php echo $_SESSION['username']; ?></button>
            <div id="profileDropdown" class="dropdown-content">
                <a href="#">Edit Profile</a>
                <a href="#">Change Password</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <h1>User Profile</h1>
        <img src="<?php echo $profileImage; ?>" alt="Profile Image" class="profile-icon">
        <form id="profileForm" action="upload_profile.php" method="post" enctype="multipart/form-data">
            <label for="profileImage">Upload Profile Photo:</label>
            <input type="file" name="profileImage" id="profileImage" accept="image/*" required>
            <button type="submit">Upload</button>
        </form>
        <button id="backButton" class="btn back-btn">Back</button>
    </div>

    <script>
        document.getElementById('backButton').addEventListener('click', function () {
            window.location.href = 'index.php';
        });
    </script>
</body>

</html>