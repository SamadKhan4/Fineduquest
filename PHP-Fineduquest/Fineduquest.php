<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fineduquest</title>
    <link rel="icon" type="image/png" href="../assets/images/logo-new.png">
<!-- Font Awesome (Add once inside <head>) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!-- Font Awesome (Add once inside <head>) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!-- Font Awesome (Add once inside <head>) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<!-- Font Awesome (Add once in <head>) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style >
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
        P HERO
==========================*/

.phero{
    width:100%;
    overflow:hidden;
    background:#fff;
    padding:55px 20px;
}

.phero-container{
    max-width:1120px;
    margin:auto;
    display:grid;
    grid-template-columns:1.02fr .98fr;
    gap:40px;
    align-items:flex-start;
}

/*==========================
      Left Content
==========================*/

.phero-content{
    padding-top:5px;
}

.phero-eyebrow{
    font-size:13px;
    font-weight:700;
    color:#1671DE;
    margin:0;
}

.phero-title{
    margin-top:24px;
    font-family:"Roketto",sans-serif;
    font-size:58px;
    line-height:1.15;
    color:#000;
}

.phero-title span{
    color:#1671DE;
}

.phero-description{
    margin-top:28px;
    max-width:590px;
    font-size:16px;
    line-height:1.65;
    color:#171717;
}

.phero-list{
    margin-top:22px;
    padding:0;
    list-style:none;
}

.phero-list li{
    display:flex;
    align-items:flex-start;
    gap:12px;
    margin-bottom:14px;
    font-size:16px;
    line-height:1.45;
    color:#171717;
}

.phero-list strong{
    font-weight:700;
}

.check{
    width:18px;
    height:18px;
    flex-shrink:0;

    display:flex;
    justify-content:center;
    align-items:center;

    border:2px solid #1671DE;
    border-radius:50%;

    color:#1671DE;

    margin-top:2px;
}

.check i{
    font-size:9px;
}

/*==========================
      Right
==========================*/

.phero-image-box{
    display:flex;
    flex-direction:column;
    align-items:flex-end;
}

.phero-image{
    width:100%;
    max-width:560px;
    object-fit:contain;
}

.phero-card{
    width:100%;
    max-width:520px;

    margin-top:36px;

    background:#EAF4FF;

    border:1px solid #1671DE;

    border-radius:16px;

    padding:24px;
}

.phero-card h2{
    margin:0;
    font-size:22px;
    font-weight:700;
    color:#1671DE;
}

.phero-card p{
    margin-top:16px;
    font-size:16px;
    line-height:1.55;
    color:#1671DE;
}

/*==========================
      Tablet
==========================*/

@media(max-width:991px){

.phero{

padding:50px 20px;

}

.phero-container{

grid-template-columns:1fr;

gap:40px;

}

.phero-content{

text-align:center;

}

.phero-description{

margin-left:auto;
margin-right:auto;

}

.phero-list{

max-width:590px;
margin-left:auto;
margin-right:auto;

text-align:left;

}

.phero-image-box{

align-items:center;

}

.phero-image{

max-width:520px;

}

.phero-card{

margin-top:28px;

}

.phero-title{

font-size:52px;

}

}

/*==========================
      Mobile
==========================*/

@media(max-width:576px){

.phero{

padding:40px 16px;

}

.phero-title{

font-size:36px;
line-height:1.18;

}

.phero-description{

font-size:15px;

}

.phero-list li{

font-size:15px;

}

.phero-image{

max-width:430px;

}

.phero-card{

padding:20px;

}

.phero-card h2{

font-size:20px;

}

.phero-card p{

font-size:15px;

}

}

/*=================================
        EXAM DATES SECTION
=================================*/

.exam-dates-section{
    width:100%;
    background:#fff;
    padding:50px 20px;
}

.exam-container{
    max-width:1120px;
    margin:auto;
    display:flex;
    align-items:flex-end;
    justify-content:center;
    gap:0;
}

/*=================================
        Mascot
=================================*/

.exam-mascot-box{
    width:230px;
    display:flex;
    justify-content:flex-end;
    position:relative;
    z-index:2;
}

.exam-mascot{
    animation:mascotFloat 3.8s ease-in-out infinite;
    object-fit:contain;
}

.desktop-mascot{
    width:215px;
    margin-right:-28px;
}

