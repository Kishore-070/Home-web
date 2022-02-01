<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="authenticaton.css">
    <title>Authentication page</title>
</head>
<body>
    <div class="full">
        <div id="left">
        </div>
        <div id="right">
             
                 <div>
                 <h1 class="h11">Welcome<br>Back.</h1>
                 <p class="p1" >Lorem ipsum dolor amet</p>
                 </div>
                 <br><br>
                 <form action="Loginpg.php" method="POST">
                 <div>
                     <input class="eme" type="email" name="user" placeholder="Email" required>
                 </div>
                 <br>

                 <div>
                    <input class="pass1" type="password" name="password" placeholder="Password" required>
                </div>

                <div>
                    <a href="" class="forpass">Forgot password</a>
                </div>

                <div>
                    <input class="butn" type="submit" value="Login">
                </div>
            <div>
                <p class="t1">Don't have an account?</p> <a href="#" class="but" onclick="Register()">Register now</a>
            </div>

             </form>
        </div>
    </div>

    <div id="full1">
        <div id="left1">
            <img id="pp1" src="images/regwel2.gif">
            <img id="pp2" src="images/regwel1.gif">
            <img id="pp3" src="images/regbut.png">
            <img id="pp4" src="images/regwel.gif">
        </div>
        <section id="right1">
                 <div>
                 <h1 class="h111">Create an<br>Account</h1>
                 <p class="p11" >Lorem ipsum dolor amet</p>
                 </div>
                 <br><br>
                 <form action="Registerpg.php" method="POST">
                 <div>
                     <input class="eme1" type="email" name="user" placeholder="Email" required>
                 </div>
                 <br>

                 <div>
                    <input class="pass11" type="password" name="password" placeholder="Password" required>
                </div>
                <br>
                <div>
                    <input class="pass21" type="password" placeholder="Confirm Password" required>
                </div>
                  <br>
                <div>
                    <input id="chk1" type="checkbox" required>
                    <label style="color: rgb(123, 92, 187);">You agree to our terms of service and privacy policy</label>
                </div>
                 <br>
                <div>
                    <input class="butn1" type="submit" value="Register">
                </div>

                <div>
                    <p class="t11">Already have an account?</p> <a href="#" class="but1" onclick="Login()">Login now</a>
                </div>

             </form>
        </div>
    </section>

    <script src="authentication.js"></script>

</body>
</html>

    