<?php 
session_start();
$c=mysqli_connect("localhost","root","");
mysqli_select_db($c,"demo");
if(isset($_POST["lg"]))
{
$name = $_POST["name"];
$password = $_POST["password"]; 
$a=mysqli_query($c,"select * from signup where name like '$name' and password like '$password'");
if(mysqli_num_rows($a)>0)
{
    header("Location: userprofile.php");
}
else
	echo "Incorrect Data"; 



}
?>


<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>User Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 



</head>
<body>
    <div class="text-center mt-5" style="font-size: 30px;">
    
        <span>Lornie's Bakery</span>
    </div>
    
        <p class="text-center text-danger" style="font-size: 30px;">User Login</p>
        <div class="container fluid">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-4">
                    <form method="POST" class="shadow-lg p-4">
                        <div class="form-group">
                            <i class="fa fa-envelope"></i><label for="email" class="font-weight-bold" pl-2>Username</label><input type="text"
                             class="form-control" placeholder="Username" name="name" required>
                             <small class="form-text">We'll never share your email with anyone else. </small>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-key"></i><label for="password" class="font-weight-bold" pl-2>Password</label><input type="password"
                             class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-danger mt-3 btn-block shadow-sm font-weight-bold" name="lg"><a href="" style="color: white;text-decoration: none;">Login</a></button>
					 <button type="submit" class="btn btn-danger mt-3 btn-block shadow-sm font-weight-bold" name="lg"><a href="Reg.php" style="color: white;text-decoration: none;">Create new account</a></button>

<?php
if(isset($msg))
{
    echo $msg;
}
?>
                    </form>
                </div>
            </div>
        </div>

    </form>
</body>
</html>