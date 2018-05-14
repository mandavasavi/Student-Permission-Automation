<?php
session_start();
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("spt") or die("connection failed");
$id1=$_GET['uname'];
$query = "SELECT * FROM PERMISSION WHERE studentid = '$id1'";

    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
$count = mysql_num_rows($result);

     

    if ($count == 1)

    {
		echo "STUDENT-ID IS FOUND , ALLOW HIM/HER TO GO";
	}
	else
		echo "STUDENT-ID IS NOT FOUND ,DON'T ALLOW HIM/HER TO GO ";
	?>