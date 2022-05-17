
<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medical";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
    <?php 
    
    if(isset($_POST['signup'])){


    $name=$_POST['firstname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $num=$_POST['mobileno'];
    $answer=$_POST['answer'];
    $sql = "INSERT INTO users (name,email,password,number,answer )
VALUES ('$name', '$email', '$password','$num','$answer')";

if (mysqli_query($conn, $sql)) {
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);}

?>

    
    
    
<div style="background-color:#41aaa2; height:500px; width:400px; border-radius:30px; text-align:center;" class="col-md-offset-4">
<h1 style="text-align:center; padding-top:30px; color:#ffffff;">Sign Up</h1>
<form  action="" method="post">
<div class="col-sm-12" style="padding-top:10px;">
<input type="text" class="form-control" id="firstname" placeholder="Full Name" name="firstname" style="border-radius:15px;">
</div>
<!-- <div class="col-sm-12" style="padding-top:10px;">
<input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" style="border-radius:15px;">
</div> -->
<div class="col-sm-12" style="padding-top:10px;">
<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="border-radius:15px;">
</div>
<div class="col-sm-12" style="padding-top:10px;">
<input type="text" class="form-control" id="mobileno" placeholder="Enter Mobile No." name="mobileno" style="border-radius:15px;">
</div>
<div class="col-sm-12" style="padding-top:10px;">
<input type="text" class="form-control" id="password" placeholder="Type your Password" name="password" style="border-radius:15px;">
</div>

<div class="col-sm-12" style="padding-top:10px;">
<input type="text" class="form-control" id="password" placeholder="Retype your Password" name="password" style="border-radius:15px;">
</div>
<div class="col-sm-12" style="padding-top:10px;"
style="padding-left:20px;">
<label for="question" >Choose a Secret question:</label>
<select name="Secret question" id="question"style="border-radius:15px; width:150px; height: 34px;">
    <option value="fathername">father name
    </option> 
    </div>
  </select>
  <div class="col-sm-12" style="padding-top:10px;">
  <input type="text" class="form-control" id="answer" placeholder="Answer" name="answer" style="border-radius:15px;">
  </div>
  <button class="col-md-4 col-md-offset-4 btn" style="background-color:#ffffff; color:#626a69; font-size:20px; margin-top:10px;" type="submit" name="signup"> Sign Up
</button>
<br></br>
<br></br>
<br></br>
 <a href="./login.php">Login Now!</a>
</div>

</form>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</body>
</html>