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
mysql_connect('aime.cd4jeronymvi.us-west-2.rds.amazonaws.com','MAPD17','1501user40');
//mysql_connect('localhost','root','root');

//the_check();

mysql_set_charset("utf8");
//the_check();

mysql_select_db("Aime");
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

@$query = "insert into Orders values('','$name','$address','$phone',curdate(),'$message')";

mysql_query($query) or die (mysql_error("error"));

mysql_close();

// if ($DDbug=true) {
// 	echo ("<br />");
// 	echo ("MAPD17");
// 	echo ("<hr />");
// }

?>
