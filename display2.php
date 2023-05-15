<?php
session_start();
echo "Welcome " . $_SESSION['user_name'];
?>

<html>
    <head>
        <title>Display

</title>
<script src="ajax.js"></script>

<style>
    body{
        background:#d071f9;
    }
table{
    background-color:white;
}
.update,.delete{
    background:green;
    color:white;
    border:0;
    outline:none;
    border-radius:5px;
    height:22px;
    width:80px;
    font-weight:bold;
    cursor:pointer;
}
.delete{
    background:red;
}
</style>
    </head>

    </html>
<?php
include("connection3.php");
$query="SELECT * FROM `form`";
$data=mysqli_query($con,$query);
$total= mysqli_num_rows($data);

echo $total;



if($total !=0){
    ?>
<h2 align="center"><mark>Displaying All Records</mark></h2>
<center><table border="1" cellspacing="7" width="100%" class="table" id="table-container">
    <tr>
    <th width="5%">ID</th>
    <th width="8%">Location</th>
    <th width="8%">Locations</th>
    <th width="10%">Duration</th>
    <th width="10%">Rating</th>
    <th width="7%">Pace</th>
    <th width="3%">Checklist</th>

</tr>


<?php
  while($result=mysqli_fetch_assoc($data))
  {
    echo "<tr>
    <td>".$result['id']."</td>

    <td>".$result['location']."</td>
    <td>".$result['locations']."</td>
    <td>".$result['duration']."</td>
    <td>".$result['options']."</td>
    <td>".$result['r2']."</td>
    <td>".$result['rr']."</td>

    <td>
    <td><a href='view1.php?id=$result[id]'><input type='submit' value='View' class='update'></a>
    </td>


</tr>";

  }
}
else{
    echo "no records found";
}
?>

</table></center>

