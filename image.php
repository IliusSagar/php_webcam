<?php 

require 'function.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Database</title>

    <style media="screen">
        a button {
            padding: 12px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
            background: #F0AD4E;
            color: white;
        }
    </style>
</head>
<body>

    <table border = 1 cellspacing = 0 cellpadding = 10>
        <tr>
            <td>#</td>
            <td>Date & Time</td>
            <td>Image</td>
        </tr>

        <?php 
            $i = 1;
            $rows = mysqli_query($conn, "SELECT * FROM tbl_image ORDER BY id DESC");
        ?>

        <?php foreach($rows as $row) : ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["date"] ?></td>
            <td><img src="img/<?php echo $row["image"] ?>" width=200 title="<?php echo $row["image"] ?>"></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    
    <a href="../webcam"><button type="button" name="button">Go To Webcam Page</button></a>
</body>
</html>