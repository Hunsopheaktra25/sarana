<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Wesline Navigation System</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-left">
            <div class="logo">Welcome To Wesline</div>
        </div>
        <div class="nav-center">
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <div class="hamburger" id="navToggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            <ul class="subject-menu" id="subjectMenu">
                <li><a href="math.php">Math</a></li>
                <li><a href="english.php">English</a></li>
                <li><a href="#khmer">Khmer</a></li>
                <li><a href="physics.php">Physics</a></li>
            </ul>
        </div>
    </nav>

    <div class="login-container">
        <div class="login-box">
            <h1><i class="fa-solid fa-lock"></i> Login</h1>
            
            <div id="errorMessage" class="error-message"></div>
            <div id="successMessage" class="success-message"></div>

            <form id="loginForm" method="POST">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <button type="submit" class="login-btn">Login</button>

                <div class="form-options">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                    <a href="#forgot-password">Forgot Password?</a>
                </div>
            </form>

            <div class="form-options">
                Don't have an account? <a href="#signup">Sign Up Here</a>
            </div>
        </div>
    </div>

    <script>
        
        const navToggle = document.getElementById('navToggle');
        const subjectMenu = document.getElementById('subjectMenu');

        navToggle.addEventListener('click', (e) => {
            e.stopPropagation(); 
            subjectMenu.classList.toggle('active'); 
        });

        document.addEventListener('click', (e) => {
            if (!navToggle.contains(e.target) && !subjectMenu.contains(e.target)) {
                subjectMenu.classList.remove('active');
            }
        });
    </script>
</body>
</html>