.mobile-mascot{
    display:none;
    width:150px;
}

/*=================================
        Card
=================================*/

.exam-card{

    position:relative;

    width:100%;
    max-width:860px;

    overflow:hidden;

    background:#fff;

    border-radius:24px;

    border:1px solid rgba(22,113,222,.18);

    padding:32px;

    box-shadow:0 22px 60px rgba(22,113,222,.16);

    animation:examFadeUp .8s ease-out both;

}

/*=================================
        Background Circles
=================================*/

.circle{

position:absolute;

border-radius:50%;

pointer-events:none;

}

.circle1{

width:210px;
height:210px;

right:-70px;
top:-70px;

background:#EAF4FF;

}

.circle3{

width:96px;
height:96px;

right:40px;
top:40px;

border:1px solid rgba(22,113,222,.1);

}

/*=================================
        Header
=================================*/

.exam-header{

display:flex;

align-items:center;

gap:18px;

position:relative;

z-index:2;

}

.exam-icon{

width:44px;
height:44px;

border-radius:50%;

background:#EAF4FF;

display:flex;
justify-content:center;
align-items:center;

color:#1671DE;

font-size:18px;

flex-shrink:0;

}

.exam-small-title{

margin:0;

font-size:13px;

font-weight:700;

text-transform:uppercase;

letter-spacing:.18em;

color:#1671DE;

}

.exam-title{

margin-top:6px;

font-size:28px;

font-weight:800;

line-height:1.25;

color:#0B3B69;

}

/*=================================
        Shine Line
=================================*/

.shine-wrapper{

margin-top:24px;

height:1px;

background:#E6EEF8;

position:relative;

overflow:hidden;

}

.shine-line{

position:absolute;

left:0;
top:0;

width:50%;
height:100%;

background:rgba(22,113,222,.4);

animation:softShine 3.8s infinite ease-in-out;

}

/*=================================
        Date Grid
=================================*/

.exam-date-grid{

margin-top:28px;

display:grid;

grid-template-columns:repeat(3,1fr);

gap:18px;

}

.exam-date-item{

display:flex;

align-items:center;

gap:15px;

padding:16px;

background:#FAFCFF;

border:1px solid #E6EEF8;

border-radius:18px;

transition:.35s;

animation:examFadeUp .8s ease both;

}

.exam-date-item:hover{

transform:translateY(-5px);

border-color:rgba(22,113,222,.4);

box-shadow:0 14px 32px rgba(22,113,222,.14);

}

.date-box{

width:76px;
height:76px;

border-radius:16px;

display:flex;
justify-content:center;
align-items:center;

font-size:36px;

font-weight:800;

flex-shrink:0;

}

.green{

background:#7BC399;

color:#000;

}

.blue{

background:#0B3B69;

color:#fff;

}

.yellow{

background:#FFC533;

color:#000;

}

.exam-date-item h3{

margin:0;

font-size:24px;

font-weight:800;

text-transform:uppercase;

}

.exam-date-item p{

margin-top:6px;

font-size:15px;

font-weight:500;

letter-spacing:.12em;

text-transform:uppercase;

}

/*=================================
        Bottom Cards
=================================*/

.exam-bottom{

margin-top:28px;

display:grid;

grid-template-columns:1fr 1.08fr;

gap:18px;

}

.exam-info{

display:flex;

gap:14px;

padding:18px;

border-radius:16px;

}

.exam-info i{

margin-top:3px;

font-size:18px;

flex-shrink:0;

}

.blue-box{

background:#EAF4FF;

color:#0B3B69;

}

.blue-box i{

color:#1671DE;

}

.yellow-box{

background:#FFF8E2;

border:1px solid rgba(255,197,51,.5);

color:#4B3A00;

}

.yellow-box i{

color:#D99A00;

}

.exam-info p{

margin:0;

font-size:15px;

line-height:1.6;

}

/*=================================
        Animations
=================================*/

@keyframes examFadeUp{

from{

opacity:0;

transform:translateY(24px);

}

to{

opacity:1;

transform:translateY(0);

}

}

@keyframes mascotFloat{

0%,100%{

transform:translateY(0);

}

50%{

transform:translateY(-8px);

}

}

@keyframes softShine{

0%{

transform:translateX(-120%);

}

100%{

transform:translateX(120%);

}

}

