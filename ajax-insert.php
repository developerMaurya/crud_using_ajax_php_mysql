<?php
$conn = mysqli_connect("localhost", "root", "", "phpcruddemo") or die("connection Failed");

$company_name = $_POST["company_name"];
$name = $_POST["name"];
$title = $_POST["title"];
$address = $_POST["address"];
$city = $_POST["city"];

$sql = "INSERT INTO employee (company_name, name, title, address, city) VALUES ('$company_name', '$name', '$title', '$address', '$city')";
if (mysqli_query($conn, $sql)) {
    $lastInsertedId = mysqli_insert_id($conn); // Get the last inserted ID
    echo $lastInsertedId;
} else {
    echo "0";
}
mysqli_close($conn);
?>
