<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5672301 Data Centric programming : Prototype</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/myStyle.css">
</head>

<body>
    <?php include('mainMenu.php'); ?>

    <div class="main">
        <div class="banner_1"></div>
        <div class="topic">Product Recommened</div>
        <div class="productRecommened">
            <?php for ($x = 1; $x <= 5; $x++) {
            ?>
                <div class="productBox boxSize_L">
                    <img class="productImg" src="img/Product/S01.jpg">
                    <div class=" productTxt">
                        <h3>สินค้าแนะนำ : #<?php echo $x; ?></h3>
                        <p><b>Name : </b>ชื่อสินค้า #<?php echo $x; ?></p>
                        <p><b>Type : </b>ประเภทสินค้า #<?php echo $x; ?></p>
                        <p><b>Price : </b>00.00 #<?php echo $x; ?></p>
                        <p><b>Stock In : </b>0000 #<?php echo $x; ?></p>
                        <button>สนใจ</button>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

    <footer class="footer">
        Copyright@20xx : Student Group xx1621501, Software Engineering, LPRU
    </footer>

</body>

</html>