<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConvoConnect - Sign In & Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- Sign In -->
                <form action="login.php" method="post" class="sign-in-form">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uname" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pass" placeholder="Password" required>
                    </div>
                    <input type="submit" value="Login" class="btn solid">
                    <p class="social-text">Or Sign In with Social Media</p>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-google"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </form>

                <!-- Sign Up -->
                <form action="signup.php" method="post" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uname" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pass" placeholder="Password" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <input type="submit" value="Sign Up" class="btn solid">
                    <p class="social-text">Or Sign Up with Social Media</p>
                    <div class="social-media">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-google"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Add these panels for toggling between Sign In and Sign Up -->
        <div class="panel left-panel">
            <div>
                <h3>One of us?</h3>
                <p>If you already have an account, just sign in!</p>
                <button class="btn transparent sign-up-btn">Sign In</button>
            </div>
        </div>
        <div class="panel right-panel">
            <div>
                <h3>New here?</h3>
                <p>Sign up and discover great opportunities!</p>
                <button class="btn transparent sign-in-btn">Sign Up</button>
            </div>
        </div>
    </div>

    <script>
        const container = document.querySelector('.container');
        const signUpBtn = document.querySelector('.sign-up-btn');
        const signInBtn = document.querySelector('.sign-in-btn');

        signUpBtn.addEventListener('click', () => {
            container.classList.add('sign-up-mode');
        });

        signInBtn.addEventListener('click', () => {
            container.classList.remove('sign-up-mode');
        });
    </script>
</body>
</html>
