<!DOCTYPE html>

<html>

<head>
    <title>
        Login and registration Form
    </title>
    <link rel="stylesheet" href="../gyn/style.css">
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form id="login" class="input-group" method="post" action="userlogin.php">
                <input type="text" name="uemail" class="input-field" placeholder="Email Id" required>
                <input type="password" name="upassword" class="input-field" placeholder="Enter password" required>
                <input type="checkbox" class="chech-box"> <span> Remember Password</span>
                <button type="submit" class="submit-btn"> Log In </button>
            </form>
            <form id="register" method="post" action="register.php" class="input-group">
                <input type="text" name="uname" class="input-field" placeholder="Your Full Name" required>
                <input type="number" name="ucontact" class="input-field" placeholder="Phone Number" required>
                <input type="date" name="udob" class="input-field" placeholder="Date Of Birth" required>
                <input type="email" name="uemail" class="input-field" placeholder="Email" required>
                <input type="password" name="upassword" class="input-field" placeholder="password" required>
                <input type="text" name="ugender" class="input-field" placeholder="Gender" required>
                <input type="text" name="uaddress" class="input-field" placeholder="Address" required>
                <input type="checkbox" class="chech-box"> <span> I agree to the term & conditions </span>
                <button type="submit" class="submit-btn"> Register </button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
</body>

</html>