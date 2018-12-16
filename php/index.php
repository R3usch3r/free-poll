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
$connection = mysqli_connect("localhost", "username", "password")

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

<input type="text" name="slink" value="<?php echo $token; ?>">
<input type="submit">

$token = $_POST['wasauchimmer'];
$neuerWert = $_POST['slink'];

// New Value for Link
$sql = "UPDATE polls SET url='$neuerWert' WHERE url='$token'";
if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}
?>
mysqli_close($connection);
</body>
</html>