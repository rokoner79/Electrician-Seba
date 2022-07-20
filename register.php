<html>
<head>
<link rel="stylesheet" href="style.css"/>
</head>

<body>
<ul> 
<li><a href="index.php">Home</a></li>
<li><a href="search.php">Search an electrisian</a></li>
<li><a href="register.php">Register as an electrisian</a></li>
<li><a href=" ">Contact us</a></li> <br>
</ul>

</body>

</html>

<html>
<body>
<h1> Welcome for registetion </h1>
<form action="register.php" method="POST">
<input type="text" name="username" placeholder="username">
<input type="text" name="email" placeholder="enter email">
<input type="text" name="password" placeholder="enter password">
<input type="text" name="contact" placeholder="enter contact number">
<input type="text" name="thana" placeholder="enter your thana">

<button name="submit">Register as an electrician</button>
</form>
</body>
</html>
<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
{
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$thana = $_POST['thana'];
$select="SELECT * FROM information where email='$email'";
$sql=mysqli_query($conn,$select);
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else
{
$query="INSERT INTO information(username,email,password,contact,thana) VALUES ('$username', '$email', '$password','$contact','$thana')";
$sql=mysqli_query($conn,$query);
}
}
?>
<?php
include'footer.php'; 
?>