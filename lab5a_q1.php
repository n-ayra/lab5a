<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
 <title>Question 1</title>
</head>
<body>
 <?php
 $name = "Zuhayra Nasrin Binti Ardad";
 $matricNum = "AI220108";
 $course = "Web Development";
 $yearOfStudy = "3rd Year";
 $address = "No 1103, Jalan Ara Sendayan 5/1, 70300 Seremban, Negeri Sembilan.";
 ?>
 <div class="container">
 <table border = "1" style="border-collapse:collapse">

    <tr>
    <td>Name</td>
    <td><?php echo "$name"; ?></td>
    </tr>

    <tr>
    <td>Matric Number</td>
    <td><?php echo "$matricNum"; ?></td>
    </tr>

    <tr>
    <td>Year of Study</td>
    <td><?php echo "$yearOfStudy"; ?></td>
    </tr>
    
    <tr>
    <td>Address</td>
    <td><?php echo "$address"; ?></td>
    </tr>

 
 
 </table>
 </div>

</body>
</html>