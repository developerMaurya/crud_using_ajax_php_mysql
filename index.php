<?php
$con=mysqli_connect("localhost","root","","phpcruddemo");
$query="SELECT * FROM employee";
$res=mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data table</title>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css">
    <!-- <link rel="stylesheet" href="your-custom-styles.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    <table class="table table-striped cell-border display compact" style="width:100%">
        <thead>
            <tr><th>ID</th>
                <th>Company Name</th>
                <th>Name</th>
                <th>Title</th>
                <th>Address</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($row=mysqli_fetch_assoc($res)){

           
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['company_name'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['city'] ?></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- DataTables CDN -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.table').DataTable();
        });
    </script>
</body>
</html>
