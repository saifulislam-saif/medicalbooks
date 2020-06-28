<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no" />
    <meta name="description" content="MedicalBooks is best online medical platform of Bangladesh" />
    <meta name="keywords" content="Medical, Books, Online, FCPS, BCPS, Last Hour" />
    <meta name="author" content="GENESIS" />

    <!-- Refresh -->
    <meta http-equiv="refresh" content="1800" />

    <title>MedicalBooksOnline.Net</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/loginpage.css">

</head>

<body>
    <div class="body">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()" action="">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form method="POST" action="home.php" id="login" class="input-group">
                <input type="email" class="input-field" name="email" placeholder="Email" required>
                <input type="password" class="input-field password-field" name="password" placeholder="Password" required>
                <span toggle=".password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                <input type="checkbox" class="check-box"><span>Remember Me</span>
                <button type="submit" class="submit-btn">Log In</button>
                <a href="#" class="forgot_text">Forgot password?</a>
            </form>
            <form method="POST" action="" id="register" class="input-group">
                <input type="text" id="name" class="input-field" placeholder="Full Name" name="name" value="" required>
                <input type="email" id="email" class="input-field" placeholder="E-mail" name="email" value="" required>
                <input type="text" id="phone_number" class="input-field" placeholder="Mobile Number" name="phone_number" value="" required>
                <input type="password" id="password" class="input-field password-field-r" placeholder="Password" name="password" required>
                <span toggle=".password-field-r" class="fa fa-fw fa-eye field-icon toggle-password-r"></span>
                <input id="password-confirm" type="password" class="input-field password-field-r" placeholder="Confirm Password" name="password_confirmation" required>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>

    <!-- jQuery link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        const x = document.getElementById('login')
        const y = document.getElementById('register')
        const z = document.getElementById('btn')

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

        $(".toggle-password-r").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });

    </script>
</body>

</html>
