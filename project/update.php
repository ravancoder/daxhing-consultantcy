<html>
<head>
<title>UPDATE YOUR ID</title>
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
border:3px double black;
font-size:20px;
background-color:rgb(205, 243, 134);
}
.footer{
padding:20px;
text-align:center;
background-color:grey;
}
</style>
<script type="text/javascript">
function validate()
{
var a=document.getElementById("a2").value;
document.getElementById("a2").value=a.toUpperCase();
var b=document.getElementById("a3").value;
var c=document.getElementById("a4").value;
var d=document.getElementById("a5").value;
var e=document.getElementById("a6").value;
document.getElementById("a6").value=e.toUpperCase();
if(a==""||b==""||c==""||d==""||e==""){
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
else{
return true;
}
}
function hs(){
    var x=document.getElementById("a8").value;
    if(x.table.display==="none"){
        x.table.display="block";
    }
else{
    x.table.display="none";
}
}
</script>
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

        <CENTER><h1 style="color:tomato;">UPDATE YOUR ID</h1>
        <form action="update.php"  method="post" onsubmit="validate()">    
<table  class="demo" cellpadding="25px" >
<tr><td><label style="color:blue;">USERID</td><td>:</td>
 <td><input type="text" id="a1" name="a1" style="font-size: 20px;"/></td></tr>
<tr><td><label style="color:blue;">NAME</td><td>:</td>
<td><input type="text" id="a2" name="a2" style="font-size: 20px;" onblur="validate();"/></td></tr>
<tr><td><label style="color:blue;">DOB</label></td><td>:</td>
<td><input type="date" style="font-size: 20px;" id="a3" name="a3"/></td></tr>
<tr><td><label style="color:blue;">AGE</label></td><td>:</td>
<td><input type="number" id="a4" name="a4"style="font-size: 20px;"/></td></tr>
<tr><td><label style="color:blue;">MOBILE NO</label></td><td>:</td>
<td><input type="number" id="a5" name="a5" style="font-size: 20px;"/></td></tr>
<tr><td><label style="color:blue;">E-MAIL ID</label></td><td>:</td>
<td><input type="email" id="a6" name="a6" style="font-size: 20px;" onblur="validate();"></td></tr>
<tr><td><label style="color:blue;">GENDER</label></td><td>:</td> 
<td><input type="radio" name="a7" id="t1"/>MALE
<input type="radio" name="a7" id="t2"/>FEMALE</td></tr>
<tr><td><label style="color:blue;">CITY</label></td><td>:</td>
<td><select name="si" style="font-size: 20px;">
<option>select district</option>
<option>CHENNAI</option>
<option>MADURAI</option>
<option>TRICHY</option>
</select></td></tr>
<!--<tr><td style="color:blue;">Do you want change your password? </td><td></td>
 <td><input type="button" value="yes"  onclick="hs();"/>
    <input type="button" value="no" id="a9"/></td></tr>
<tr><td style="color:blue;">Create new password</td><td>:</td>
<td><input type="text" id="a8" style="font-size: 20px;"  /></td></tr>-->
<tr><td style="color:blue;"> password</td><td>:</td>
<td><input type="password" id="a8" name= "a8" style="font-size: 20px;"/></td></tr>
<!--<tr><td></td><td></td><td><input type="button" id="bt1" value="confirm" style="font-size: 20px;"/></td></tr>-->
<tr colspan="2" align="center">
<td></td><td><input type ="submit" value="submit" name="bt1" style="font-size: 20px;"/>
<input type= "reset" name="bt2"style="font-size: 20px;"/>
<input type="button" name="bt3" value="cancell" style="font-size: 20px;"/></td>
<td></td></tr>
</table>
</form>
</center>
<div class="footer">
    <h2>contact us:12343545667 email:ramprakash6739gmail.com</h2>
    </div>
    <?php
    if(isset($_POST['bt1']))
    {
        $a=$_POST['a1'];
        $b=$_POST['a2'];
        $c=$_POST['a3'];
        $d=$_POST['a4'];
        $e=$_POST['a5'];
        $f=$_POST['a6'];
        $g=$_POST['a7'];
        $h=$_POST['si'];
        $i=$_POST['a8'];
         $conn=new mysqli("localhost","root","","ramss");
        if($conn->connect_error)
        {
             die("connection failed".$conn->connect_error);
        }
        $sql="update submit set   NAME='$b',DOB='$c',AGE='$d',MOBILENO='$e',EMAIL='$f',GENDER='$g',CITY='$h', PASSWORD='$i' where USERID='$a'";
        if($conn->Query($sql)===TRUE)
        {
         echo "updated sucessfully";
        }
        else
        {
            echo "error".$sql."<br>".$conn->error;
        }
         $conn->close();
    }
        ?>
    
    </body>
</html>