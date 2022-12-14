<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="wrapper">
        <div class="title-text">
        <img id="login-logo"src="Socials.png" alt="logo">
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <label for="login" class="slide login">WELCOME!</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form action="login.php" method="POST" class="login">
                    <div class="field">
                        <p>Email Address</p>
                        <input type="text" name="email_address" placeholder="Enter your email" required>
                    </div>
                    <br>
                    <div class="field">
                        <p>Password</p>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <br>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Log in" name="login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
    </script>
</body>

</html>
