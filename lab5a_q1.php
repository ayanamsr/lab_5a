<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 5a Q1</title>
<h1>My Biodata</h1>
<style>
    table{
        width: 100%;
        border-collapse: collapse;
    }
    td,th{
        border: 1px solid black;
        padding: 8px;
        background-color: bisque;
    }
</style>
</head>
<body>
<?php
$name = "Nuralyana Maisara Binti Noorisham";
$matric = "AI220222";
$course = "BIP";
$year = "2024";
$address = "288, Kg Padang Benggali, Teluk Air Tawar, 13050 Butterworth, Pulau Pinang";
?>

<table>
<tr>
    <td><b>Name</b></td>
    <td><?php echo "$name"; ?></td>
</tr>
<tr>
    <td><b>Matric Number</b></td>
    <td><?php echo "$matric"; ?></td>
</tr>
<tr>
    <td><b>Course</b></td>
    <td><?php echo "$course"; ?></td>
</tr>
<tr>
    <td><b>Year Of Study</b></td>
    <td><?php echo "$year"; ?></td>
</tr>
<tr>
    <td><b>Address</b></td>
    <td><?php echo "$address"; ?></td>
</tr>
</table>
</body>
</html>
