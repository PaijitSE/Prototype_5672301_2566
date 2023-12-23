<!DOCTYPE html>

<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/myStyle.css">
    <link rel="stylesheet" href="css/memberStyle.css">
</head>

<body class="body">
    <div class="memberHeader">
        <div class="main">
            <div class="title">
                Member Zone
            </div>
            <p>Hello, ชื่อสมาชิกที่เข้าระบบ</p>
            <ul class="menubar">
                <li><b><a href="myProfile.php">myProfile</a></b></li>
                <li> | </li>
                <li><b><a href="myHistory.php">myHistory</a></b></li>
                <li> | </li>
                <li><b><a href="index.php">Logout</a></b></li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="memberZone">
            <div class="headTopic">
                My Profile
            </div>
            <div class="col zoneLeft">
                <p>Member Data : id ตัวแปรรหัสมาชิก</p>
                <div class="row">
                    <div class="col-4 td1">Username</div>
                    <div><label class="form-control">ตัวแปร UN</label></div>
                </div>
                <div class="row">
                    <div class="col-4 td1">Password</div>
                    <div><label class="form-control">ตัวแปร PW</label></div>
                </div>
                <div class="row">
                    <div class="col-4 td1">Prename</div>
                    <div><label class="form-control">ตัวแปร Prename</label></div>
                </div>
                <div class="row">
                    <div class="col-4 td1">Member name</div>
                    <div><label class="form-control">ตัวแปร Member name</label></div>
                </div>
                <div class="row">
                    <div class="col-4 td1">Member level</div>
                    <div><label class="form-control">ตัวแปร Member level</label></div>
                </div>
                <div class="row">
                    <div class="col-4 td1">Birthday</div>
                    <div><label class="form-control">ตัวแปร Birthday</label></div>
                </div>
                <div class="row">
                    <div class="col-4 td1">Address</div>
                    <div class="col pl-0 pb-2 mr-4"><textarea class="form-control" rows="5">ตัวแปร Address </textarea></div>
                </div>
                <div class="row">
                    <div class="col-4 td1">Telephone</div>
                    <div><label class="form-control">ตัวแปร Telephone</label></div>
                </div>
                <p>หมายเหตุ</p>
                <p>*** หากต้องการแก้ไขกรุณาแจ้งผู้ดูแลระบบ ***</p>
            </div>
            <div class="col zoneRight">
                <img src="img/myPicture.png">
                <div class="row">
                    <div class="col-4 td1">จำนวนซื้อ</div>
                    <div class="col-4 form-control td2">0</div>
                    <div class="col-1 td3">ครั้ง</div>
                </div>
                <div class="row">
                    <div class="col-4 td1">จำนวนสินค้า</div>
                    <div class="col-4 form-control td2">0</div>
                    <div class="col-1 td3">หน่วย</div>
                </div>
                <div class="row">
                    <div class="col-4 td1">จำนวนเงิน</div>
                    <div class="col-4 form-control td2">0.00</div>
                    <div class="col-1 td3">บาท</div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        Copyright@20xx : Student Group xx1621501, Software Engineering, LPRU
    </footer>
</body>

</html>