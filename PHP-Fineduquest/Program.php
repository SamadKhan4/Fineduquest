<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="icon" type="image/png" href="../assets/images/logo-new.png">
    <!-- Font Awesome (Add once in <head>) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        @font-face {
            font-family: "Roketto";
            src: url("../assets/fonts/rocketto/Rocketto.ttf") format("truetype");
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Roketto";
            src: url("../assets/fonts/rocketto/Rocketto%20Bold.ttf") format("truetype");
            font-weight: 600 900;
            font-style: normal;
            font-display: swap;
        }

        /*==========================
      PROGRAM HERO
==========================*/

*{
box-sizing:border-box;
}

body{
margin:0;
background:#fff;
font-family:Arial, Helvetica, sans-serif;
}

@keyframes heroLeftToCenter{
0%{
opacity:0;
transform:translateX(-100vw);
}

100%{
opacity:1;
transform:translateX(0);
}
}

@keyframes heroRightToCenter{
0%{
opacity:0;
transform:translateX(100vw);
}

100%{
opacity:1;
transform:translateX(0);
}
}

@keyframes floatReverse{
0%,100%{
transform:translateY(0) translateX(0) rotate(0);
}

50%{
transform:translateY(10px) translateX(8px) rotate(-8deg);
}
}

@keyframes pulsePop{
0%,100%{
transform:scale(1);
opacity:1;
}

50%{
transform:scale(1.18) rotate(8deg);
opacity:.85;
}
}

@keyframes spinSoft{
0%,100%{
transform:rotate(0) scale(1);
}

50%{
transform:rotate(18deg) scale(1.15);
}
}

@keyframes twinkle{
0%,100%{
opacity:.45;
transform:scale(.85);
}

50%{
opacity:1;
transform:scale(1.25) rotate(18deg);
}
}

@keyframes fadeUpDelay{
0%{
opacity:0;
transform:translateY(14px);
}

100%{
opacity:1;
transform:translateY(0);
}
}

.hero-left-animate{
opacity:0;
animation:heroLeftToCenter 1.1s ease-out forwards;
}

.hero-right-animate{
opacity:0;
animation:heroRightToCenter 1.1s ease-out forwards;
}

.hero-delay-1{
animation-delay:.2s;
}

.hero-delay-2{
animation-delay:.4s;
}

.hero-delay-3{
animation-delay:.6s;
}

.animate-float-reverse{
animation:floatReverse 4.5s ease-in-out infinite;
}

.animate-pulse-pop{
animation:pulsePop 2.2s ease-in-out infinite;
}

.animate-spin-soft{
animation:spinSoft 3s ease-in-out infinite;
}

.animate-twinkle{
animation:twinkle 2s ease-in-out infinite;
}

.animate-fade-up-delay{
animation:fadeUpDelay .8s ease-out both;
animation-delay:1s;
}

.program-hero{
width:100%;
background:#fff;
overflow:hidden;
}

.program-hero-wrapper{
position:relative;
width:100%;
min-height:0;
display:flex;
justify-content:center;
align-items:flex-start;
padding:42px 40px 58px;
}

.program-hero-box{
position:relative;
width:100%;
max-width:min(1160px, 100%);
aspect-ratio:1145/590;
}

.program-bg{
position:absolute;
left:19%;
top:1%;
z-index:1;
width:63%;
height:auto;
pointer-events:none;
user-select:none;
}

.program-star-big,
.program-arrow,
.program-light,
.program-star-small,
.program-star-right{
position:absolute;
z-index:2;
pointer-events:none;
user-select:none;
}

.program-star-big{
left:2%;
top:5%;
width:42px;
}

.program-arrow{
left:7.5%;
bottom:8%;
width:86px;
}

.program-light{
right:7.2%;
top:44%;
width:62px;
}

.program-star-small{
left:13.2%;
top:27%;
width:24px;
}

.program-star-right{
right:4.5%;
top:7.5%;
width:42px;
}

