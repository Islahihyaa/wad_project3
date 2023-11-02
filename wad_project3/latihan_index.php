<?php
$conn = mysqli_connect("localhost", "root", "", "wad_project3");
$result = mysqli_query($conn, "SELECT * from students");
// var_dump(mysqli_fetch_object($result));
// $data = mysqli_fetch_object($result);    
// var_dump($data->name)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>

<body>
    <table border="1px">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>NIM</th>
        <th>Address</th>
    </tr>   
    <?php while ($data = mysqli_fetch_object($result)) {    ?>
    <tr>
        <td><?php echo $data->id ?></td>
        <td><?php echo $data->name ?></td>
        <td><?php echo $data->nim ?></td>
        <td><?php echo $data->address ?></td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>