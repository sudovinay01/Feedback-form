<?php
	$output="";
	$connect = mysqli_connect("localhost", "root", "", "peer");
	if(isset($_POST["s"]))
	{
$query = "SELECT * FROM student";
$query1 = "SELECT * FROM emp";
$query2 = "SELECT * FROM alu";
$query3 = "SELECT * FROM parents";
$query4 = "SELECT * FROM public";
 $result = mysqli_query($connect, $query);
  $result1 = mysqli_query($connect, $query1);
  $result2 = mysqli_query($connect, $query2);
  $result3 = mysqli_query($connect, $query3);
  $result4 = mysqli_query($connect, $query4);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table  border="1" style=" border-collapse: collapse;">
   <tr><td colspan="11"style="color:blue;font-size:20px;text-align:center;">Students</td></tr>
                    <tr>
                         <th>Name</th>
						 <th>email</th>
                         <th>mobile</th>
                         <th>Degree/ Subject Studying</th>
                         <th>Q_1</th>
                         <th>Q_2</th>
                         <th>Q_3</th>
                         <th>Q_4</th>
                         <th>Q_5</th>
                         <th colspan="2">Q_6</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
                         <td>'.$row["name"].'</td>
						 <td>'.$row["email"].'</td>
                         <td>'.$row["mobile"].'</td>
                         <td>'.$row["deg"].'</td>
                         <td>'.$row["Q_1"].'</td>
                         <td>'.$row["Q_2"].'</td>
                         <td>'.$row["Q_3"].'</td>
                         <td>'.$row["Q_4"].'</td>
                         <td>'.$row["Q_5"].'</td>
                         <td colspan="2">'.$row["Q_6"].'</td>
                    </tr>
   ';
  }
    $output .= '

   <tr><td colspan="11"style="color:blue;font-size:20px;text-align:center;">Employers</td></tr>
                    <tr>
                         <th>Name</th>
             <th>email</th>
                         <th>mobile</th>
                         <th>Degree/ Subject Studying</th>
                         <th>Q_1</th>
                         <th>Q_2</th>
                         <th>Q_3</th>
                         <th>Q_4</th>
                         <th colspan="3">Q_5</th>
                      </tr>
  ';
  while($row1 = mysqli_fetch_array($result1))
  {
   $output .= '
    <tr>
                         <td>'.$row1["name"].'</td>
             <td>'.$row1["email"].'</td>
                         <td>'.$row1["mobile"].'</td>
                         <td>'.$row1["deg"].'</td>
                         <td>'.$row1["Q_1"].'</td>
                         <td>'.$row1["Q_2"].'</td>
                         <td>'.$row1["Q_3"].'</td>
                         <td>'.$row1["Q_4"].'</td>
                         <td colspan="3">'.$row1["Q_5"].'</td>
                        
                    </tr>
   ';
  }
   $output .= '

   <tr><td colspan="11"style="color:blue;font-size:20px;text-align:center;">Alumini</td></tr>
                    <tr>
                         <th>Name</th>
             <th>email</th>
                         <th>mobile</th>
                         <th>Degree/ Subject Studying</th>
                         <th>Q_1</th>
                         <th>Q_2</th>
                         <th>Q_3</th>
                         <th>Q_4</th>
                         <th>Q_5</th>
                         <th>Q_6</th>
                         <th>Q_7</th>
                      </tr>
  ';
  while($row2 = mysqli_fetch_array($result2))
  {
   $output .= '
    <tr>
                         <td>'.$row2["name"].'</td>
                          <td>'.$row2["email"].'</td>
                         <td>'.$row2["mobile"].'</td>
                         <td>'.$row2["deg"].'</td>
                         <td>'.$row2["Q_1"].'</td>
                         <td>'.$row2["Q_2"].'</td>
                         <td>'.$row2["Q_3"].'</td>
                         <td>'.$row2["Q_4"].'</td>
                         <td>'.$row2["Q_5"].'</td>
                        <td>'.$row2["Q_6"].'</td>
                        <td>'.$row2["Q_7"].'</td>
                    </tr>
   ';
  }
  $output .= '

   <tr><td colspan="11"style="color:blue;font-size:20px;text-align:center;">PARENTS</td></tr>
                    <tr>
                         <th>Name</th>
             <th>email</th>
                         <th>mobile</th>
                         <th>Degree/ Subject Studying</th>
                         <th>Q_1</th>
                         <th>Q_2</th>
                         <th>Q_3</th>
                         <th>Q_4</th>
                         <th colspan="3">Q_5</th>
                    
                      </tr>
  ';
  while($row3 = mysqli_fetch_array($result3))
  {
   $output .= '
    <tr>
                         <td>'.$row3["name"].'</td>
                          <td>'.$row3["email"].'</td>
                         <td>'.$row3["mobile"].'</td>
                         <td>'.$row3["deg"].'</td>
                         <td>'.$row3["Q_1"].'</td>
                         <td>'.$row3["Q_2"].'</td>
                         <td>'.$row3["Q_3"].'</td>
                         <td>'.$row3["Q_4"].'</td>
                         <td colspan="3">'.$row3["Q_5"].'</td>
              
                    </tr>
   ';
  }
    $output .= '

   <tr><td colspan="11"style="color:blue;font-size:20px;text-align:center;">PUBLIC </td></tr>
                    <tr>
                         <th>Name</th>
             <th>email</th>
                         <th>mobile</th>
                         <th>Degree/ Subject Studying</th>
                         <th>Q_1</th>
                         <th>Q_2</th>
                         <th>Q_3</th>
                         <th>Q_4</th>
                         <th colspan="3">Q_5</th>
                    
                      </tr>
  ';
  while($row4 = mysqli_fetch_array($result4))
  {
   $output .= '
    <tr>
                         <td>'.$row4["name"].'</td>
                          <td>'.$row4["email"].'</td>
                         <td>'.$row4["mobile"].'</td>
                         <td>'.$row4["deg"].'</td>
                         <td>'.$row4["Q_1"].'</td>
                         <td>'.$row4["Q_2"].'</td>
                         <td>'.$row4["Q_3"].'</td>
                         <td>'.$row4["Q_4"].'</td>
                         <td colspan="3">'.$row4["Q_5"].'</td>
              
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
	}
	?>