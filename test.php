<?php

$localhost="192.168.219.169";

$user_id="kali";

$user_passwd="kali";

$db_name="php";

$connect=mysql_connect("$localhost","$user_id","$user_passwd") or die("SQL server에 연결할수 없습니다."); mysql_select_db("$db_name",$connect);





$query = "select * from user";

$result = mysql_query($query,$connect);

if ($result) {

    while ($newArray = mysql_fetch_array($result,MYSQL_ASSOC)) {

    $host = $newArray['Host'];

    $user = $newArray['User'];

    echo "$host, $user <br>";

    }

}

?>