.program-content{
position:absolute;
left:10%;
top:21%;
z-index:3;
max-width:620px;
}

.program-content h1{
margin:0;
}

.program-content h1 span{
display:block;
font-family:"Arial Black", Arial, Helvetica, sans-serif;
font-size:clamp(58px, 4.2vw, 72px);
font-weight:900;
line-height:1.02;
letter-spacing:0;
color:#000;
}

.program-content h1 .blue{
color:#007BFF;
}

.program-text{
margin:24px 0 0;
max-width:455px;
font-size:20px;
line-height:1.32;
color:#000;
}

@media(max-width:1200px){
.program-hero-box{
max-width:1040px;
}

.program-content h1 span{
font-size:58px;
}

.program-text{
font-size:18px;
max-width:420px;
}
}

@media(max-width:768px){
.program-hero-wrapper{
min-height:0;
padding:36px 14px 28px;
align-items:flex-start;
}

.program-hero-box{
max-width:350px;
aspect-ratio:350/275;
}

.program-bg{
left:12px;
top:1.5%;
width:95%;
}

.program-content{
left:7%;
top:22.5%;
max-width:190px;
}

.program-content h1 span{
font-size:31px;
line-height:.98;
letter-spacing:-.4px;
}

.program-text{
margin-top:18px;
max-width:190px;
font-size:9px;
line-height:1.22;
}

.program-star-big{
left:5%;
top:6%;
width:18px;
}

.program-arrow{
left:5%;
bottom:0;
width:52px;
}

.program-light{
right:-2%;
top:47%;
width:27px;
}

.program-star-small{
left:5.6%;
top:16.5%;
width:9px;
}

.program-star-right{
right:3.5%;
top:8.5%;
width:9px;
}
}
.overview-section{
    width:100%;
    background:#fff;
    padding:70px 20px;
}

.overview-container{
    max-width:1120px;
    margin:auto;
    display:grid;
    grid-template-columns:.9fr 1.1fr;
    gap:60px;
    align-items:center;
}

.overview-image{
    display:flex;
    justify-content:center;
}

.overview-image img{
    width:100%;
    max-width:420px;
    object-fit:contain;
}

.overview-content{
    max-width:560px;
}

.overview-title{
    font-family:sans-serif;
    font-size:50px;
    line-height:1.05;
    color:#000;
    margin:0;
}

.overview-title span{
    color:#1671DE;
}

.overview-text{
    margin-top:26px;
    font-size:16px;
    line-height:1.65;
    color:#000;
}

.overview-text strong{
    font-weight:600;
}

.overview-list{
    margin-top:22px;
    padding:0;
    list-style:none;
}

.overview-list li{
    display:flex;
    align-items:flex-start;
    gap:10px;
    margin-bottom:10px;
    font-size:15px;
    line-height:1.55;
    color:#000;
}

.dot{
    width:6px;
    height:6px;
    background:#000;
    border-radius:50%;
    margin-top:9px;
    flex-shrink:0;
}

/* Tablet */

@media(max-width:991px){

.overview-container{
grid-template-columns:1fr;
gap:40px;
}

.overview-content{
margin:auto;
text-align:center;
}

.overview-list{
text-align:left;
}

.overview-title{
font-size:44px;
}

.overview-image img{
max-width:390px;
}

}

/* Mobile */

@media(max-width:576px){

.overview-section{
padding:50px 18px;
}

.overview-title{
font-size:34px;
}

.overview-text{
font-size:15px;
}

.overview-list li{
font-size:14px;
}

.overview-image img{
max-width:300px;
}

}

/* ================= INITIATIVES SECTION CSS START ================= */

.initiatives-section {
  width: 100%;
  background: #ffffff;
  padding: 48px 16px;
}

.initiatives-wrapper {
  margin: 0 auto;
}

.initiatives-box {
  background: #2d2d2d;
  border-radius: 32px;
  padding: 48px 20px;
  overflow: hidden;
}

