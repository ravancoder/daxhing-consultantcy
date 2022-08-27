<html>
<head>
<title>delete your Id</title>
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
    color:cadetblue;
    border: 4px solid black;
    background-color:gold;
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
if(a==""){
    alert("this field must requirred");
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
<h2 style="text-align:center">DELETE YOUR ID</h2>
<form action="delete.php" method="post">
<table align="center" cellpadding="10px" id="table1">
<tr><td>NAME</td> <td>:</td>
<td><input type="text" name="t1" id="t1" /></td></tr><br>
<td></td><td><input type="submit" name="t2" id="t2" value="DELETE" onclick="demo();"/></td><td></td><br>
</table>
</form>
<br><br><br></br></br><br><br><br><br><br><br><br><br>
<div class="footer">
    <h2>contact us:12343545667 email:ramprakash6739gmail.com</h2>
    </div>
  <?php
  if(isset($_POST['t2']))
  {
    $a=$_POST['t1'];
    $db=mysqli_connect("localhost","root","","ramss");
    mysqli_Query($db,"delete from submit where NAME='$a'");
    echo "deleted sucessfully";
  }
?>
</body>
</html>