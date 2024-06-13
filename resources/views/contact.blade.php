<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="asset/shees.css">
</head>
<body>
    <header>
        <div class="header-logo">My<span>Portfolio</span></div>
        <nav>
            <ul class="nav-list">
                <li><a href="home.blade.php">Home</a></li>
                <li><a href="about.blade.php">About</a></li>
                <li><a href="achievement.blade.php">Achievement</a></li>
                <li><a href="projects.blade.php">Projects</a></li>
            </ul>
        </nav>
    </header>
    <section class="contact">
        <h1>Contact</h1>
        <form action="#contact" method="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>
            <input type="submit" value="Send">
        </form>
    </section>
    <footer>
        <p>&copy; 2024 Mumtaz. All rights reserved.</p>
    </footer>
</body>
</html>
