<?php 
session_start();

include_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();

    $studentid = ($_POST['Studentid']);
    $fname = ($_POST['FirstName']);
    $mname = ($_POST['MiddleName']);
    $lname = ($_POST['LastName']);
    $email = ($_POST['Email']);
    $contact = ($_POST['Contact']);
    $address = ($_POST['Address']);
    $pwd =($_POST['Password']);
    $pwd2 =($_POST['CPassword']);
    $Status = $_POST['Status'];
    $created = date('Y-m-d');

    if (empty($studentid) || empty($fname) || empty($mname) || empty($lname) || empty($email) || empty($contact) || empty($address) || empty($pwd) || empty($pwd2) || empty($Status)) {
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
        if ($pwd != $pwd2) {
            $response = [
                'title'=>'Passwords do not match!',
                'icon'=>'error',
            ];
        } else {
            $checkStudentID = mysqli_query($conn, "SELECT * FROM user WHERE StudentID='$studentid'");
            if (mysqli_num_rows($checkStudentID) > 0) {
                $response = [
                    'title'=>'Student ID is already taken!',
                    'icon'=>'error',
                ];
            } else {
                $checkEmail = mysqli_query($conn, "SELECT * FROM user WHERE Email='$email'");
                if (mysqli_num_rows($checkEmail) > 0) {
                    $response = [
                        'title'=>'Email is already registered!',
                        'icon'=>'error',
                    ];
                } else {
                    $sql = "INSERT INTO user (StudentID, FirstName, MiddleName, LastName, Email, Contact, Address, Password, Status, created)
                            VALUES ('$studentid','$fname','$mname','$lname','$email','$contact','$address','$pwd','$Status','$created')";
        
                    if (mysqli_query($conn, $sql)) {
                        $response = [
                            'title'=>'Successfully Registered!',
                            'icon'=>'success',
                        ];
                    } else {
                        $response = [
                            'title'=>"Error: " . $sql . " " . mysqli_error($conn),
                            'icon'=>'error',
                        ];
                    }
                }
            }
            mysqli_close($conn);
        }
    }
} else {
    $response = [
        'title'=>"INVALID REQUEST",
        'icon'=>'error',
    ];
}

echo json_encode($response);
?>
