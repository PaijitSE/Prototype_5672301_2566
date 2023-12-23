<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5672301 Data Centric programming</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/myStyle.css">
</head>

<body>

    <?php include('mainMenu.php'); ?>

    <div class="main">
        <div class="banner_2">
            <p>All Product</p>
        </div>
        <div class="product">
            <?php for ($x = 1; $x <= 20; $x++) {
            ?>
                <div class="productBox boxSize_M">
                    <img class="productImg" src="img/Product/S01.jpg">
                    <div class=" productTxt">
                        <h3><b>รหัสสินค้า</b></h3>
                        <p><b>Type : </b>ประเภทสินค้า</p>
                        <p><b>Name : </b>ชื่อสินค้า</p>
                        <p><b>Price : </b>ราคาสินค้า</p>
                        <p><b>Stock In : </b>จำนวนคงเหลือ</p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <footer class="footer">
        Copyright@20xx : Student Group xx1226601, Software Engineering, LPRU
    </footer>
</body>

</html>