.initiatives-header {
  text-align: center;
  margin-bottom: 40px;
}

.initiatives-label {
  display: block;
  color: #67e8f2;
  font-size: 10px;
  font-weight: 600;
  margin-bottom: 8px;
}

.initiatives-title {
  font-family: var(--heading-font, inherit);
  font-weight: 800;
  color: #ffffff;
  font-size: 30px;
  line-height: 1.1;
  margin: 0;
}

.initiatives-title span {
  color: #67e8f2;
}

.initiatives-description {
  max-width: 620px;
  margin: 16px auto 0;
  color: rgba(255, 255, 255, 0.8);
  font-size: 13px;
  line-height: 22px;
}

.initiatives-card-list {
  max-width: 960px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.initiatives-card-row {
  width: 100%;
  display: flex;
  opacity: 0;
}

.initiatives-left {
  justify-content: flex-start;
}

.initiatives-right {
  justify-content: flex-end;
}

.initiatives-card-row.initiatives-card-animate {
  animation-name: initiativesCardFadeUp;
  animation-duration: 0.65s;
  animation-timing-function: ease-out;
  animation-fill-mode: forwards;
}

@keyframes initiativesCardFadeUp {
  from {
    opacity: 0;
    transform: translateY(35px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.initiatives-card {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 16px;
  min-height: 230px;
  width: 100%;
  max-width: 520px;
  overflow: hidden;
  border-radius: 20px;
  background: #ffffff;
  padding: 20px;
  color: inherit;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.5s ease-out;
}

.initiatives-card:hover {
  background: #f4bf23;
}

.initiatives-main-img {
  position: relative;
  z-index: 10;
  width: 100%;
  height: 150px;
  flex-shrink: 0;
  object-fit: contain;
  transition: transform 0.5s ease-out;
  pointer-events: none;
  user-select: none;
}

.initiatives-card:hover .initiatives-main-img {
  transform: scale(1.03);
}

.initiatives-card-content {
  position: relative;
  z-index: 10;
  width: 100%;
  min-width: 0;
}

.initiatives-card-content h2 {
  font-family: var(--heading-font, inherit);
  font-weight: 800;
  color: #000000;
  font-size: 18px;
  line-height: 1.25;
  margin: 0;
  transition: color 0.5s ease;
}

.initiatives-card-content p {
  margin: 8px 0 0;
  text-align: left;
  color: #000000;
  font-size: 13px;
  line-height: 20px;
  transition: color 0.5s ease;
}

.initiatives-link {
  position: relative;
  display: inline-flex;
  margin-top: 12px;
  color: #000000;
  font-size: 11px;
  font-weight: 500;
  text-decoration: none;
  overflow: hidden;
  transition: color 0.5s ease;
  padding-bottom: 3px;
}

.initiatives-link-line-one,
.initiatives-link-line-two {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
}

.initiatives-link-line-one {
  background: #f5bc18;
  transition: background 0.5s ease;
}

.initiatives-card:hover .initiatives-link-line-one {
  background: #ffffff;
}

.initiatives-link-line-two {
  background: #67e8f2;
  transform: translateX(-100%);
  transition: transform 0.3s ease;
}

.initiatives-card:hover .initiatives-link-line-two {
  transform: translateX(0);
}

.initiatives-hover-img {
  pointer-events: none;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 0;
  width: 70px;
  opacity: 0;
  transform: translateY(100%);
  transition: all 0.5s ease-out;
}

.initiatives-card:hover .initiatives-hover-img {
  opacity: 1;
  transform: translateY(0);
}

/* Responsive */
@media (min-width: 640px) {
  .initiatives-section {
    padding: 64px 20px;
  }

  .initiatives-box {
    border-radius: 40px;
    padding: 56px 32px;
  }

  .initiatives-header {
    margin-bottom: 48px;
  }

  .initiatives-label {
    font-size: 15px;
  }

  .initiatives-title {
    font-size: 38px;
  }

  .initiatives-description {
    font-size: 15px;
  }

  .initiatives-card-list {
    gap: 24px;
  }

  .initiatives-card {
    min-height: 250px;
    flex-direction: row;
    align-items: center;
    gap: 24px;
    padding: 24px;
  }

  .initiatives-main-img {
    width: 170px;
    height: 185px;
  }

  .initiatives-card-content {
    flex: 1;
  }

  .initiatives-card-content h2 {
    font-size: 20px;
  }

  .initiatives-card-content p {
    font-size: 14px;
  }

  .initiatives-link {
    font-size: 12px;
  }

  .initiatives-hover-img {
    width: 82px;
  }
}

@media (min-width: 768px) {
  .initiatives-box {
    padding: 64px 48px;
  }

  .initiatives-title {
    font-size: 46px;
  }
}

@media (min-width: 1024px) {
  .initiatives-section {
    padding-left: 0;
    padding-right: 0;
  }

  .initiatives-box {
    padding-left: 64px;
    padding-right: 64px;
  }
}

@media (prefers-reduced-motion: reduce) {
  .initiatives-card-row.initiatives-card-animate {
    animation: none;
    opacity: 1;
    transform: none;
  }

  .initiatives-card,
  .initiatives-main-img,
  .initiatives-hover-img,
  .initiatives-link-line-one,
  .initiatives-link-line-two {
    transition: none;
  }
}
/*==========================
      HOW IT WORKS
==========================*/

.how-works{
    position:relative;
    width:100%;
    overflow:hidden;
    background:#FFEFE4;
    padding:88px 20px 18px;
    margin-bottom:0;
}

.how-container{
    position:relative;
    max-width:1360px;
    margin:auto;
    min-height:535px;
}

/*==========================
      Heading
==========================*/

.works-heading{
    position:relative;
    z-index:5;
    text-align:center;
    padding-top:0;
}

.works-heading p{
    margin:0;
    color:#1671DE;
    font-size:18px;
    font-weight:700;
    line-height:1.2;
}

.works-heading h2{
    margin:16px 0 0;
    font-family:"Arial Black", Arial, Helvetica, sans-serif;
    font-size:57px;
    font-weight:900;
    line-height:1.05;
    color:#000;
    letter-spacing:-1.4px;
}

.works-heading span{
    color:#1671DE;
}

/*==========================
      Top Arrow
==========================*/

.works-arrow{
    position:absolute;
    top:68px;
    right:5.2%;
    width:188px;
    opacity:.34;
    user-select:none;
    pointer-events:none;
}

/*==========================
      SVG Line
==========================*/

.works-line{
    position:absolute;
    left:18.5%;
    top:230px;
    z-index:1;
    width:63%;
    height:150px;
    pointer-events:none;
    overflow:visible;
}

/*==========================
      Cards
==========================*/

.works-items{
    position:relative;
    width:100%;
    height:385px;
    margin-top:34px;
}

.work-card{
    position:absolute;
    z-index:3;
    width:236px;
    transform:translateX(-50%);
    text-align:center;
}

/* Desktop Positions */

.work1{
    left:18.5%;
    top:82px;
}

.work2{
    left:34.8%;
    top:158px;
}

.work3{
    left:48.5%;
    top:82px;
}

.work4{
    left:62.7%;
    top:170px;
}

.work5{
    left:81.5%;
    top:82px;
}

/*==========================
      Circle
==========================*/

.work-circle{
    position:relative;
    width:98px;
    height:98px;
    margin:auto;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#fff;
    border-radius:50%;
    box-shadow:0 10px 25px rgba(255,195,64,.08);
}

.work-number{
    position:absolute;
    top:-4px;
    left:-4px;

    width:32px;
    height:32px;

    display:flex;
    justify-content:center;
    align-items:center;

    background:#FFC83D;

    border-radius:50%;

    font-size:15px;
    font-weight:700;
}

.work-icon{
    width:54px;
    height:54px;

    border-radius:50%;

    background:#1671DE;

    display:flex;
    justify-content:center;
    align-items:center;

    color:#fff;

    font-size:24px;
}

.work-card h3{
    margin:24px 0 0;
    font-family:"Arial Black", Arial, Helvetica, sans-serif;
    font-size:26px;
    font-weight:900;
    color:#000;
    line-height:1.2;
    letter-spacing:-.4px;
}

.work-card p{
    margin-top:18px;
    max-width:205px;
    margin-left:auto;
    margin-right:auto;

    font-size:17px;
    line-height:1.35;
    color:#000;
}

/*==========================
      Tablet
==========================*/

@media(max-width:991px){

.how-container{
height:auto;
min-height:auto;
}

.works-arrow,
.works-line{
display:none;
}

.works-items{

display:grid;

grid-template-columns:repeat(2,1fr);

gap:40px;

margin-top:40px;
height:auto;

}

.work-card{

position:relative;

left:auto !important;

top:auto !important;

transform:none;

width:100%;

}

.works-heading{

padding-top:0;

}

.works-heading h2{

font-size:42px;

}

}

/*==========================
      Mobile
==========================*/

@media(max-width:576px){

.how-works{

padding:58px 18px;

}

.works-items{

grid-template-columns:1fr;

gap:35px;

}

.works-heading h2{

font-size:34px;
letter-spacing:-.7px;

}

.work-circle{

width:72px;
height:72px;

}

.work-icon{

width:40px;
height:40px;

font-size:18px;

}

.work-card h3{

font-size:18px;

}

.work-card p{

font-size:13px;

}

}

    </style>
</head>
<body>
    <div id="navbar"></div>
<main >
<section class="program-hero">

    <div class="program-hero-wrapper">

        <div class="program-hero-box">

            <!-- Background -->

            <img
                src="../assets/images/p-hero-bg.png"
                alt="Program Hero"
                class="program-bg"
            >

            <!-- Decorative Images -->

            <img
                src="../assets/images/hero-star.png"
                alt=""
                class="program-star-big animate-spin-soft"
            >

            <img
                src="../assets/images/heo-arrow.png"
                alt=""
                class="program-arrow animate-float-reverse"
            >

            <img
                src="../assets/images/hero-light.png"
                alt=""
                class="program-light animate-pulse-pop"
            >

            <img
                src="../assets/images/hero-star.png"
                alt=""
                class="program-star-small animate-spin-soft"
            >

            <img
                src="../assets/images/hero-star.png"
                alt=""
                class="program-star-right animate-twinkle"
            >

            <!-- Hero Content -->

            <div class="program-content">

                <h1 class="hero-title-font">

                    <span class="hero-left-animate hero-delay-1">
                        Building
                    </span>

                    <span class="hero-left-animate hero-delay-2">
                        Financially
                    </span>

                    <span class="hero-right-animate hero-delay-3 blue">
                        Smart Students
                    </span>

                </h1>

                <p class="program-text animate-fade-up-delay">

                    Explore programs designed to teach
                    <br>

                    financial literacy, money management,
                    <br>

                    and life skills to students of all grade levels.

                </p>

                <!--
                <a href="#" class="discover-btn animate-button-bounce">
                    <span>Discover what we do</span>
                </a>
                -->

            </div>

        </div>

    </div>

</section>

<section class="overview-section">

    <div class="overview-container">

        <!-- Image -->

        <div class="overview-image">

            <img src="../assets/images/Overview.png" alt="Program Overview">

        </div>

        <!-- Content -->

        <div class="overview-content">

            <h2 class="overview-title">
                Program <span>Overview</span>
            </h2>

            <p class="overview-text">
                Fin-Edu Quest provides age-appropriate, structured programs to
                empower students with practical money skills and responsible
                decision-making abilities. Programs are hands-on, interactive,
                and designed to
                <strong> engage students while supporting teachers.</strong>
            </p>

            <ul class="overview-list">

                <li>
                    <span class="dot"></span>
                    <span>Hands-on activities and experiential learning</span>
                </li>

                <li>
                    <span class="dot"></span>
                    <span>Grade-wise curriculum aligned with NEP 2020</span>
                </li>

                <li>
                    <span class="dot"></span>
                    <span>Interactive games, exercises, and quizzes</span>
                </li>

                <li>
                    <span class="dot"></span>
                    <span>Measurable learning outcomes and assessments</span>
                </li>

                <li>
                    <span class="dot"></span>
                    <span>National recognition through certificates and awards</span>
                </li>

            </ul>

        </div>

    </div>

</section>

<section class="initiatives-section" id="initiatives-section">
  <div class="initiatives-wrapper">
    <div class="initiatives-box">

      <div class="initiatives-header">
        <span class="initiatives-label">
          Program Highlights
        </span>

        <h2 class="initiatives-title">
          Our <span>Initiatives</span>
        </h2>

        <p class="initiatives-description">
          A comprehensive, NEP 2020-aligned Financial Literacy Program for
          all age groups, designed for easy implementation with minimal
          teacher burden.
        </p>
      </div>

      <div class="initiatives-card-list">

        <!-- Card 1 -->
        <div class="initiatives-card-row initiatives-left" style="animation-delay: 0s;">
          <a href="Fineduquest.php" class="initiatives-card">
            <img
              src="../assets/images/1.png"
              alt="Fin-Edu Quest"
              class="initiatives-main-img"
            />

            <div class="initiatives-card-content">
              <h2>Fin-Edu Quest</h2>

              <p>
                A Financial Literacy Olympiad
              </p>

              <span class="initiatives-link">
                <span>Learn More</span>
                <span class="initiatives-link-line-one"></span>
                <span class="initiatives-link-line-two"></span>
              </span>
            </div>

            <img
              src="../assets/images/card-hover1.png"
              alt=""
              class="initiatives-hover-img"
            />
          </a>
        </div>

        <!-- Card 2 -->
        <div class="initiatives-card-row initiatives-right" style="animation-delay: 0.12s;">
          <a href="MoneyMastrey.php" class="initiatives-card">
            <img
              src="../assets/images/2.png"
              alt="Money-Mastery Program"
              class="initiatives-main-img"
            />

            <div class="initiatives-card-content">
              <h2>Money-Mastery Program</h2>

              <p>
                Experiential Learning Activity Kit
              </p>

              <span class="initiatives-link">
                <span>Learn More</span>
                <span class="initiatives-link-line-one"></span>
                <span class="initiatives-link-line-two"></span>
              </span>
            </div>

            <img
              src="../assets/images/card-hover2.png"
              alt=""
              class="initiatives-hover-img"
            />
          </a>
        </div>

        <!-- Card 3 -->
        <div class="initiatives-card-row initiatives-left" style="animation-delay: 0.24s;">
          <a href="Awarness.php" class="initiatives-card">
            <img
              src="../assets/images/3.png"
              alt="Awareness & Impact Initiatives"
              class="initiatives-main-img"
            />

            <div class="initiatives-card-content">
              <h2>Awareness & Impact Initiatives</h2>

              <p>
                Workshops, Campaigns & Community Outreach
              </p>

              <span class="initiatives-link">
                <span>Learn More</span>
                <span class="initiatives-link-line-one"></span>
                <span class="initiatives-link-line-two"></span>
              </span>
            </div>

            <img
              src="../assets/images/card-hover3.png"
              alt=""
              class="initiatives-hover-img"
            />
          </a>
        </div>

        <!-- Card 4 -->
        <div class="initiatives-card-row initiatives-right" style="animation-delay: 0.36s;">
          <a href="Financials.php" class="initiatives-card">
            <img
              src="../assets/images/4.png"
              alt="Financial-Literacy Publications"
              class="initiatives-main-img"
            />

            <div class="initiatives-card-content">
              <h2>Financial-Literacy Publications</h2>

              <p>
                Professionally Designed NEP-Aligned Books
              </p>

              <span class="initiatives-link">
                <span>Learn More</span>
                <span class="initiatives-link-line-one"></span>
                <span class="initiatives-link-line-two"></span>
              </span>
            </div>

            <img
              src="../assets/images/card-hover4.png"
              alt=""
              class="initiatives-hover-img"
            />
          </a>
        </div>

      </div>

    </div>
  </div>
</section>


<section class="how-works">

    <!-- Top Right Arrow -->
    <img
        src="../assets/images/arrow.png"
        alt=""
        class="works-arrow"
    >

    <div class="how-container">

        <!-- Heading -->

        <div class="works-heading">

            <p>How It Works</p>

            <h2>
                A simple
                <span>five-step</span>
                journey
            </h2>

        </div>

        <!-- SVG Line -->

        <svg
            class="works-line"
            viewBox="0 0 1000 190"
            fill="none"
            aria-hidden="true"
        >

            <path
                d="M 0 48 C 96 0 160 30 224 112 C 292 188 388 18 480 42 C 585 70 590 168 692 126 C 790 86 800 20 1000 42"
                stroke="#1671DE"
                stroke-width="2"
                stroke-dasharray="13 15"
                stroke-linecap="round"
            />

        </svg>

        <!-- Cards -->

        <div class="works-items">

            <!-- Step 1 -->

            <div class="work-card work1">

                <div class="work-circle">

                    <span class="work-number">
                        1
                    </span>

                    <span class="work-icon">

                        <i class="fas fa-clipboard-list"></i>

                    </span>

                </div>

                <h3>
                    School Registration
                </h3>

                <p>
                    School signs up for the program
                </p>

            </div>

            <!-- Step 2 -->

            <div class="work-card work2">

                <div class="work-circle">

                    <span class="work-number">
                        2
                    </span>

                    <span class="work-icon">

                        <i class="fas fa-user-plus"></i>

                    </span>

                </div>

                <h3>
                    Student Enrollment
                </h3>

                <p>
                    Students register via school
                </p>

            </div>

            <!-- Step 3 -->

            <div class="work-card work3">

                <div class="work-circle">

                    <span class="work-number">
                        3
                    </span>

                    <span class="work-icon">

                        <i class="fas fa-book-open"></i>

                    </span>

                </div>

                <h3>
                    Study Material
                </h3>

                <p>
                    Access grade-wise books
                </p>

            </div>

            <!-- Step 4 -->

            <div class="work-card work4">

                <div class="work-circle">

                    <span class="work-number">
                        4
                    </span>

                    <span class="work-icon">

                        <i class="fas fa-file-alt"></i>

                    </span>

                </div>

                <h3>
                    Examination
                </h3>

                <p>
                    National level assessment
                </p>

            </div>

            <!-- Step 5 -->

            <div class="work-card work5">

                <div class="work-circle">

                    <span class="work-number">
                        5
                    </span>

                    <span class="work-icon">

                        <i class="fas fa-award"></i>

                    </span>

                </div>

                <h3>
                    Awards
                </h3>

                <p>
                    Certificates & Recognition
                </p>

            </div>

        </div>

    </div>

</section>

</main>
<div id="footer"></div>

<script src="Components/footer-loader.js"></script>

<script src="Components/navbar-loader.js"></script>

<script >(function () {
  const initiativesSection = document.getElementById("initiatives-section");

  if (!initiativesSection) return;

  const initiativeCards = initiativesSection.querySelectorAll(".initiatives-card-row");

  function startInitiativesAnimation() {
    initiativeCards.forEach(function (card) {
      card.classList.add("initiatives-card-animate");
    });
  }

  if ("IntersectionObserver" in window) {
    const initiativesObserver = new IntersectionObserver(
      function (entries, observer) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            startInitiativesAnimation();
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.25
      }
    );

    initiativesObserver.observe(initiativesSection);
  } else {
    startInitiativesAnimation();
  }
})();</script>
    
</body>
</html>
