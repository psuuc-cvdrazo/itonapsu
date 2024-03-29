<?php 
session_start();

include_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();
    $fullname = ($_POST['Fullname']);
    $studentid = ($_POST['Studentid']);
    $course = ($_POST['Course']);
    $block = ($_POST['Block']);
    $purpose = ($_POST['Purpose']);
    $contact = ($_POST['Contact']);
    $address = ($_POST['Address']);
    $email = ($_POST['Email']);

    // Validate input fields
    if (empty($fullname) || empty($studentid) || empty($course) || empty($block) || empty($purpose) || empty($contact) || empty($address) || empty($email)) {
        $response = [
            'title'=>'Please fill in all fields',
            'icon'=>'error',
        ];
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $response = [
            'title'=>'Invalid Email Address!',
            'icon'=>'error',
        ];
    } elseif (!ctype_digit($contact)) { 
        $response = [
            'title'=>'Contact Number should contain only digits!',
            'icon'=>'error',
        ];
    } else {
        // Insert the new user if validation passes
        $created = date('Y-m-d');
        $sql = "INSERT INTO request (Fullname, StudentID, Course, Block, Email, Contact, Address, Purpose, DateRequested)
                VALUES ('$fullname','$studentid','$course','$block','$email','$contact','$address','$purpose','$created')";
    
        if (mysqli_query($conn, $sql)) {
            // Get the last inserted ID
            $last_id = mysqli_insert_id($conn);
            $_SESSION['requester'] = $last_id;
            $response = [
                'title'=>'Successfully',
                'icon'=>'success',
            ];
        } else {
            $response = [
                'title'=>"Error: " . $sql . " " . mysqli_error($conn),
                'icon'=>'error',
            ];
        }
        mysqli_close($conn);
    }
} else {
    $response = [
        'title'=>"INVALID REQUEST",
        'icon'=>'error',
    ];
}

echo json_encode($response);

?>
