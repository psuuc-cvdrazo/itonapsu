<?php
include("connect.php");
session_start();

$response = array(); // Initialize response array

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if studentid and password are set and not empty
    if (isset($_POST['studentid']) && isset($_POST['password']) && !empty($_POST['studentid']) && !empty($_POST['password'])) {
        $studentid = mysqli_real_escape_string($conn, $_POST['studentid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT Userid FROM user WHERE Studentid = '$studentid'  AND Password = '$pwd'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['login_user'] = $studentid;
            $response = [
                'title' => 'Welcome user',
                'icon' => 'info',
            ];

        } else {
            $response = [
                'title' => 'Invalid student ID or password',
                'icon' => 'error',
            ];
        }
    } else {
        // Fields are not filled
        $response = [
            'title' => 'Please enter both Student ID and password',
            'icon' => 'error',
        ];
    }
} else {
    // Invalid request method
    $response = [
        'title' => 'Invalid request method',
        'icon' => 'error',
    ];
}

echo json_encode($response);
?>
