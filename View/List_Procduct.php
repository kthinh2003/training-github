<?php
 include("../Controller/ProductController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Danh sách sản phẩm</h1>
    <table border = 1>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $list = ProductController::getAll   ();
                foreach ($list as $products) {
                    echo "
                    <tr>
                        <td>
                            <p>".$products['id']."</p>
                        </td>
                        <td>
                            <p>".$products['name']."</p>
                        </td>
                        <td>
                            <p>".$products['price']."</p>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>

    </table>
    <br>
    
</body>

</html>