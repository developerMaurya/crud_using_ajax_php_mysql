<?php
$employee_id = $_POST["employee_id"];
$company_name = $_POST["company_name"];
$name = $_POST["name"];
$title = $_POST["title"];
$address = $_POST["address"];
$city = $_POST["city"];

$conn = mysqli_connect("localhost", "root", "", "phpcruddemo") or die("connection Failed");

$sql = "UPDATE employee SET company_name = '$company_name', name = '$name', title = '$title', address = '$address', city = '$city' WHERE id = '$employee_id'";
if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
?>
