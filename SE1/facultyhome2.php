 
<?php
$vr = $_GET["id"]; 
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("spt") or die("connection failed");
$query="select * from rfl";
$result=mysql_query($query);
//print "<table>";
// print "<table class='table table-bordered table-striped'>";
print " <table class='table table-bordered table-striped'>
	<tr rowspan='2'><th colspan='100'><center> MVGR COLLEGE OF ENGINEERING</center><br /><center>PENDING REQUESTS</center></th></tr><br />
     <tr>
      <th>SID</th>
      <th>reason</th>
     
	 </tr>";
while($line=mysql_fetch_array($result)){
   print "<tr>"."<td>".$line['0']."</td>"."<td>".$line['1']."</td>"."<td>"."<a href='approve.php'>grant</a>"."&nbsp;&nbsp;&nbsp;"."<a href='reject.php'>reject</a>"."</td>"."</tr>";;
}
print "</table>";
 
?>