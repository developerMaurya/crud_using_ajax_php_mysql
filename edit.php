<?php
$employee_id = $_GET["employee_id"];

$conn = mysqli_connect("localhost", "root", "", "phpcruddemo") or die("connection Failed");

$sql = "SELECT * FROM employee WHERE id = '$employee_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>
    <h2>Edit Employee</h2>
    <form id="editForm">
        <input type="hidden" name="employee_id" value="<?php echo $row['id']; ?>">
        <div>
            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" value="<?php echo $row['company_name']; ?>">
        </div>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">
        </div>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>">
        </div>
        <div>
            <label for="city">City:</label>
            <input type="text" id="city" name="city" value="<?php echo $row['city']; ?>">
        </div>
        <div>
            <input type="submit" id="update-button" value="Update">
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#editForm').submit(function (e) {
                e.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    url: "ajax-update.php",
                    type: "POST",
                    data: formData,
                    success: function (data) {
                        console.log(data);
                        if (data == "1") {
                            console.log("Updated successfully");
                            // Refresh the datatable
                            window.location.href = "ajax_get.php";
                        } else {
                            console.log("Update failed");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
