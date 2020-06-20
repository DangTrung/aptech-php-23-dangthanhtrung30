<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        tr, td { border:1px  solid black }
    </style>
</head>
<body>
<?php
$ten_SP = ["Apple", "Samsum","Blacberry"];
    $Gia = [100,50,300];
    $Xuat_Xu = ["USA","China","Canada"];
    
?>
    <table>
    <thead>
        <tr>
        <th>STT</th>
        <th>Ten SP</th>
        <th>Gia SP</th>
        <th> Nha SX</th>
        </tr>
    </thead>
    <tbody>
    <?php for($i=0; $i < count($ten_SP); $i++ ) { ?>
    <tr>
        <td><?php echo ($i+1); ?> </td>
        <td><?php echo $ten_SP[$i]; ?></td>
        <td> <?php echo $Gia[$i]; ?></td>
        <td><?php echo $Xuat_Xu[$i]; ?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
</body>
</html>