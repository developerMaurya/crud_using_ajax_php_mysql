<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data table</title>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <table>
            <tr>
                <th>
                    <h2>Insert data</h2>
                </th>
            </tr>
            <tr>
                <td>Company name:</td>
                <td><input type="text" id="company_name"></td>
            </tr>
            <tr>
                <td>Employee name:</td>
                <td><input type="text" id="name"></td>
            </tr>
            <tr>
                <td>Title:</td>
                <td><input type="text" id="title"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" id="address"></td>
            </tr>
            <tr>
                <td>City:</td>
                <td><input type="text" id="city"></td>
            </tr>
            <tr>
                <td><input type="submit" id="save-button" value="Save"></td>
            </tr>
        </table>
        <br><br>
        <h2>Display All Employee Details</h2>
        <table id="employeeTable" class="table table-striped cell-border display compact" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Company Name</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- DataTables CDN -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            var employeeTable = $('#employeeTable').DataTable({
                "ajax": "ajax_load.php",
                "columns": [
                    { "data": "id" },
                    { "data": "company_name" },
                    { "data": "name" },
                    { "data": "title" },
                    { "data": "address" },
                    { "data": "city" },
                    {
                        "data": null,
                        "render": function (data, type, row) {
                            return '<button class="edit-btn" data-id="' + row.id + '">Edit</button>';
                        }
                    },
                    {
                        "data": null,
                        "render": function (data, type, row) {
                            return '<button class="delete-btn" data-id="' + row.id + '">Delete</button>';
                        }
                    }
                ]
            });

            // Add data
            $("#save-button").on("click", function (e) {
                e.preventDefault();
                var company_name = $("#company_name").val();
                var name = $("#name").val();
                var title = $("#title").val();
                var address = $("#address").val();
                var city = $("#city").val();

                $.ajax({
                    url: "ajax-insert.php",
                    type: "POST",
                    data: {
                        company_name: company_name,
                        name: name,
                        title: title,
                        address: address,
                        city: city
                    },
                    success: function (data) {
                        console.log(data);
                        if (data != "0") {
                            var newData = {
                                id: data,
                                company_name: company_name,
                                name: name,
                                title: title,
                                address: address,
                                city: city
                            };
                            employeeTable.row.add(newData).draw(false);
                            // Clear input fields after successful insertion
                            $("#company_name").val("");
                            $("#name").val("");
                            $("#title").val("");
                            $("#address").val("");
                            $("#city").val("");
                        } else {
                            console.log("Can't save record");
                        }
                    }
                });
            });

            // Edit button click event
            $('#employeeTable').on('click', '.edit-btn', function () {
                var id = $(this).data('id');
                window.location.href = "edit.php?employee_id=" + id;
            });

            // Delete button click event
            $('#employeeTable').on('click', '.delete-btn', function () {
                if (confirm("Do you want to delete?")) {
                    var id = $(this).data('id');
                    var element = this;
                    console.log(id);
                    $.ajax({
                        url: "ajax-delete.php",
                        type: "POST",
                        data: { employee_id: id },
                        success: function (data) {
                            console.log("Response data:", data);
                            if (data == 1) {
                                console.log("Deleted successfully");
                                $(element).closest("tr").fadeOut();
                            } else {
                                console.log("Deletion failed");
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
