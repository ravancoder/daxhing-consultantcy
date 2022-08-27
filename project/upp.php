<html>
<head>
    <title>update reg</title>
</head>
<body>
    <h2>UPDATE YOUR ID</h2>
    <form action=upp.php method=post>
    <table>
        <tr><td>NAME</td><td>:</td><td><input type="text" name="t1"/></td></tr>
        <tr><td>PASSWORD</td><td>:</td><td><input type="password" name="t2"/></td></tr>
        <tr><td>EMAIL ID</td><td>:</td><td><input type="email" name="t3"/></td></tr>
        <tr><td>USERID</td><td>:</td><td><input type="text" name="t4"/></td></tr>
        <tr><td><input type="submit" NAME="bt1" value="update"/></td></tr>
        </table>
</form>
        <?php
        if(isset($_POST['bt1']))
        {
            $a=$_POST['t1'];
            $b=$_POST['t2'];
            $c=$_POST['t3'];
            $d=$_POST['t4'];
             $conn=new mysqli("localhost","root","","ramss");
            if($conn->connect_error)
            {
                 die("connection failed".$conn->connect_error);
            }
            $sql="update register set NAME ='$a', PASSWORD='$b', MAIL='$c' where USERID='$d'";
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
