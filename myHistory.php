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
                My History
            </div>
            <div class="historyArea">
                <table class="historyTable">
                    <tr>
                        <th>Invoice Id</th>
                        <th>Invoice Date</th>
                        <th>Invoice items</th>
                        <th>Total Money</th>
                        <th>Printing</th>
                    </tr>
                    <tr>
                        <td>Invoice #1</td>
                        <td>Invoice Date #1</td>
                        <td>00 รายการ</td>
                        <td>0000.00 บาท</td>
                        <td><button>Print</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Invoice #2</td>
                        <td>Invoice Date #2</td>
                        <td>00 รายการ</td>
                        <td>0000.00 บาท</td>
                        <td><button>Print</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Invoice #3</td>
                        <td>Invoice Date #3</td>
                        <td>00 รายการ</td>
                        <td>0000.00 บาท</td>
                        <td><button>Print</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <footer class="footer">
        Copyright@20xx : Student Group xx1621501, Software Engineering, LPRU
    </footer>
</body>

</html>