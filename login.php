<!DOCTYPE html>

<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/myStyle.css">
</head>

<body class="body">
    <?php include('mainMenu.php'); ?>
    <div class="main">
        <div class="banner_2">
            <p>Login</p>
        </div>

        <form action="member.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-7 cardLeft">
                    <h5>Welcome to SE-Store Sytem : Login </h5>
                    <p> User Name
                        <input type="text" class="form-control" name="Uname" value="E0001">
                    </p>
                    <p>Password
                        <input type="password" class="form-control" name="Passwd" value="qwerty">
                    </p>
                    <button type="submit" class="btn btn-danger">Login</button>
                </div>

                <div class="col-4 cardRight">
                    <img class="img1" src="img/myPicture.png">
                    <p class="text-center">
                        <a href="https://www.facebook.com/softengthai"><img src="img/FB.png"></a>
                        <a href="http://www.softengthai.com/"><img src="img/Web.png"></a>
                        <a href="https://www.youtube.com/channel/UCGobB11SOmjWIuNMmDYixUQ"><img src="img/Youtube.png"></a>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="card SE">
                    <h5>5672301 Data Centric Programming</h5>
                    <p>การเปรียบเทียบระหว่างสถาปัตยกรรมระบบไคลเอนต์เซิร์ฟเวอร์กับสถาปัตยกรรมแบบรวมศูนย์ การเขียนโปรแกรมภาษาคอมพิวเตอร์เพื่อเชื่อมต่อข้อมูลในระบบข้อมูลเป็นศูนย์กลาง การเขียนโปรแกรมจำลองสถานการณ์เพื่อการประยุกต์ใช้</p>
                    <h6><u>วัตถุประสงค์</u></h6>
                    <p>เพื่อให้นักศึกษาเข้าใจถึงกระบวนการในการพัฒนาซอฟต์แวร์จำลองระบบบริหารจัดการตามแบบข้อมูลเป็นศูนย์กลาง และสามารถนำไปประยุกต์ใช้สำหรับการพัฒนาระบบในอนาคต</p>

                </div>
            </div>
        </form>
    </div>
    <footer class="footer">
        Copyright@20xx : Student Group xx1621501, Software Engineering, LPRU
    </footer>

</body>

</html>