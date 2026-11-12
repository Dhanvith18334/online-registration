
<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit();
}

function clean($value) {
    return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
}

$fields = [
    "fullname", "dob", "gender", "email",
    "mobile", "nationality", "qualification",
    "course", "address", "city", "state", "pincode"
];

$data = [];

foreach ($fields as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === "") {
        die("Error: Please complete all required fields. <a href='index.php'>Go Back</a>");
    }

    $data[$field] = clean($_POST[$field]);
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

if (!preg_match('/^[0-9]{10}$/', $_POST["mobile"])) {
    die("Invalid mobile number.");
}

if (!preg_match('/^[0-9]{6}$/', $_POST["pincode"])) {
    die("Invalid PIN code.");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="result-container">

    <h1 class="success">Application Submitted Successfully!</h1>

    <p style="text-align:center;">
        Thank you for submitting your application.
        Your details are displayed below.
    </p>

    <h2>Application Details</h2>

    <table class="result-table">

        <tr>
            <td>Full Name</td>
            <td><?= $data["fullname"] ?></td>
        </tr>

        <tr>
            <td>Date of Birth</td>
            <td><?= $data["dob"] ?></td>
        </tr>

        <tr>
            <td>Gender</td>
            <td><?= $data["gender"] ?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?= $data["email"] ?></td>
        </tr>

        <tr>
            <td>Mobile Number</td>
            <td><?= $data["mobile"] ?></td>
        </tr>

        <tr>
            <td>Nationality</td>
            <td><?= $data["nationality"] ?></td>
        </tr>

        <tr>
            <td>Qualification</td>
            <td><?= $data["qualification"] ?></td>
        </tr>

        <tr>
            <td>Course Applied For</td>
            <td><?= $data["course"] ?></td>
        </tr>

        <tr>
            <td>Address</td>
            <td><?= $data["address"] ?></td>
        </tr>

        <tr>
            <td>City</td>
            <td><?= $data["city"] ?></td>
        </tr>

        <tr>
            <td>State</td>
            <td><?= $data["state"] ?></td>
        </tr>

        <tr>
            <td>PIN Code</td>
            <td><?= $data["pincode"] ?></td>
        </tr>

    </table>

    <button class="print-btn" onclick="window.print()">
        Print Application
    </button>

    <button class="back-btn"
            onclick="window.location.href='index.php'">
        Back to Home
    </button>

</div>

</body>
</html>
