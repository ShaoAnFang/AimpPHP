<?php
error_reporting(0);
//error_reporting(E_ALL ^ E_DEPRECATED);


// function the_check() {
// 	if (mysql_errno ()) {
// 		$mysql_errno = mysql_errno ();
// 		$the_pay_load ['mysql_errno'] = $mysql_errno;
// 		$mysql_error = mysql_error ();
// 		$the_pay_load ['mysql_error'] = $mysql_error;

// 		echo (json_encode ( $the_pay_load ));

// 		exit ();
// 	}
// }
// $DDbug = true;
// $the_pay_load = array ();
// $the_pay_load ['mysql_errno'] = 0;

date_default_timezone_set('Asia'/'Taipei');

$time = localtime(time(),true);

// if($time['tm_hour'] > 16) || ($time['tm_hour'] > 17)
// {
// 	$mysql_errno = 666;
// 	$mysql_error = "book time over 09:40AM";
// 	exit();
// }
mysql_set_charset("utf8");

mysql_connect('sql6.freemysqlhosting.net','sql6152521','9snQHwyntA') or die('Could not connect to database');//free db hosting
//mysql_connect('aime.cd4jeronymvi.us-west-2.rds.amazonaws.com','MAPD17','1501user40');
//mysql_connect('localhost','root','root');
// mysql_connect('db4free.net','aime','720419');
// mysql_select_db("aimeclark");

//mysql_select_db("Aime");
mysql_select_db("sql6152521") or die('Could not select database');

//the_check();





//the_check();

// mysql_query( "insert into Orders" . 
// 		   "(name,address,phone,order_date)" . 
// 		   "values('sam','#390','(02)6631-6666',curdate() )"
// 		);

// $insert_id = mysql_insert_id();
// the_check();

// mysql_query("insert into order_detail" 
// 		."(product_id,amount,order_id)"
// 		."values(2,2,$insert_id)"
// 		);

// the_check();

//@mysql_select_db($database) or die("Unable to find database");

$name = @$_GET["name"];

$address = @$_GET["addressx"];

$phone = @$_GET["phone"];

$message = @$_GET["message"];

$orderSendTime = @$_GET["orderSendTime"];

@$query = "insert into Orders values('','$name','$address','$phone',$orderSendTime,'$message')";

//@$query = "insert into Orders values('','$name','$address','$phone',curdate(),'$message')";

mysql_query($query) or die (mysql_error("error"));

mysql_close();

// if ($DDbug=true) {
// 	echo ("<br />");
// 	echo ("MAPD17");
// 	echo ("<hr />");
// }

?>
