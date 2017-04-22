<html>

<head>
<meta http-equiv="Content-Type" content="text/html;	charset=utf-8"/>
<title>翱翔星空確認單</title>
</head>

<body>
<form action="Homework1.php" method="post">
<body background="http://s85.youmaker.com/other/2015/7-18/oth4462175785c9d95910c984f5bbd60d4ec7c60ed790850.jpg">

<b><font face="DFKai-sb" size="10" color="#77FFCC"><I>資料確認</font></b><br>
<br/>

<?php

$uName=$_POST["uName"];
$gender=$_POST["gender"];
$uId=$_POST["uId"];
$uPhone=$_POST["uPhone"];
$uAdd=$_POST["uadd"];
$trip=$_POST["planet"];
$meal=$_POST["meal"];
$pay=$_POST["pay"];
$insurance=$_POST["insurance"];

echo "<font face=\"DFKai-sb\" size=\"6\" color=\"white\">"."姓名：".$uName."<br/>"."性別：".$gender."<br/>"."身分證字號".$uId."<br/>"."電話號碼：".$uPhone."<br/>"."地址：".$uAdd."<br/>"."將要至".$trip."旅行"."<br/>"."餐點選擇：".$meal."<br/>"."付款方式：".$pay."是否搭乘太空梭：".$insurance."<br/>"."</font>";

?>

<a href="week2.html">繼續報名下一趟旅程~!</a>

</center>
</form>

</body>
</html>