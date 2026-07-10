<?php
// Footer page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
.footer{
background:#fff;
padding-top:20px;
}

.footer-container{
background:#2B2B2B;
border-radius:30px 30px 0 0;
padding:45px 25px;
color:#fff;
overflow:hidden;
}

.footer-grid{
display:grid;
grid-template-columns:1.35fr .6fr .55fr;
gap:60px;
align-items:flex-start;
}

.footer-heading{
font-family:"Roketto",sans-serif;
font-size:26px;
font-weight:400;
margin-bottom:20px;
}

.footer-about-text{
font-size:14px;
line-height:1.7;
color:#E5E5E5;
margin-bottom:28px;
}

.footer-email h4{
font-size:16px;
margin-bottom:8px;
font-weight:500;
}

.footer-email a{
color:#E5E5E5;
font-size:15px;
transition:.3s;
}

.footer-email a:hover{
color:#fff;
}

.footer-social{
display:flex;
gap:10px;
margin-top:28px;
}

.footer-social a{
width:35px;
height:35px;
border-radius:50%;
display:flex;
justify-content:center;
align-items:center;
font-weight:bold;
color:#fff;
transition:.3s;
text-decoration:none;
}

.footer-social a:hover{
transform:translateY(-4px);
}

.facebook{
background:#1877F2;
}

.instagram{
background:linear-gradient(45deg,#833AB4,#FD1D1D,#FCAF45);
}

.linkedin{
background:#0A66C2;
}

.twitter{
background:#000;
}

.footer-links ul{
padding:0;
margin:0;
list-style:none;
}

.footer-links li{
margin-bottom:14px;
}

.footer-links a{
color:#E5E5E5;
font-size:15px;
transition:.3s;
text-decoration:none;
}

.footer-links a:hover{
color:#fff;
padding-left:8px;
}

.footer-image{
display:flex;
justify-content:center;
align-items:flex-end;
}

.footer-image img{
width:220px;
object-fit:contain;
}

.footer-wave{
margin-top:45px;
}

.footer-wave img{
width:100%;
height:10px;
object-fit:fill;
}

.footer-bottom{
margin-top:25px;
display:flex;
justify-content:space-between;
align-items:center;
gap:20px;
flex-wrap:wrap;
}

.footer-policy{
display:flex;
gap:25px;
flex-wrap:wrap;
}

.footer-policy a{
font-size:15px;
font-weight:600;
color:#fff;
transition:.3s;
text-decoration:none;
}

.footer-policy a:hover{
color:#ddd;
}

.footer-bottom p{
max-width:520px;
text-align:right;
font-size:14px;
font-weight:600;
line-height:1.6;
color:#fff;
margin:0;
}

/* Responsive */

@media(max-width:991px){
.footer-grid{
grid-template-columns:1fr 1fr;
}

.footer-image{
display:none;
}
}

@media(max-width:768px){
.footer-container{
padding:35px 20px;
}

.footer-grid{
grid-template-columns:1fr;
gap:35px;
}

.footer-bottom{
flex-direction:column;
align-items:flex-start;
}

.footer-bottom p{
text-align:left;
font-size:13px;
}

.footer-policy{
gap:15px;
}

.footer-heading{
font-size:24px;
}

.footer-about-text{
font-size:13px;
}
}
    </style>
</head>

<body>

<footer class="footer">
    <div class="footer-container">

        <div class="footer-grid">

            <!-- About -->
            <div class="footer-about">
                <h2 class="footer-heading">
                    About Company.
                </h2>

                <p class="footer-about-text">
                    The only exam in India that incorporates financial literacy from
                    Class 1 to Class 10 is Fin Edu Quest, which helps prepare the
                    next generation for a safe and fulfilling future. EMPOWERING
                    FINANCIAL LITERACY.
                </p>

                <div class="footer-email">
                    <h4>Email Address</h4>

                    <a href="mailto:fineduquest@gmail.com">
                        fineduquest@gmail.com
                    </a>
                </div>

                <div class="footer-social">
                    <a href="#" class="facebook">f</a>
                    <a href="#" class="instagram">◎</a>
                    <a href="#" class="linkedin">in</a>
                    <a href="#" class="twitter">X</a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-links">
                <h2 class="footer-heading">
                    Quick Links
                </h2>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="About.php">About Us</a></li>
                    <li><a href="Program.php">Program</a></li>
                    <li><a href="Gallery.php">Gallery</a></li>
                    <li><a href="Blog.php">Blog</a></li>
                </ul>
            </div>

            <!-- Mascot -->
            <div class="footer-image">
                <img src="../assets/images/book-mascot.png" alt="Mascot">
            </div>

        </div>

        <div class="footer-wave">
            <img src="../assets/images/wave-line.png" alt="Wave">
        </div>

        <div class="footer-bottom">

            <div class="footer-policy">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
            </div>

            <p>
                Copyright © <?php echo date("Y"); ?> Financial Education Quest.
                All Rights Reserved.
                Designed by adbornsolutions.
            </p>

        </div>

    </div>
</footer>

</body>
</html>
