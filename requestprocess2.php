<?php 
session_start();

$RequestID = $_SESSION['requester'];
include_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $response = array();

    $officialTranscriptRecords = ($_POST['Official_Transcript_of_Records_no']);
    $diploma = ($_POST['Diploma_no']);
    $transferCredential = ($_POST['Transfer_Credential_no']);
    $certificationAuthsVerification = ($_POST['Certification_of_Auths_and_Verification_no']);
    $authentication = ($_POST['Authentication_no']);
    $certifiedTrueCopy = ($_POST['Certified_True_Copy_no']);
    $reportRatingCertificationGrades = ($_POST['Report_of_Rating_or_Certification_of_Grades_no']);
    $certificateRegistration = ($_POST['Certificate_of_Registration_no']);
    $totalAmount = ($_POST['total']);

    $created = date('Y-m-d');
    $sql = "UPDATE request SET 
            Official_Transcript_of_Records_no = '$officialTranscriptRecords',
            Diploma_no = '$diploma',
            Transfer_Credential_no = '$transferCredential',
            Certification_of_Auths_and_Verification_no = '$certificationAuthsVerification',
            Authentication_no = '$authentication',
            Certified_True_Copy_no = '$certifiedTrueCopy',
            Report_of_Rating_or_Certification_of_Grades_no = '$reportRatingCertificationGrades',
            Certificate_of_Registration_no = '$certificateRegistration',
            TotalAmount = '$totalAmount',
            DateRequested = '$created'
            WHERE RequestID = $RequestID";

    if (mysqli_query($conn, $sql)) {
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
} else {
    $response = [
        'title'=>"INVALID REQUEST",
        'icon'=>'error',
    ];
}

echo json_encode($response);
?>
