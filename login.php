
<div id = "login" class = "tab-pane fade">
    <?php
        if (isset($_POST['submit']))
        { 
            $dbconn = mysqli_connect('localhost','root','','db_issm');    
            //include("config.php");
            session_start();
            $reg_no = $_POST['reg_no'];
            $password = $_POST['password'];            
            $_SESSION['reg_no']=$reg_no; 
            $query = mysqli_query($dbconn, "SELECT * FROM register_users WHERE reg_no=' $reg_no' and password='$password'");
            if (mysqli_num_rows($query) > 0)
            {
                echo "<script language='javascript' type='text/javascript'> location.href='success.php' </script>";   
            }
            else
            {
                echo "<script type='text/javascript'>alert('Reg No Or Password Invalid!')</script>";
            }
        }
        
        ?>
    <div class="container">
        <div class="row" id="pwd-container">
            <div class="col-md-8">
                <section class="login-form">
                    <form method="post" action="dashboard.php" role="login">
                        <img src="img/icho.jpg" class="img-responsive" alt="" />
                        <input type="text" name="reg_no" placeholder="Enter registration number" required class="form-control input-lg" value="" />
                        <br>
                        <br>
                        <input type="password"  name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
                        <br>
                        <br>
                        <input type="checkbox" name="remember" id="remember" <?php echo isset($_COOKIE['reg_no']) ? 'checked' : ''; ?>>
  <label for="remember">Remember me</label>
  <br>
  <br>

                 <div class="pwstrength_viewport_progress"></div>
                        <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Log In" >Log in</button>
                        <br>
                        <br>
                        <div>
                            <a href="Lecturer/login.php">Lecturer</a> | <a href="Supervisor/login.php">Supervisor</a> | <a href="Lecturer/reset_password.php">Reset Password</a>
                        </div>
                    </form>
                </section>  
            </div>
            <div class ="col-md-4"></div>
        </div>
    </div>
    