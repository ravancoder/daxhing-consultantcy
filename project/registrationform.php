<html>
<head>
<title>REGISTRATION FORM</title>
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
.demo{
border:3px double blue;
background-color:yellow;
font-size: 20px;
}
.footer{
padding:20px;
text-align:center;
background-color:grey;
}
</style>
</head>
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
<script>
function validate()
{
var a=document.getElementById("a1").value;
document.getElementById("a1").value=a.toUpperCase();
var b=document.getElementById("a2").value;
var c=document.getElementById("a3").value;
var d=document.getElementById("a4").value;
var e=document.getElementById("a5").value;
document.getElementById("a5").value=e.toUpperCase();
var f=document.getElementById("a7").value;
var g=document.getElementById("a8").value;
if(a==""||b==""||c==""||d==""||e==""||f==""){
alert("all filled must required");
}
else if(a.length<10)
{
alert("this field must be 10 characters");
}
else if(c.length<3){
alert("the age is must be 3 characters");
}
else if(d.length<10){
alert("the mobile number must be 10 characters");
return false;
}
else if(f.length<8){
alert("the mobile number must be 8 characters");
return false;
}
else{
return true;
}
}
</script>
 <center><h1 style="color:grey;">REGISTER YOUR DETAILS</h1>
<form action="registrationform.php" method="post" onsubmit="validate()">
<table class="demo" cellpadding="25px">
<tr><td><label style="color:red;">NAME</td><td>:</td>
<td><input type="text" name="a1" id="a1" style="font-size: 20px;" onblur="validate();" /></td></tr>
<tr><td><label style="color:red;">DOB</label></td><td>:</td>
<td><input type="date" name="a2" id="a2" style="font-size: 20px;"/></td></tr>
<tr><td><label style="color:red;">AGE</label></td><td>:</td>
<td><input type="number" name="a3" id="a3" style="font-size: 20px;"/></td></tr>
<tr><td><label style="color:red;">MOBILE NO</label></td><td>:</td>
<td><input type="number" name="a4" id="a4" style="font-size: 20px;"/></td></tr>
<tr><td><label style="color:red;">E-MAIL ID</label></td><td>:</td>
<td><input type="email" name="a5" id="a5" style="font-size: 20px;" onblur="validate();"/></td></tr>
<tr><td><label style="color:red;">GENDER</label></td> <td>:</td>
<td><input type="radio" name="a6" id="t1"/>MALE
<input type="radio" name="a6" id="t2"/>FEMALE</td></tr>
<tr><td><label style="color:red;">CITY</label></td><td>:</td>
<td><select name="si" style="font-size: 20px;">
<option>select district</option>
<option>CHENNAI</option>
<option>MADURAI</option>
<option>TRICHY</option>
</select></td></tr>
<tr><td><label style="color:red;">PASSWORD</label></td><td>:</td>
<td><input type="password" name="a7" id="a7" style="font-size: 20px;"/></td></tr>
<tr><td><input type="checkbox" name="a8" id="a8" style="font-size: 20px;"/>i accept the terms and conditions</td></tr>
<tr><td><label style="color:red;">USERID</td><td>:</td><td><input type="text" name="a9" id="a9" style="font-size:20px;"/></td></tr>
<tr>
<td colspan="3" align="center" />
<input type ="submit" value="submit"  style="font-size: 20px;" name="bt1" id="bt1"/ >
<input type= "reset" name="bt2"  style="font-size: 20px;"/>
<input type="button" name="bt3" value="cancell"  style="font-size: 20px;"/>
</td></tr>
</table>
</form>
</center>
<div class="footer">
    <h2>contact us:12343545667 email:ramprakash6739gmail.com</h2>
    </div>
<?php
if(isset($_POST['bt1']))
{
$x=$_POST['a9'];
$a=$_POST['a1'];
$b=$_POST['a2'];
$c=$_POST['a3'];
$d=$_POST['a4'];
$e=$_POST['a5'];
$f=$_POST['a6'];
$g=$_POST['si'];
$h=$_POST['a8'];
$i=$_POST['a7'];
$conn=new mysqli("localhost","root","","ramss");
$sql="Insert into submit(USERID,NAME,DOB,AGE,MOBILENO,EMAIL,GENDER,CITY,CHECKBOX,PASSWORD) values('$x','$a','$b','$c','$d','$e','$f','$g','$h','$i')";
if($conn->query($sql)===TRUE)
{
  echo "created successfully";
}
else{
echo "error: ".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
    
</body>
</html>