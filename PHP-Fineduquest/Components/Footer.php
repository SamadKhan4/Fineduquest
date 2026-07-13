<?php
$currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Component</title>
    <style>
        <?php include __DIR__ . '/footer-styles.css'; ?>
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-about">
                    <h2 class="footer-heading">About Company.</h2>
                    <p class="footer-about-text">
                        The only exam in India that incorporates financial literacy from Class 1 to Class 10 is Fin Edu Quest, which helps prepare the next generation for a safe and fulfilling future. EMPOWERING FINANCIAL LITERACY
                    </p>
                    <div class="footer-email">
                        <h3>Email Address</h3>
                        <a href="mailto:fineduquest@gmail.com">fineduquest@gmail.com</a>
                    </div>
                    <div class="footer-social">
                        <a href="#" class="facebook" aria-label="Facebook">f</a>
                        <a href="#" class="instagram" aria-label="Instagram">◎</a>
                        <a href="#" class="linkedin" aria-label="LinkedIn">in</a>
                        <a href="#" class="twitter" aria-label="X">X</a>
                    </div>
                </div>

                <nav class="footer-links" aria-label="Footer navigation">
                    <h2 class="footer-heading">Quick Links</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="About.php">About Us</a></li>
                        <li><a href="Program.php">Program</a></li>
                        <li><a href="Fineduquest.php">School</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="Blog.php">Blog</a></li>
                    </ul>
                </nav>

                <div class="footer-image">
                    <img src="../assets/images/book-mascot.png" alt="Student reading a book">
                </div>
            </div>

            <div class="footer-wave">
                <img src="../assets/images/wave-line.png" alt="">
            </div>

            <div class="footer-bottom">
                <div class="footer-policy">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms &amp; Conditions</a>
                </div>
                <p>Copyright &copy; <?php echo $currentYear; ?> Financial Education Quest. All Rights Reserved. Designed by adbornsolutions.</p>
            </div>
        </div>
    </footer>
</body>
</html>
