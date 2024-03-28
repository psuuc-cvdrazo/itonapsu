<?php

require 'config.php';
if (isset($_POST['action']) && $_POST['action'] == 'register') {
    $studentid = check_input($_POST['studentid']);
    $fname = check_input($_POST['fname']);
    $mname = check_input($_POST['mname']);
    $lname = check_input($_POST['lname']);
    $contact = check_input($_POST['contact']);
    $email = check_input($_POST['email']);
    $address = check_input($_POST['address']);
    $pass = check_input($_POST['pass']);
    $cpass = check_input($_POST['cpass']);
    $created = date('Y-m-d');
    if ($pass != $cpass) {
        echo 'password did not match';
        exit();
    } else {
        $sql = $conn->prepare("SELECT studentid,email FROM users WHERE studentid=? OR email=?");
        $sql->bind_param("ss", $studentid, $email);
        $sql->execute();
        $result = $sql->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);
        
        if (isset($row['studentid']) && $row['studentid']==$email) {
            echo "studentid is already been registered";
        }elseif (isset($row['email']) && $row['email']==$email) {
            echo "email is already taken diiferent";
        } else {
            $stmt = $conn->prepare("INSERT INTO users (studentid, first_name, middle_name, last_name, contact, email, address, password, created) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssissss", $studentid, $fname, $mname, $lname, $contact, $email, $address, $pass,$created);
            if($stmt->execute()){
                echo 'Registered successfully. Login Now';
            }else{
                echo 'something went wrong. please try again';
            }
        }
    }
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
