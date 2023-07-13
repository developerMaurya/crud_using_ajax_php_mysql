<?php

$con = mysqli_connect("localhost", "root", "", "phpcruddemo");
$query = "SELECT * FROM employee";
$res = mysqli_query($con, $query);

if (mysqli_num_rows($res) > 0) {
    $output['data'] = array();

    while ($row = mysqli_fetch_assoc($res)) {
        $output['data'][] = array(
            'id' => $row['id'],
            'company_name' => $row['company_name'],
            'name' => $row['name'],
            'title' => $row['title'],
            'address' => $row['address'],
            'city' => $row['city']
        );
    }

    mysqli_close($con);
    echo json_encode($output);
} else {
    echo json_encode(array('data' => array()));
}
?>
