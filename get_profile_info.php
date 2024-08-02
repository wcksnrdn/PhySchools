<?php
session_start();
header('Content-Type: application/json');
$response = array('profileImage' => 'foto/default-profile.png');

if (isset($_SESSION['profileImage'])) {
    $response['profileImage'] = $_SESSION['profileImage'];
}

echo json_encode($response);
?>