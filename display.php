<?php
include("conn.php");

$query= "SELECT *FROM first";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);
//echo $total;

if($total!=0)
{
	?>
	<h3>PASSWOED MANAGER<h3>
	<table border="3px">
	<tr>
	<th>sno</th>
	<th>name_name</th>
	<th>password</th>
	</tr>
	
	
	
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
echo "<tr>
<td>".$result['sno']  ."</td>
<td>".$result['name']  ."</td>
<td>".$result['city']  ."</td>

 </tr>";
}
}
else
{
	echo "record not found";
}
?>
</table>
<style>
table{
background-color:black;
}
th{
color:red;}
td{color:green;}

h3{
	background-color:black;
text-align:center;
color:green;
box-shadow:7px 5px 4px 2px blue;
padding:33px;
}

</style>