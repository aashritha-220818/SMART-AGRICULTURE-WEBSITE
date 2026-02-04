<?php
 $conn = mysqli_connect("localhost","root","","logindb");
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
    }
echo "Connected successfully";
$username=$_POST['username'];
$password=$_POST['password'];
$sql = "SELECT * FROM log where username='$username' AND password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    echo "login successful";
}
else{
    echo "invalid username or password";
}
    
    ?>