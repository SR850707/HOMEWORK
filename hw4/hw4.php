<?php

//建立時間
$endtime=date_create('2017-12-31 00:00:00');
$nowtime=date_create(date('Y-m-d'));

$mon=date('m');

//讀取現在時間
$end=$endtime;
$now=date('Y-m-d h:i:s');
echo date("Y-m-d l H:i:s");
echo "<br/>";

if(date('m')==1){
	echo "<img src=\"1.jpg\">";
}else if(date('m')==2){
	echo "<img src=\"2.jpg\">";
}else if(date('m')==3){
	echo "<img src=\"3.jpg\">";
}else if(date('m')==4){
	echo "<img src=\"4.jpg\">";
}else if(date('m')==5){
	echo "<img src=\"5.jpg\">";
}else if(date('m')==6){
	echo "<img src=\"6.jpg\">";
}else if(date('m')==7){
	echo "<img src=\"7.jpg\">";
}else if(date('m')==8){
	echo "<img src=\"8.jpg\">";
}else if(date('m')==9){
	echo "<img src=\"9.jpg\">";
}else if(date('m')==10){
	echo "<img src=\"10.jpg\">";
}else if(date('m')==11){
	echo "<img src=\"11.jpg\">";
}else if(date('m')==12){
	echo "<img src=\"12.jpg\">";
}

echo "<br/>";

$today=strtotime(date('Y-m-d h:i:s')); 
$enddate=strtotime('2017-12-31  00:00:00'); 
$diff=($enddate-$today); 
$diffd=(int)($diff/86400);
$diffh=(int)((($diff%86400)/3600));
$diffm=(int)(((($diff%86400)%3600)/60));
$diffi=(int)((((($diff%86400)%3600)%60)));

echo "距離世界末日還剩：".$diffd."天".$diffh."時".$diffm."分".$diffi."秒";

?>