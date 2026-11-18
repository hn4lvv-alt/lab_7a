<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 7a Q1</title>
</head>
<body>
    <?php
        $name    = "Nurhanan Najlah";
        $matric  = "AI250134";
        $course  = "Software Engineering";
        $year    = "year 2";
        $address = "Kuala Lumpur";
    ?>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr><td>Name</td>          <td><?php echo $name; ?></td></tr>
        <tr><td>Matric Number</td> <td><?php echo $matric; ?></td></tr>
        <tr><td>Course</td>        <td><?php echo $course; ?></td></tr>
        <tr><td>Year of Study</td> <td><?php echo $year; ?></td></tr>
        <tr><td>Address</td>       <td><?php echo $address; ?></td></tr>
    </table>
</body>
</html>