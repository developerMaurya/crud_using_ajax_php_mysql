<?php
$employee_id = $_POST["employee_id"];

$conn = mysqli_connect("localhost", "root", "", "phpcruddemo") or die("connection Failed");

$sql = "DELETE FROM employee WHERE id = '$employee_id'"; // Use single quotes around the employee_id value
if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
?>
