<?php
session_start();
if(isset($_SESSION["loggedin"])){
    
    header("location: usershomepage.php ");
}
else{
    
}
?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<div class="amazon-logo col-lg-1 col-md-1 col-sm-1 container mt-3">
        <img class="" style="width:120px; height: 40px;"
            src="https://www.marketplace.org/wp-content/uploads/2019/07/ama2.png?resize=740%2C204">
    </div>

    <div class="signin-box col-lg-3 col-md-6 col-sm-6 container mt-3 p-4" style="border:1px solid #e4e4e4;">

        <h4>Login to account</h4>

        
        <form method="get" action="validate-user-live.php" class="mb-1">

        <p class="mb-0 mt-3">Email or Number</p>
            <input type="email" name="username" class="form-control" required>
            <p class="mb-0">Password</p>
            <input type="password" name="password" class="form-control" required>

          <button type="submit" class="btn w-100 h-0 mt-3"
                style="background-color: #fdcd43; border: 1px solid gray;">Login</button>
        
        </form>

       
        <p class="mb-0"> (or) Signup for new account:</p>
              <form action="/signup.php" class="mb-0">
              <button type="submit" class="btn w-100 h-0 mt-1 mb-3"
                      style="background-color: #fdcd43; border: 1px solid gray;">SignUp</a></button> 
                      </form>
              
   



        <h6>By continuing, you agree to Amazon's
            <a style="text-decoration-line:none;" href="#">Conditions of Use</a> and <a
                style="text-decoration-line:none;" href="#">Privacy</a> Notice.
        </h6>
        <h6 class="mt-4">
            <a style="text-decoration-line:none;" href="#">▸Need Help?</a>
        </h6>
        </div>
   


