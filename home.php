<?php
$connection =  mysqli_connect("localhost",
    'root','root','innovate_db');
if($connection){
    $sql = "SELECT * FROM students";
    $result = mysqli_query($connection,$sql);
    if($result){
        $rows = mysqli_fetch_all($result);
//        var_dump($rows);
    }
}
?>
<html>
    <head>
        <title>
            Innovators Android App
        </title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Status</th>
            </tr>
            <?php
            for($i = 0; $i < count($rows); $i++){
                ?>
                <tr>
                    <td><?php echo $rows[$i][1] ?></td>
                    <td><?php echo $rows[$i][2] ?></td>
                    <td><?php echo $rows[$i][3] ?></td>
                    <td><?php echo $rows[$i][4] ?></td>
                </tr>
            <?php
            }
            ?>

        </table>
    </body>
</html>