<html>
<style>
.button {
    position: relative;
    background-color: #4CAF50;
    border: none;
    font-size: 28px;
    color: #FFFFFF;
    padding: 20px;
    width: 150px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: "";
    background: #90EE90;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}

</style>
<style>
h2 { font-style: italic 
     }
</style>
<title>student login</title>
<h1> MVGR COLLEGE OF ENGINEERING </h1>
<hr>
<h2><i> Student Login</i></h2>

<body style="text-align:center">
 <form action="leaveform1.php" method="GET" name="form validation">

 


  <div class="imgcontainer">

    <img src="unnamed.jpg" height="250" width="250" alt="student" class="student">
  </div>
<br>
<br>
  <div class="container">
    <label for="uname"><b>Username: </b></label>
    <input type="text" placeholder="Enter student_id" name="id" required>
<br><br>
 <label for="uname"><b>password: </b></label>
    <input type="password" placeholder="Enter password" name="pword" required>
<br>
<br>
<input type="checkbox" checked="unchecked" name="remember"> Remember me
    </label>
  </div>
<br><br>
<input type="submit" class="button" value="login" style="margin-right: 50px">
<input type="button" class="button" value="cancel"   >
</form> 
</body>
</html>








