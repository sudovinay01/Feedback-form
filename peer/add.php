  <?php
  $db=mysqli_connect("localhost", "root", "", "peer");
  if (isset($_POST['submit']))
  {
  	 $name=$_POST['name'];
  	  $email=$_POST['email'];
  	  $mobile=$_POST['mobile'];
  	  $deg=$_POST['deg'];
  	  $a=$_POST['1'];
  	  $b=$_POST['2'];
  	  $c=$_POST['3'];
  	  $d=$_POST['4'];
  	  $e=$_POST['5'];
  	  $f=$_POST['6'];
  	  echo "$name $email $mobile $deg $a $b $c $d $e $f";
        $sql="INSERT INTO `student`(`name`, `email`, `mobile`, `deg`, `Q_1`, `Q_2`, `Q_3`, `Q_4`, `Q_5`, `Q_6`) VALUES ('$name','$email',$mobile,'deg','$a','$b','$c','$d','$e','$f')";
            if(mysqli_query($db,$sql))
    {
  echo "<br/>sucess";
 header("Location: ty.html");
    } 
    else
    {
    echo " <br/>not inserted , $sql";
    }
  	}
?>