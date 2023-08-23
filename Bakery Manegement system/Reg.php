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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js">
</script> 



</head>
<body>
<section class="bg-light" style="height: 180%;"id="section2" >
         <div class="container pt-5">
            
             <div class=" row mt-4 mt-4">
                 <div class="col-md-7 offset-md-3">
                     <form method="POST" class="shadow-lg p-4"style="width: 80%;margin-left: 30px; margin-top: 10px; margin-left: 10px;">
                        <h2 class="text-center">Create an Account</h2>
                        <?php
                        if(isset($_SESSION['status']))
                        {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!    </strong><?php echo $_SESSION['status']; ?> 
                            </div>
                        <?php
                            unset($_SESSION['status']);
                        }
                      ?>
                         
                        <div class="form-group">
                             <i class="fa fa-user"></i><label for="name" class="font-weight-bold" pl-2>Name</label><input type="text"
                              class="form-control" placeholder="Name" name="rname" required>
                         </div>

                         <div class="form-group">
                            <i class="fa fa-envelope"></i><label for="email" class="font-weight-bold" pl-2>Email</label><input type="email"
                             class="form-control" placeholder="Email" name="emailname" required>
                             <small class="form-text">We'll never share your email with anyone else. </small>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-phone"></i><label for="name" class="font-weight-bold" pl-2>Mobile No</label><input type="text"
                             class="form-control" placeholder="Mobile no." name="phno" maxlength="10" required>
                        </div>


                        
                        <div class="form-group">
                            <i class="fa fa-key"></i><label for="pass" class="font-weight-bold" pl-2>Password</label><input type="password"
                             class="form-control" placeholder="Password" name="pass" required>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-key"></i><label for="pass" class="font-weight-bold" pl-2>Conform Password</label><input type="password"
                             class="form-control" placeholder="Conform Password" name="c_pass" required>
                        </div>
                        <div class="form-group">
                            <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                        </div>
                        <button type="submit" class="btn btn-danger mt-3 btn-block shadow-sm font-weight-bold" name="sb">Sign Up</button>
                        <em style="font-size: 10px;">Note - By clicking sign-up, you agree to our teams, data policy and cookie policy</em>
                     </form>
                 </div>
             </div>
         </div>
        </section>
		</body>
		</html>