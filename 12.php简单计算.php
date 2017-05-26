<?php
echo 100+true;//101
echo '<br />';
echo 100-false;//100
echo '<br />';
echo '100Users'+123;//223
echo '<br />';
echo '1.1User1'+123;//124.1
echo '<br />';
echo 123*NULL;//0
echo '<br />';

echo 3/2;//1.5
echo '<br />';
echo 3-true;//2
echo '<br />';
echo 4*false;//0
echo '<br />';
echo 5%true;//0

echo '<br />';
echo 3 + "hello";//3
echo '<br />';
echo 3 . "hello";//3hello
echo '<br />';
echo "hello"+ "world!";//0
echo '<br />';

var_dump('' && true);//bool(false) 
echo '<br />';
var_dump('0' && true);//bool(false) 
echo '<br />';
var_dump('00' && true);//bool(true)
echo '<br />';
var_dump('zzm' && true);//bool(true)
echo '<br />';
var_dump(123 && true);//bool(true)
echo '<br />';
var_dump(0 && true);//bool(false)
echo '<br />';
var_dump(NULL && true);//bool(false)
echo '<br />';




var_dump(false.'123');//string(3) "123" 
echo '<br />';
var_dump(true.'123');//string(4) "1123" 
echo '<br />';
var_dump(NULL.'123');//string(3) "123" 
echo '<br />';
echo '11'.'123';//11123

echo '<br />';
var_dump(true >= '123');//bool(true) 
echo '<br />';
var_dump(true >= 123);//bool(true) 
echo '<br />';
var_dump('101' > 100);//bool(true) 
echo '<br />';
var_dump('abd' < 'abc');//bool(false)
echo '<br />';
var_dump(5 && false);//bool(false)
echo '<br />';
var_dump(true == "false");//bool(true) 
echo '<br />';
var_dump(true === 1);//bool(false)


$foo = '123.5Users';
$num = (int)$foo;
$float = (float)$foo;
var_dump($num);//int(123) 
echo '<br />';
var_dump(3/2);//float(1.5)
echo '<br />';
echo '3'.'Hell0';//3Hell0

?>
