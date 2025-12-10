<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>

    <?php  
        $name = "MUKESH A/L PERIASAMY";
        $matric = "CI230048";
        $course = "BACHELOR OF SOFTWARE ENGINEERING";
        $year = "2025";
        $address = "No12,jalan sungai nibong 12,taman rantau panjang,batu 3 1/2 jalan kapar, 41400 klang,selangor";
    ?>

    <table border="1" cellpadding="5">
        <tr><td>Name</td><td><?php echo $name; ?></td></tr>
        <tr><td>Matric Number</td><td><?php echo $matric; ?></td></tr>
        <tr><td>Course</td><td><?php echo $course; ?></td></tr>
        <tr><td>Year of Study</td><td><?php echo $year; ?></td></tr>
        <tr><td>Address</td><td><?php echo $address; ?></td></tr>
    </table>

</body>
</html>