<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>

<body> 
            <div class="animation-text">
            <h2 data-text="GamingHub">GamingHub</h2>
            <h3 data-text="Welcome to our Gaming Haven!Join Us To Enjoy Our Games">Welcome to our Gaming Haven!Join Us To Enjoy Our Games</h3>
            <!-- <h4 data-text="Anything u can write here whatever you want to write and read yourself">Anything u can write here whatever you want to write and read yourself</h4> -->
            
            </div>
            <div class="btn-container">

                <a href="#wrapper" class="btn2">JOIN US</a>
            </div>

            <div class="wrapper" id="wrapper">
                <span class="icon-closed">
                    <ion-icon name="close-outline"></ion-icon>
                </span>
        
        
                <div class="login-box">
                    <h2>Login</h2>
                    <form action="loginAction.php" method="post">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input pattern="[a-z0-9 .]{2,}$" title="example 'chinmoy007'" name="l_username"  type="text" class="username" id="username" required >
                            <label>username</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input   pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&-+=()]).{6,20}" title="contain 1 digit 1 uppercase 1 lowercase 1 special charecter
                            minimum 6 length" name="l_pass"  type="password" class="password" id="password"  required>
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type ="checkbox">Remember me
                            </label>
                            <a href="#">Forgot Password</a>
                        </div>
                        <input href="" type="submit" value="Login" class="stop" id="submit"></a>
                        <div class="login-register">
                            <p>Don't Have Account?<a href="#wrapper" class="register-link">Register</a></p>
                        </div>
                    </form>
                </div>
        
        
                <div class="register-box">
                    <h2>Registration</h2>
                    <form action="registerAction.php" method="post">
                        <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input type="text" pattern="^(?=.*[a-z])(?=.*[0-9]).{5,10}"  name="r_username" class="r_username" id="r_username" title="Contain of lowercase and number minimum 5 characters" required>
                            <label>Username</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="r_email" class="r_email" id="r_email" title="example 'mug007@gmail.com'" type="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input  pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&-+=()]).{6,20}" name="r_pass" class="r_password" id="r_password" title="contain 1 digit 1 uppercase 1 lowercase 1 special characters
                            minimum 6 length" type="password" required>
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type ="checkbox">I am agree to term & condition
                            </label>
                        </div>
                        
                        <!-- <a href="OTP.html" onclick="sendOTP()" type="submit" value="Register" class="stop" id="submit">Register</a> -->
                        <input  type="submit" value="Register" class="stop" id="submit">
                        <!-- <button onclick="sendOTP()">Register</button> -->
            
                        <div class="login-register">
                            <p>Already have an account?<a href="#wrapper" class="login-link">Login</a></p>
                        </div>
                    </form>
                </div>
             </div>
             <div>


             <script src="script.js"></script>
             <script src="OTP-Script.js"></script>
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionico

</body>
</html>