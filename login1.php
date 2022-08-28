<html>
<head>
<title>login your account</title>
</head>
<style>
.header{
padding:80px;
text-align :center;
background:green;
color:red;
}
.header h1{
font-size:40px;
}
.navbar{
overflow:hidden;
background-color:black;
position: sticky;
position:-webkit-sticky;
top:0;
}
.navbar a{
float:left;
display:block;
color:white;
text-align:center;
padding:14px 20px;
text-decoration:none;
}
.navbar a.right{
float:right;
}
.navbar a:hover{
background-color:red;
color:blue;
}
.navbar a.active{
background-color: white;
color:grey;
}
#table1{
    font: size 20px;
    color:red;
    border: 4px solid black;
    background-color: cyan;
}
.footer{
padding:20px;
text-align:center;
background-color:grey;
}
</style>
<script type="text/javascript">
function demo()
{
var a=document.getElementById("t1").value;
var b=document.getElementById("t2").value;
if(a==""||b==""){
    alert("this field must requirred");
}
else if(a.length<10)
{
alert("must be 10 characters");
}
else if(b.length<8)
{
 alert("must be 8 characters");   
return false;
}
else{
    return true;
}
}
</script>
<body>
    <div class="header">
        <h1>DAXHING CONSULTANTCY</h1>
        <p><h2>trading investing optiontrading </h2></p>
        </div>
        <div class="navbar">
        <a href="index.html"class="active">Home</a>
        <a href="registrationform.php">Register</a>
        <a href="login1.php">Login</a>
        <a href="update.php">Update</a>
        <a href="delete.php">Delete</a>
        </div>
<form action="login1.php" method="post">
<h2 style="text-align:center">LOGIN YOUR ID</h2>
<table align="center" cellpadding="10px" id="table1">
<tr><td>NAME</td> <td>:</td>
<td><input type="text" name="t1"id="t1"/></td></tr><br>
<tr><td>PASSWORD</td><td>:</td> 
<td><input type="password" name="t2"id="t2"/></td></tr>
<td></td><td><input type="submit" name="t3" id="t3" value="LOGIN" onclick="demo();"/></td><td></td>
<tr><td><p>you not remember PASSWORD??</p></td><td> </td>
    <td><input type="button" name="t4" value="forget password"/></td></tr>
</table>
</form>
<br><br><br></br></br><br><br><br><br><br><br><br><br>
<div class="footer">
    <h2>contact us:12343545667 email:ramprakash6739gmail.com</h2><br>
    </div><br>
<?php
if(isset($_POST['t3']))
{
    $a=$_POST['t1'];
    $b=$_POST['t2'];
    $con=mysqli_connect("localhost","root","","ramss");
    $qry="select * from submit where(NAME='".$a."')and(PASSWORD='".$b."')";
    $check=mysqli_query($con,$qry);
    $_SESSION['NAME']=$a;
    if(mysqli_num_rows($check)==1)
    {
        //header('location:okk.php');
        echo "login sucessfull";
    }
else{
    echo "login failure";
}
}
?>
    
</body>
</html>