<!DOCTYPE html>
<html lang="en">
<?php

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Request Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="card-title fw-bold fs-2">Personal Information</h5>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn btn btn-secondary back-btn">Back</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form id="document-request-form" method="post">
                    <div class="row">
                        <!-- Documents -->
                        <div class="col-md-6">
                            <label for="">Request for</label>

                            <div class="form-group">
                                <label class="h4 mt-2 mb-4"><input type="checkbox" style="transform: scale(1.5);" id="Official_Transcript_of_Records"> Official Transcript of Records</label>
                            </div>
                            <div class="form-group">
                                <label class="h4 mt-3 mb-4"><input type="checkbox" class="mb" style="transform: scale(1.5);" id="Diploma"> Diploma</label>
                            </div>
                            <div class="form-group">
                                <label class="h4 mt-3 mb-4"><input type="checkbox" style="transform: scale(1.8);" id="Transfer_Credential"> Transfer Credential</label>
                            </div>
                            <div class="form-group">
                                <label class="h4 mt-3 mb-4"><input type="checkbox" style="transform: scale(1.8);" id="Certification_of_Auths_and_Verification"> Certification of Auths & Verification</label>
                            </div>
                            <div class="form-group">
                                <label class="h4 mt-3 mb-4"><input type="checkbox" style="transform: scale(1.8);" id="Authentication"> Authentication - per set</label>
                            </div>
                            <div class="form-group">
                                <label class="h4 mt-3 mb-4"><input type="checkbox" style="transform: scale(1.8);" id="Certified_True_Copy"> Certified True Copy</label>
                            </div>
                            <div class="form-group">
                                <label class="h4 mt-3 mb-4"><input type="checkbox" style="transform: scale(1.8);" id="Report_of_Rating_or_Certification_of_Grades"> Report of Rating / Certification of Grades</label>
                            </div>
                            <div class="form-group">
                                <label class="h4 mt-3 mb-4"><input type="checkbox" style="transform: scale(1.8);" id="Certificate_of_Registration"> Certificate of Registration</label>
                            </div>

                        </div>
                        <!-- Price -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" id="Official_Transcript_of_Records_price" value="230" readonly>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" id="Diploma_price" value="280" readonly>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" id="Transfer_Credential_price" value="80" readonly>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" id="Certification_of_Auths_and_Verification_price" value="60" readonly>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" id="Authentication_price" value="30" readonly>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" id="Certified_True_Copy_price" value="30" readonly>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" id="Report_of_Rating_or_Certification_of_Grades_price" value="60" readonly>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" id="Certificate_of_Registration_price" value="60" readonly>
                            </div>

                            <!-- Add more prices as needed -->
                        </div>
                        <!-- Number of Copies -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Number of Copies</label>
                                <input type="number" class="form-control" value="0" id="Official_Transcript_of_Records_no" min="0" disabled>
                            </div>
                            <div class="form-group">
                                <label>Number of Copies</label>
                                <input type="number" class="form-control" value="0" id="Diploma_no" min="0" disabled>
                            </div>
                            <div class="form-group">
                                <label>Number of Copies</label>
                                <input type="number" class="form-control" value="0" id="Transfer_Credential_no" min="0" disabled>
                            </div>
                            <div class="form-group">
                                <label>Number of Copies</label>
                                <input type="number" class="form-control" value="0" id="Certification_of_Auths_and_Verification_no" min="0" disabled>
                            </div>
                            <div class="form-group">
                                <label>Number of Copies</label>
                                <input type="number" class="form-control" value="0" id="Authentication_no" min="0" disabled>
                            </div>
                            <div class="form-group">
                                <label>Number of Copies</label>
                                <input type="number" class="form-control" value="0" id="Certified_True_Copy_no" min="0" disabled>
                            </div>
                            <div class="form-group">
                                <label>Number of Copies</label>
                                <input type="number" class="form-control" value="0" id="Report_of_Rating_or_Certification_of_Grades_no" min="0" disabled>
                            </div>
                            <div class="form-group">
                                <label>Number of Copies</label>
                                <input type="number" class="form-control" value="0" id="Certificate_of_Registration_no" min="0" disabled>
                            </div>



                        </div>
                        <!-- Amount -->
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control" id="Official_Transcript_of_Records_amount" value="0" readonly>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control" id="Diploma_amount" value="0" readonly>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control" id="Transfer_Credential_amount" value="0" readonly>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control" id="Certification_of_Auths_and_Verification_amount" value="0" readonly>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control" id="Authentication_amount" value="0" readonly>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control" id="Certified_True_Copy_amount" value="0" readonly>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control" id="Report_of_Rating_or_Certification_of_Grades_amount" value="0" readonly>
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="number" class="form-control" id="Certificate_of_Registration_amount" value="0" readonly>
                            </div>
                            <!-- Add more amount inputs as needed -->
                        </div>
                    </div>
                    <!-- Total -->
                    <div class="form-group">
                        <label>Total</label>
                        <input type="number" class="form-control" id="total" name="total" readonly>
                    </div>
                    <button type="button" class="btn btn-primary" id="Submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {

            $('#Submit').click(function() {
                request2();
            });

            function request2() {
                var officialTranscriptRecords = $('#Official_Transcript_of_Records_no').val();
                var diploma = $('#Diploma_no').val();
                var transferCredential = $('#Transfer_Credential_no').val();
                var certificationOfAuths = $('#Certification_of_Auths_and_Verification_no').val();
                var authentication = $('#Authentication_no').val();
                var certifiedTrueCopy = $('#Certified_True_Copy_no').val();
                var reportOfRating = $('#Report_of_Rating_or_Certification_of_Grades_no').val();
                var certificateOfRegistration = $('#Certificate_of_Registration_no').val();
                var total = $('#total').val();

                $.ajax({
                    url: 'requestprocess2.php',
                    method: 'post',
                    data: {
                        
                        Official_Transcript_of_Records_no: officialTranscriptRecords,
                        Diploma_no: diploma,
                        Transfer_Credential_no: transferCredential,
                        Certification_of_Auths_and_Verification_no: certificationOfAuths,
                        Authentication_no: authentication,
                        Certified_True_Copy_no: certifiedTrueCopy,
                        Report_of_Rating_or_Certification_of_Grades_no: reportOfRating,
                        Certificate_of_Registration_no: certificateOfRegistration,
                        total: total
                    },
                    dataType: 'json',
                    success: function(response) {
                        Swal.fire({
                            title: response.title,
                            icon: response.icon
                        });
                        if (response.title == 'Successfully') {
                            setTimeout(function() {
                                window.location.href = 'userdashboard.php';
                            }, 1500);
                        }
                    }
                });
            }
            // Enable Official_Transcript_of_Records_no if the checkbox for Official_Transcript_of_Records is clicked
            $('#Official_Transcript_of_Records').change(function() {
                if (this.checked) {
                    $('#Official_Transcript_of_Records_no')
                        .prop('disabled', false)
                        .val(1);
                } else {
                    $('#Official_Transcript_of_Records_no')
                        .prop('disabled', true)
                        .val(0);
                }
            });

            // Enable input for Diploma if the checkbox for Diploma is clicked
            $('#Diploma').change(function() {
                if (this.checked) {
                    $('#Diploma_no')
                        .prop('disabled', false)
                        .val(1);
                } else {
                    $('#Diploma_no')
                        .prop('disabled', true)
                        .val(0);
                }
            });

            $('#Transfer_Credential').change(function() {
                if (this.checked) {
                    $('#Transfer_Credential_no')
                        .prop('disabled', false)
                        .val(1);
                } else {
                    $('#Transfer_Credential_no')
                        .prop('disabled', true)
                        .val(0);
                }
            });

            $('#Certification_of_Auths_and_Verification').change(function() {
                if (this.checked) {
                    $('#Certification_of_Auths_and_Verification_no')
                        .prop('disabled', false)
                        .val(1);
                } else {
                    $('#Certification_of_Auths_and_Verification_no')
                        .prop('disabled', true)
                        .val(0);
                }
            });

            $('#Authentication').change(function() {
                if (this.checked) {
                    $('#Authentication_no')
                        .prop('disabled', false)
                        .val(1);
                } else {
                    $('#Authentication_no')
                        .prop('disabled', true)
                        .val(0);
                }
            });

            $('#Certified_True_Copy').change(function() {
                if (this.checked) {
                    $('#Certified_True_Copy_no')
                        .prop('disabled', false)
                        .val(1);
                } else {
                    $('#Certified_True_Copy_no')
                        .prop('disabled', true)
                        .val(0);
                }
            });

            $('#Report_of_Rating_or_Certification_of_Grades').change(function() {
                if (this.checked) {
                    $('#Report_of_Rating_or_Certification_of_Grades_no')
                        .prop('disabled', false)
                        .val(1);
                } else {
                    $('#Report_of_Rating_or_Certification_of_Grades_no')
                        .prop('disabled', true)
                        .val(0);
                }
            });

            $('#Certificate_of_Registration').change(function() {
                if (this.checked) {
                    $('#Certificate_of_Registration_no')
                        .prop('disabled', false)
                        .val(1);
                } else {
                    $('#Certificate_of_Registration_no')
                        .prop('disabled', true)
                        .val(0);
                }
            });


            // Set up back button
            function calculateAmount(price, numberOfCopies) {
                return price * numberOfCopies;
            }

            function updateAmount(checkboxId, numberOfCopiesId, amountId, price) {
                var isChecked = $('#' + checkboxId).is(':checked');
                var numberOfCopies = parseInt($('#' + numberOfCopiesId).val());
                var amount = isChecked ? calculateAmount(price, numberOfCopies) : 0;
                $('#' + amountId).val(amount);
                calculateTotal(); // Update total after updating individual amount
            }

            function calculateTotal() {
                var total = 0;
                // Sum up individual amounts for each item
                total += parseInt($('#Official_Transcript_of_Records_amount').val()) || 0;
                total += parseInt($('#Diploma_amount').val()) || 0;
                total += parseInt($('#Transfer_Credential_amount').val()) || 0;
                total += parseInt($('#Certification_of_Auths_and_Verification_amount').val()) || 0;
                total += parseInt($('#Authentication_amount').val()) || 0;
                total += parseInt($('#Certified_True_Copy_amount').val()) || 0;
                total += parseInt($('#Report_of_Rating_or_Certification_of_Grades_amount').val()) || 0;
                total += parseInt($('#Certificate_of_Registration_amount').val()) || 0;
                $('#total').val(total);
            }
            // Enable input for Official_Transcript_of_Records_no if the checkbox for Official_Transcript_of_Records is clicked
            $('#Official_Transcript_of_Records').change(function() {
                $('#Official_Transcript_of_Records_no').prop('disabled', !this.checked);
                updateAmount('Official_Transcript_of_Records', 'Official_Transcript_of_Records_no', 'Official_Transcript_of_Records_amount', 230);
            });

            $('#Diploma').change(function() {
                $('#Diploma_no').prop('disabled', !this.checked);
                updateAmount('Diploma', 'Diploma_no', 'Diploma_amount', 280);
            });

            $('#Transfer_Credential').change(function() {
                $('#Transfer_Credential_no').prop('disabled', !this.checked);
                updateAmount('Transfer_Credential', 'Transfer_Credential_no', 'Transfer_Credential_amount', 80); // You can set the price here
            });

            $('#Certification_of_Auths_and_Verification').change(function() {
                $('#Certification_of_Auths_and_Verification_no').prop('disabled', !this.checked);
                updateAmount('Certification_of_Auths_and_Verification', 'Certification_of_Auths_and_Verification_no', 'Certification_of_Auths_and_Verification_amount', 60); // You can set the price here
            });

            $('#Authentication').change(function() {
                $('#Authentication_no').prop('disabled', !this.checked);
                updateAmount('Authentication', 'Authentication_no', 'Authentication_amount', 30); // You can set the price here
            });

            $('#Certified_True_Copy').change(function() {
                $('#Certified_True_Copy_no').prop('disabled', !this.checked);
                updateAmount('Certified_True_Copy', 'Certified_True_Copy_no', 'Certified_True_Copy_amount', 30); // You can set the price here
            });

            $('#Report_of_Rating_or_Certification_of_Grades').change(function() {
                $('#Report_of_Rating_or_Certification_of_Grades_no').prop('disabled', !this.checked);
                updateAmount('Report_of_Rating_or_Certification_of_Grades', 'Report_of_Rating_or_Certification_of_Grades_no', 'Report_of_Rating_or_Certification_of_Grades_amount', 60); // You can set the price here
            });

            $('#Certificate_of_Registration').change(function() {
                $('#Certificate_of_Registration_no').prop('disabled', !this.checked);
                updateAmount('Certificate_of_Registration', 'Certificate_of_Registration_no', 'Certificate_of_Registration_amount', 60); // You can set the price here
            });

            // Similar functions for other checkboxes...

            // Function to update amount when number of copies change
            $('#Official_Transcript_of_Records_no').change(function() {
                updateAmount('Official_Transcript_of_Records', 'Official_Transcript_of_Records_no', 'Official_Transcript_of_Records_amount', 230);
            });

            $('#Diploma_no').change(function() {
                updateAmount('Diploma', 'Diploma_no', 'Diploma_amount', 280);
            });

            $('#Transfer_Credential_no').change(function() {
                updateAmount('Transfer_Credential', 'Transfer_Credential_no', 'Transfer_Credential_amount', 80); // You can set the price here
            });

            $('#Certification_of_Auths_and_Verification_no').change(function() {
                updateAmount('Certification_of_Auths_and_Verification', 'Certification_of_Auths_and_Verification_no', 'Certification_of_Auths_and_Verification_amount', 60); // You can set the price here
            });

            $('#Authentication_no').change(function() {
                updateAmount('Authentication', 'Authentication_no', 'Authentication_amount', 30); // You can set the price here
            });

            $('#Certified_True_Copy_no').change(function() {
                updateAmount('Certified_True_Copy', 'Certified_True_Copy_no', 'Certified_True_Copy_amount', 30); // You can set the price here
            });

            $('#Report_of_Rating_or_Certification_of_Grades_no').change(function() {
                updateAmount('Report_of_Rating_or_Certification_of_Grades', 'Report_of_Rating_or_Certification_of_Grades_no', 'Report_of_Rating_or_Certification_of_Grades_amount', 60); // You can set the price here
            });

            $('#Certificate_of_Registration_no').change(function() {
                updateAmount('Certificate_of_Registration', 'Certificate_of_Registration_no', 'Certificate_of_Registration_amount', 60); // You can set the price here
            });


            calculateTotal();
        });
    </script>


</body>

</html>