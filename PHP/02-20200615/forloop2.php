<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        tr, td { border:1px  solid black }
    </style>
</head>
<body>
<?php
 $product = [
     ["Samsung Note 10",18000000,"BacNinh, VietNam"],
     ["iPhone 11 Max Pro",25000000,"QuangChau, China"]
 ]
?>
<table>
    <thead>
        <tr>
        <th>STT</th>
        <th>Ten SP</th>
        <th>Gia</th>
        <th>Xuat Xu</th>
        </tr>
    </thead>
    <tbody>
        <?php for($i=0;$i<Count($product);$i++) {?>
            <tr>
            <td><?php echo ($i+1); ?></td>
            <?php for($j=0;$j<count($product[$i]);$j++) { ?>
                    
                  
                <td> <?php echo $product[$i][$j]; ?></td>   
                     
              

              <?php   }  ?>
              </tr>
            <?php } ?>
    </tbody>
</table>
</body>
</html>