/*=================================
        Tablet
=================================*/

@media(max-width:991px){

.exam-container{

flex-direction:column;

align-items:center;

gap:25px;

}

.exam-mascot-box{

width:100%;

justify-content:center;

}

.desktop-mascot{

margin:0;

width:180px;

}

.exam-date-grid{

grid-template-columns:1fr;

}

.exam-bottom{

grid-template-columns:1fr;

}

}

/*=================================
        Mobile
=================================*/

@media(max-width:576px){

.exam-dates-section{

padding:40px 16px;

}

.desktop-mascot{

display:none;

}

.mobile-mascot{

display:block;

}

.exam-card{

padding:20px;

}

.exam-header{

align-items:flex-start;

}

.exam-title{

font-size:21px;

}

.exam-date-item{

padding:14px;

}

.date-box{

width:68px;
height:68px;

font-size:30px;

}

.exam-date-item h3{

font-size:20px;

}

.exam-date-item p{

font-size:14px;

}

.exam-info p{

font-size:14px;

}

}

/*=================================
      OLYMPIAD PATTERN
=================================*/

.olympiad-pattern{
    width:100%;
    background:#fff;
    padding:40px 20px;
}

.pattern-wrapper{
    max-width:1400px;
    margin:auto;
    background:#2B2B2B;
    border-radius:30px;
    padding:70px 50px;
}

.pattern-title{
    margin:0;
    text-align:center;
    font-family:"Roketto",sans-serif;
    font-size:48px;
    line-height:1;
    color:#fff;
}

.pattern-title span{
    color:#5FE5EA;
}

/*==========================
        GRID
==========================*/

.pattern-grid{
    max-width:950px;
    margin:50px auto 0;
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:28px;
}

/*==========================
        CARD
==========================*/

.pattern-card{
    background:#fff;
    border-radius:22px;
    padding:28px 26px;
    min-height:315px;
    transition:.35s;
}

.pattern-card:hover{
    transform:translateY(-8px);
    box-shadow:0 18px 40px rgba(0,0,0,.15);
}

/*==========================
        PILLS
==========================*/

.pattern-pill{
    display:inline-flex;
    justify-content:center;
    align-items:center;

    min-width:110px;
    height:26px;

    border-radius:50px;

    font-size:12px;
    font-weight:700;
}

.green{
    background:#C9F7E9;
    color:#fff;
}

.yellow{
    background:#FFE6BE;
    color:#fff;
}

.purple{
    background:#DCD9FF;
    color:#fff;
}

/*==========================
        TITLE
==========================*/

.pattern-card h3{
    margin-top:28px;
    font-family:"Roketto",sans-serif;
    font-size:30px;
    line-height:1.2;
    color:#000;
}

/*==========================
        INFO
==========================*/

.pattern-info{
    margin-top:42px;
    display:flex;
    flex-direction:column;
    gap:34px;
}

.pattern-row{
    display:flex;
    align-items:center;
    gap:15px;
}

.icon{
    width:24px;
    height:24px;
    border-radius:5px;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:13px;
}

.green-bg{
    background:#C9F7E9;
    color:#36BE9B;
}

.yellow-bg{
    background:#FFE6BE;
    color:#F2A620;
}

.purple-bg{
    background:#DCD9FF;
    color:#766BFF;
}

.pattern-row p{
    margin:0;
    font-size:14px;
    color:#000;
    line-height:1;
}

.pattern-row h4{
    margin-top:12px;
    margin-bottom:0;
    font-size:22px;
    font-weight:700;
    color:#000;
}

/*==========================
        TABLET
==========================*/

@media(max-width:991px){

.pattern-wrapper{
    padding:60px 35px;
}

.pattern-title{
    font-size:42px;
}

.pattern-grid{
    grid-template-columns:repeat(2,1fr);
    max-width:700px;
}

}

/*==========================
        MOBILE
==========================*/

@media(max-width:576px){

.olympiad-pattern{
    padding:35px 15px;
}

.pattern-wrapper{
    padding:45px 20px;
    border-radius:24px;
}

.pattern-title{
    font-size:34px;
}

.pattern-grid{
    grid-template-columns:1fr;
    gap:22px;
    margin-top:40px;
}

.pattern-card{
    min-height:auto;
    padding:24px;
}

.pattern-card h3{
    font-size:28px;
}

.pattern-info{
    margin-top:32px;
    gap:28px;
}

.pattern-row h4{
    font-size:20px;
}

}


