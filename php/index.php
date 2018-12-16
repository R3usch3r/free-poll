<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Übersicht Umfragen</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$token = $_POST['wasauchimmer'];
$neuerWert = $_POST['asdf'];

// New Value for Link
$sql = "UPDATE polls SET url='$neuerWert' WHERE url='$token'";
if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}
?>

<table>
    <thead>
    <tr>
        <th>Meine Umfragen</th>
        <th>Share-Links</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Umfrage 1</td>
        <td>julian.free-poll.de/umfrage1 &#9733;</td>
    </tr>
    <tr>
        <td>Umfrage 2</td>
        <td>julian.free-poll.de/umfrage2 &#9733;</td>
    </tr>
    <tr>
        <td>Umfrage 3</td>
        <td>julian.free-poll.de/umfrage3 &#9733;</td>
    </tr>
    <tr>
        <td>Umfrage 4</td>
        <td>julian.free-poll.de/umfrage4 &#9733;</td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="7">Share-Links können durch einen Klick auf den Stern personalisiert werden.</td>
    </tr>
    </tfoot>
</table>


</body>
</html>