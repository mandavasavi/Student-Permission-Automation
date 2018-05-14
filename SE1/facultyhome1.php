<!DOCTYPE html>
<?php
session_start();
?>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>faculty home page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("theme.png");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
table {
    width: auto;
    margin-left: 400px;
    margin-right: auto;
}
.button {
    background-color: black;
    border: none;
    color: white;
    padding: 10px 40px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;

}

</style>

</head>
<body  >
  <div class="bg">  
  <div class="bs-example">
    <nav id="myNavbar" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="facultyhome.html">pending requests</a></li>
                    <li><a href="attendance">attendance list</a></li>
                    <li><a href="#">section details</a></li>
					<li><a href="#">counsellor details</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                     
                    <li><a href="#">help</a></li>
                     <li><a href="flogin1.html"><button   name="logout" id="logout"  value="Log Out">Log Out</button></a></li>
                    </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
 
<?php
$vr = $_GET["id"]; 
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("spt") or die("connection failed");
$query="select * from rfl";
$result=mysql_query($query);
//print "<table>";
// print "<table class='table table-bordered table-striped'>";
print " <table class='table table-bordered table-striped' >
	<tr rowspan='2'><th colspan='100'><center> MVGR COLLEGE OF ENGINEERING</center><br /><center>PENDING REQUESTS</center></th></tr><br />
     <tr>
      <th>SID</th>
      <th>reason</th>
     
	 </tr>";
while($line=mysql_fetch_array($result)){
   print "<tr>"."<td>".$line['0']."</td>"."<td>".$line['1']."</td>"."<td>"."<a href='approve.php'>grant</a>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<a href='reject.php'>reject</a>"."</td>"."</tr>";;
}
print "</table>";
 
?>
</div>                                           
                                        
                              
                                          
   
  
</div>



</body>
</html>                            