/*=================================
        AWARDS SECTION
=================================*/

.awards-section{
    width:100%;
    background:#fff;
    padding:60px 20px;
}

.awards-container{
    max-width:1120px;
    margin:auto;
}

/*==========================
        Heading
==========================*/

.awards-heading{
    text-align:center;
}

.awards-heading h2{
    margin:0;
    font-family:"Roketto",sans-serif;
    font-size:50px;
    line-height:1.15;
    color:#000;
}

.awards-heading h2 span{
    color:#1671DE;
}

.awards-heading p{
    max-width:500px;
    margin:22px auto 0;
    font-size:15px;
    line-height:1.6;
    color:#000;
}

/*==========================
        Grid
==========================*/

.awards-grid{
    margin-top:40px;
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:18px;
}

/*==========================
        Card
==========================*/

.award-card{
    min-height:405px;
    background:#fff;
    border:2px solid;
    border-radius:14px;
    padding:20px;
    display:flex;
    flex-direction:column;
    align-items:center;
    text-align:center;
    transition:.35s ease;
}

.award-card:hover{
    transform:translateY(-8px);
    box-shadow:0 18px 40px rgba(0,0,0,.12);
}

.award-card img{
    width:160px;
    height:160px;
    object-fit:contain;
}

/*==========================
        Badge
==========================*/

.award-badge{
    width:32px;
    height:32px;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    margin-top:28px;
    color:#fff;
    font-size:15px;
}

/*==========================
        Text
==========================*/

.award-card h3{
    margin-top:22px;
    font-family:"Roketto",sans-serif;
    font-size:22px;
    line-height:1.1;
    color:#000;
}

.award-card p{
    margin-top:20px;
    font-size:14px;
    line-height:1.5;
    color:#000;
}

/*==========================
        Colors
==========================*/

.border-blue{
    border-color:#1671DE;
}

.border-yellow{
    border-color:#F5A623;
}

.border-purple{
    border-color:#766BFF;
}

.border-green{
    border-color:#35C99B;
}

.blue{
    background:#1671DE;
}

.yellow{
    background:#F5A623;
}

.purple{
    background:#766BFF;
}

.green{
    background:#35C99B;
}

/*==========================
        Tablet
==========================*/

@media(max-width:991px){

.awards-grid{
    grid-template-columns:repeat(2,1fr);
    gap:22px;
}

.awards-heading h2{
    font-size:44px;
}

}

/*==========================
        Mobile
==========================*/

@media(max-width:576px){

.awards-section{
    padding:45px 16px;
}

.awards-grid{
    grid-template-columns:1fr;
    gap:20px;
}

.awards-heading h2{
    font-size:36px;
}

.awards-heading p{
    font-size:14px;
}

.award-card{
    min-height:auto;
    padding:24px 20px;
}

.award-card img{
    width:150px;
    height:150px;
}

.award-card h3{
    font-size:22px;
}

.award-card p{
    font-size:14px;
}

}
</style>

</head>
<body>

    <div id="navbar"></div>
    <main >

