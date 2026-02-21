<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wesline Navigation System</title>
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
                <li><a href="#contact us">Contact Us</a></li>
            </ul>
        </div>

        <div class="nav-right">
            <div class="hamburger" id="navToggle">
                <i class="fa-solid fa-bars"></i>
            </div>
            
            <ul class="subject-menu" id="subjectMenu">
                <li><a href="math.php">Math</a></li>
                <li><a href="english.php">English</a></li>
                <li><a href="khmer.php">Khmer</a></li>
                <li><a href="physics.php">Physics</a></li>
            </ul>
        </div>
    </nav>

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