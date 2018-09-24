<?php
$con = new mysqli("127.0.0.1", "root", "d9ehZKprvmCy", "mydb");
$message = $con->query("SELECT message FROM myTable")->fetch_object()->message;
$con->close();
echo "$message <br/>";
echo "Hello From Sites Folder!";

echo "I made some changes - does this commit to Git?";
phpinfo();