<section class="phero">

    <div class="phero-container">

        <!-- Left Content -->

        <div class="phero-content">

            <p class="phero-eyebrow">
                Financial Literacy Olympiad
            </p>

            <h1 class="phero-title">
                India's First Financial
                <br>
                Literacy Olympiad for
                <br>
                <span>Classes 1-12</span>
            </h1>

            <p class="phero-description">

                Fin-Edu Quest is a pioneering initiative designed to equip students
                with essential financial life skills through an engaging and
                age-appropriate Olympiad experience. Aligned with NEP 2020, the
                Olympiad helps students develop practical knowledge of money
                management, responsible decision-making, entrepreneurship,
                consumer awareness, and financial well-being.

            </p>

            <ul class="phero-list">

                <li>

                    <span class="check">

                        <i class="fas fa-check"></i>

                    </span>

                    <span>

                        Designed for students from
                        <strong>Class 1 to Class 12</strong>

                    </span>

                </li>

                <li>

                    <span class="check">

                        <i class="fas fa-check"></i>

                    </span>

                    <span>

                        <strong>NEP 2020 Aligned</strong>
                        curriculum

                    </span>

                </li>

                <li>

                    <span class="check">

                        <i class="fas fa-check"></i>

                    </span>

                    <span>

                        Professionally crafted
                        <strong>story-based study material</strong>

                    </span>

                </li>

                <li>

                    <span class="check">

                        <i class="fas fa-check"></i>

                    </span>

                    <span>

                        Concept-based MCQs with clear explanations

                    </span>

                </li>

                <li>

                    <span class="check">

                        <i class="fas fa-check"></i>

                    </span>

                    <span>

                        E-Certificates for all participants

                    </span>

                </li>

                <li>

                    <span class="check">

                        <i class="fas fa-check"></i>

                    </span>

                    <span>

                        Awards and recognition for top performers

                    </span>

                </li>

                <li>

                    <span class="check">

                        <i class="fas fa-check"></i>

                    </span>

                    <span>

                        <strong>No Negative Marking</strong>

                    </span>

                </li>

            </ul>

        </div>

        <!-- Right Content -->

        <div class="phero-image-box">

            <img
                src="../assets/images/phero1.png"
                alt="Financial Literacy Olympiad"
                class="phero-image"
            >

            <div class="phero-card">

                <h2>

                    Empowering Future-Ready Learners

                </h2>

                <p>

                    The Financial Literacy Olympiad goes beyond academics,
                    helping students build lifelong money management skills,
                    critical thinking abilities, and financial confidence,
                    preparing them to become responsible and informed citizens
                    of tomorrow.

                </p>

            </div>

        </div>

    </div>

</section>


