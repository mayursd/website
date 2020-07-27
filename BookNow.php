<html>
   <body>
   <?php
    $dbhost     ='localhost';
    $dbuser     ='root';
    $dbpass     ='1234';
    $dbname  ='wtl';
    
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
                $sql=$conn->prepare("insert into bookings(name,indate,outdate) values(?,?,?)");
                //$sql1="insert into dining(wedpack,nog) values(".$_POST['wedpack'].",".$_POST['nog'].")"
                //$sql1->execute();
                echo "<img src='logo.png' height='130' width='1350'>";
                echo "<br><br><br><br><br>";
                echo "<p><h3><font color='Black'>ThankYou for transacting with us!<br> </h3> </p>";
                $uname=$_POST["uname"];
                $rawdate = htmlentities($_POST['date1']);
                $rawdate1 = htmlentities($_POST['date2']);
                $dates = date('Y-m-d', strtotime($rawdate));
                $dates1 = date('Y-m-d', strtotime($rawdate1));
                $sql->bind_param("sss",$uname,$dates,$dates1);
                $sql->execute();
?>
   </body>
</html>
