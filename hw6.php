<?

if(@mysql_connect("127.0.0.1","root","road850707"))
			{
				echo "connect success";
			}
			else
			{
				echo "connect failed";
			}

//主機名(ip),使用者,密碼,資料庫名稱
$link= @mysqli_connect('localhost','root','road850707','homework');

//mysql_select_db('homework');


mysqli_query($link,'SET NAMES utf8');

mysqli_query($link," INSERT INTO tour(uName,gender,uId,uPhone,uAdd,trip,meal,pay,insurance) VALUES ('$uName','$gender','$uId','$uPhone','$uAdd','$trip','$meal','$pay','$insurance')");


?>