<section class="exam-dates-section">

    <div class="exam-container">

        <!-- Mascot -->

        <div class="exam-mascot-box">

            <!-- Mobile -->

            <img
                src="../assets/images/down.png"
                alt="Mascot"
                class="exam-mascot mobile-mascot"
            >

            <!-- Desktop -->

            <img
                src="../assets/images/boy.png"
                alt="Mascot"
                class="exam-mascot desktop-mascot"
            >

        </div>

        <!-- Card -->

        <div class="exam-card">

            <!-- Background Shapes -->

            <div class="circle circle1"></div>
            <div class="circle circle3"></div>

            <!-- Header -->

            <div class="exam-header">

                <div class="exam-icon">

                    <i class="fas fa-calendar-alt"></i>

                </div>

                <div>

                    <p class="exam-small-title">
                        Exam Schedule
                    </p>

                    <h2 class="exam-title">

                        Financial Literacy Olympiad
                        Exam Date for Academic Year
                        2026-2027

                    </h2>

                </div>

            </div>

            <!-- Shine Line -->

            <div class="shine-wrapper">

                <div class="shine-line"></div>

            </div>

            <!-- Date Cards -->

            <div class="exam-date-grid">

                <!-- Card 1 -->

                <div class="exam-date-item">

                    <div class="date-box green">

                        <span>11</span>

                    </div>

                    <div>

                        <h3>August 2026</h3>

                        <p>Tuesday</p>

                    </div>

                </div>

                <!-- Card 2 -->

                <div class="exam-date-item">

                    <div class="date-box blue">

                        <span>09</span>

                    </div>

                    <div>

                        <h3>September 2026</h3>

                        <p>Wednesday</p>

                    </div>

                </div>

                <!-- Card 3 -->

                <div class="exam-date-item">

                    <div class="date-box yellow">

                        <span>08</span>

                    </div>

                    <div>

                        <h3>October 2026</h3>

                        <p>Thursday</p>

                    </div>

                </div>

            </div>

            <!-- Bottom Info -->

            <div class="exam-bottom">

                <!-- Left -->

                <div class="exam-info blue-box">

                    <i class="fas fa-school"></i>

                    <p>

                        Schools should select any one of the above dates
                        as per their convenience.

                    </p>

                </div>

                <!-- Right -->

                <div class="exam-info yellow-box">

                    <i class="fas fa-circle-info"></i>

                    <p>

                        <strong>Note:</strong>

                        Each school should choose only one exam
                        date from the given options and communicate
                        the selected date in advance for smooth
                        exam coordination.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="olympiad-pattern">

    <div class="pattern-wrapper">

        <h2 class="pattern-title">
            Olympiad <span>Pattern</span>
        </h2>

        <div class="pattern-grid">

            <!-- Card 1 -->

            <div class="pattern-card">

                <span class="pattern-pill green">
                    Category 1
                </span>

                <h3>
                    Classes 1 - 3
                </h3>

                <div class="pattern-info">

                    <div class="pattern-row">

                        <span class="icon green-bg">
                            <i class="fas fa-bullseye"></i>
                        </span>

                        <div>

                            <p>Total Marks</p>

                            <h4>40 Marks</h4>

                        </div>

                    </div>

                    <div class="pattern-row">

                        <span class="icon green-bg">
                            <i class="fas fa-clock"></i>
                        </span>

                        <div>

                            <p>Duration</p>

                            <h4>60 Minutes</h4>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Card 2 -->

            <div class="pattern-card">

                <span class="pattern-pill yellow">
                    Category 2
                </span>

                <h3>
                    Classes 4 - 6
                </h3>

                <div class="pattern-info">

                    <div class="pattern-row">

                        <span class="icon yellow-bg">
                            <i class="fas fa-bullseye"></i>
                        </span>

                        <div>

                            <p>Total Marks</p>

                            <h4>50 Marks</h4>

                        </div>

                    </div>

                    <div class="pattern-row">

                        <span class="icon yellow-bg">
                            <i class="fas fa-clock"></i>
                        </span>

                        <div>

                            <p>Duration</p>

                            <h4>60 Minutes</h4>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Card 3 -->

            <div class="pattern-card">

                <span class="pattern-pill purple">
                    Category 3
                </span>

                <h3>
                    Classes 7 - 12
                </h3>

                <div class="pattern-info">

                    <div class="pattern-row">

                        <span class="icon purple-bg">
                            <i class="fas fa-bullseye"></i>
                        </span>

                        <div>

                            <p>Total Marks</p>

                            <h4>60 Marks</h4>

                        </div>

                    </div>

                    <div class="pattern-row">

                        <span class="icon purple-bg">
                            <i class="fas fa-clock"></i>
                        </span>

                        <div>

                            <p>Duration</p>

                            <h4>60 Minutes</h4>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="awards-section">

    <div class="awards-container">

        <!-- Heading -->

        <div class="awards-heading">

            <h2>

                Recognition &
                <span>Awards</span>

            </h2>

            <p>

                We honor the achievements of students, educators,
                and schools who go above and beyond in financial
                literacy education.

            </p>

        </div>

        <!-- Cards -->

        <div class="awards-grid">

            <!-- Card 1 -->

            <div class="award-card border-blue">

                <img src="../assets/images/award1.png" alt="Award">

                <span class="award-badge blue">

                    <i class="fas fa-users"></i>

                </span>

                <h3>

                    Class-wise
                    <br>
                    Top Performers

                </h3>

                <p>

                    Awarded to the students who demonstrate exceptional
                    knowledge and skills.

                </p>

            </div>

            <!-- Card 2 -->

            <div class="award-card border-yellow">

                <img src="../assets/images/award2.png" alt="Award">

                <span class="award-badge yellow">

                    <i class="fas fa-users"></i>

                </span>

                <h3>

                    Principal Leadership
                    <br>
                    Award

                </h3>

                <p>

                    Recognizing principals who champion financial
                    literacy in their schools.

                </p>

            </div>

            <!-- Card 3 -->

            <div class="award-card border-purple">

                <img src="../assets/images/award3.png" alt="Award">

                <span class="award-badge purple">

                    <i class="fas fa-users"></i>

                </span>

                <h3>

                    Best Mentor
                    <br>
                    Award

                </h3>

                <p>

                    Honoring mentors who inspire and guide students
                    towards financial success.

                </p>

            </div>

            <!-- Card 4 -->

            <div class="award-card border-green">

                <img src="../assets/images/award4.png" alt="Award">

                <span class="award-badge green">

                    <i class="fas fa-school"></i>

                </span>

                <h3>

                    Best School
                    <br>
                    Award

                </h3>

                <p>

                    Presented to schools for their outstanding
                    commitment to financial literacy education.

                </p>

            </div>

        </div>

    </div>

</section>
    </main>
    <div id="footer"></div>

<script src="Components/footer-loader.js"></script>

<script src="Components/navbar-loader.js"></script>
</body>
</html>
