<html>
   <body>
   <?php
    $dbhost     ='localhost';
    $dbuser     ='root';
    $dbpass     ='1234';
    $dbname  ='wtl';
    
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    $sql1="select reservation from wedding";
    $result=$conn->query($sql1); 
    $fag=0;
     if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {
            if($row['reservation']==$_REQUEST['date1'])
            {
               echo "<img src='logo.png' height='130' width='1350'>";
                echo "<br><br><br><br><br>";
                echo "<h1> Selected Date not available!! Please Select another date</h1>";
               echo "<input type='button' value='Select Another Date!' onclick='history.back()'>";
               $fag= 1;
               break;
            }
        }
    }
    {
             if($fag!=1)
            {
                $sql=$conn->prepare("insert into wedding(name,city,mob,email,reservation,package,id) values(?,?,?,?,?,?,?)");
                //$sql1="insert into wedding(wedpack) values(".$_POST['wedpack'].")"
                //$sql1->execute();
                echo "<img src='logo.png' height='130' width='1350'>";
                echo "<br><br><br><br><br>";
                echo "<p><h3><font color='Black'>ThankYou for transacting with us!<br> Your Booking Id is</h3> </p>";
                $hey=rand();
                echo $hey;
                $uname=$_POST["uname"];
                $city=$_REQUEST["city"];
                $mobno=$_REQUEST["mobno"];
                $email=$_REQUEST["email"];
                $rawdate = htmlentities($_POST['date1']);
                $dates = date('Y-m-d', strtotime($rawdate));
                $wedpack= $_POST['wedpack'];
                $sql->bind_param("ssissss",$uname ,$city,$mobno,$email,$dates,$wedpack,$hey);
                $sql->execute();
            }
    }
?>
   </body>
</html>
