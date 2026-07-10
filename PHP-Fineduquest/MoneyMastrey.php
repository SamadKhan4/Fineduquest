<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Mastery</title>
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

    /*=================================
      MONEY MASTERY
=================================*/

.money-mastery{
    width:100%;
    overflow:hidden;
    background:#fff;
}

/*=================================
      HERO SECTION
=================================*/

.mm-hero{
    padding:60px 20px;
}

.mm-container{
    max-width:1120px;
    margin:auto;
    display:grid;
    grid-template-columns:.95fr 1.05fr;
    gap:50px;
    align-items:flex-start;
}

.mm-label{
    color:#1671DE;
    font-size:12px;
    font-weight:700;
    margin:0;
}

.mm-title{
    margin-top:22px;
    font-family:"Roketto",sans-serif;
    font-size:56px;
    line-height:1.18;
    color:#000;
}

.mm-title span{
    color:#1671DE;
}

.mm-description{
    margin-top:26px;
    font-size:16px;
    line-height:1.7;
    color:#1d1d1d;
}

.mm-description strong{
    font-weight:700;
}

.mm-subtitle{
    margin-top:28px;
    font-size:22px;
    font-weight:700;
    color:#000;
}

.mm-text{
    margin-top:15px;
    font-size:15px;
    line-height:1.6;
    color:#1d1d1d;
}

.mm-list{
    list-style:none;
    padding:0;
    margin-top:20px;
}

.mm-list li{
    display:flex;
    align-items:flex-start;
    gap:12px;
    margin-bottom:14px;
    font-size:15px;
}

.check{
    width:18px;
    height:18px;
    border:2px solid #1671DE;
    border-radius:50%;
    color:#1671DE;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:9px;
    flex-shrink:0;
    margin-top:2px;
}

.mm-image-area{
    display:flex;
    flex-direction:column;
    align-items:flex-end;
}

.mm-image{
    width:100%;
    max-width:560px;
    border-radius:14px;
}

.mm-card{
    width:100%;
    max-width:560px;
    margin-top:30px;
    padding:24px;
    background:#EAF4FF;
    border:1px solid #1671DE;
    border-radius:14px;
}

.mm-card h2{
    margin:0;
    color:#1671DE;
    font-size:22px;
    font-weight:700;
}

.mm-card p{
    margin-top:18px;
    color:#1671DE;
    font-size:15px;
    line-height:1.6;
}

/*=================================
      WHY SECTION
=================================*/

.why-money{
    padding:20px;
    text-align:center;
}

.why-container{
    max-width:560px;
    margin:auto;
}

.why-container h2{
    font-family:"Roketto",sans-serif;
    font-size:46px;
    color:#000;
}

.why-container h2 span{
    color:#1671DE;
}

.why-container p{
    margin-top:20px;
    font-size:15px;
    line-height:1.6;
    color:#1d1d1d;
}

/*=================================
      KIT SECTION
=================================*/

.kit-section{
    padding:40px 20px 70px;
}

.kit-container{
    max-width:920px;
    margin:auto;
}

.kit-container>h2{
    text-align:center;
    font-family:"Roketto",sans-serif;
    font-size:46px;
    color:#000;
}

.kit-container>h2 span{
    color:#1671DE;
}

.kit-card{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:30px;
    align-items:center;
    background:#EEF5FF;
    padding:26px;
    border-radius:18px;
    margin-top:35px;
    box-shadow:0 10px 28px rgba(22,113,222,.12);
}

.kit-card.reverse .kit-image{
    order:2;
}

.kit-card.reverse .kit-content{
    order:1;
}

.kit-image img{
    width:100%;
    border-radius:10px;
    display:block;
}

.kit-content h3{
    margin:0;
    color:#1671DE;
    font-size:30px;
    font-weight:700;
}

.kit-content>p{
    margin-top:18px;
    color:#596274;
    font-size:15px;
    line-height:1.6;
}

.kit-content ul{
    list-style:none;
    padding:0;
    margin-top:20px;
}

.kit-content li{
    display:flex;
    align-items:flex-start;
    gap:10px;
    margin-bottom:12px;
    color:#334155;
    font-size:13px;
    line-height:1.5;
}

.kit-content li i{
    color:#16895B;
    font-size:15px;
    margin-top:2px;
    flex-shrink:0;
}

/*=================================
      TABLET
=================================*/

@media(max-width:991px){

.mm-container{
    grid-template-columns:1fr;
}

.mm-content{
    text-align:center;
}

.mm-list{
    max-width:550px;
    margin:auto;
    margin-top:20px;
    text-align:left;
}

.mm-image-area{
    align-items:center;
}

.mm-image{
    max-width:520px;
}

.mm-card{
    max-width:520px;
}

.kit-card{
    grid-template-columns:1fr;
}

.kit-card.reverse .kit-image,
.kit-card.reverse .kit-content{
    order:unset;
}

}

/*=================================
      MOBILE
=================================*/

@media(max-width:576px){

.mm-hero{
    padding:40px 16px;
}

.mm-title{
    font-size:36px;
}

.mm-description{
    font-size:15px;
}

.mm-card{
    padding:20px;
}

.mm-card h2{
    font-size:20px;
}

.mm-card p{
    font-size:14px;
}

.why-container h2{
    font-size:34px;
}

.kit-container>h2{
    font-size:34px;
}

.kit-section{
    padding:30px 16px 50px;
}

.kit-card{
    padding:18px;
    gap:20px;
}

.kit-content h3{
    font-size:24px;
}

.kit-content>p{
    font-size:14px;
}

.kit-content li{
    font-size:13px;
}

}
</style>
</head>
<body>
<div id="navbar"></div>
<main class="money-mastery">

    <!-- =========================
            HERO SECTION
    ========================== -->

    <section class="mm-hero">

        <div class="mm-container">

            <!-- Left -->

            <div class="mm-content">

                <p class="mm-label">
                    Money Mastery Program
                </p>

                <h1 class="mm-title">
                    Activity-Based Financial
                    <br>
                    Literacy Program for
                    <br>
                    <span>Classes 1-5</span>
                </h1>

                <p class="mm-description">

                    The <strong>Money Mastery Program</strong> is a comprehensive,
                    NEP 2020-aligned financial literacy curriculum designed to
                    help young learners develop essential money habits through
                    hands-on activities, storytelling, games, and real-world
                    experiences. Built on the principles of
                    <strong>Experiential Learning</strong>, the program transforms
                    financial concepts into engaging classroom experiences,
                    enabling students to learn by doing rather than memorizing.

                </p>

                <h3 class="mm-subtitle">
                    NEP 2020 Aligned
                </h3>

                <p class="mm-text">

                    The Money Mastery Program supports the vision of the National
                    Education Policy (NEP) 2020 by promoting:

                </p>

                <ul class="mm-list">

                    <li>
                        <span class="check">
                            <i class="fas fa-check"></i>
                        </span>
                        Experiential Learning
                    </li>

                    <li>
                        <span class="check">
                            <i class="fas fa-check"></i>
                        </span>
                        Activity-Based Education
                    </li>

                    <li>
                        <span class="check">
                            <i class="fas fa-check"></i>
                        </span>
                        Life Skills Development
                    </li>

                    <li>
                        <span class="check">
                            <i class="fas fa-check"></i>
                        </span>
                        Critical Thinking
                    </li>

                    <li>
                        <span class="check">
                            <i class="fas fa-check"></i>
                        </span>
                        Real-World Application of Knowledge
                    </li>

                    <li>
                        <span class="check">
                            <i class="fas fa-check"></i>
                        </span>
                        Holistic Student Development
                    </li>

                </ul>

            </div>

            <!-- Right -->

            <div class="mm-image-area">

                <img
                    src="../assets/images/phero2.png"
                    alt="Money Mastery"
                    class="mm-image"
                >

                <div class="mm-card">

                    <h2>
                        Preparing Children for Life, Not Just Exams
                    </h2>

                    <p>

                        Money Mastery equips young learners with practical
                        financial life skills that will help them make smarter
                        choices, become responsible citizens, and build a
                        strong foundation for their future.

                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- =========================
            WHY MONEY MASTERY
    ========================== -->

    <section class="why-money">

        <div class="why-container">

            <h2>

                Why Money
                <span>Mastery?</span>

            </h2>

            <p>

                Financial habits are formed early. Money Mastery introduces
                children to age-appropriate concepts such as saving, spending,
                budgeting, needs vs. wants, goal setting, entrepreneurship,
                and responsible decision-making in a fun and meaningful way.

            </p>

        </div>

    </section>

    <!-- =========================
            KIT SECTION
    ========================== -->

    <section class="kit-section">

        <div class="kit-container">

            <h2>

                What's Included in
                <span>Every Kit?</span>

            </h2>

            <!-- KIT 1 -->

            <article class="kit-card">

                <div class="kit-image">

                    <img src="../assets/images/kit1.png" alt="Kit 1">

                </div>

                <div class="kit-content">

                    <h3>1. Hands-On Activity Material</h3>

                    <p>

                        Turn complex theories into playtime. Our activity
                        materials are designed to keep entire classes engaged
                        through physical interaction.

                    </p>

                    <ul>

                        <li><i class="fas fa-check-circle"></i> Sized for groups of up to 40 students per session.</li>

                        <li><i class="fas fa-check-circle"></i> Durable, high-quality board games and token systems.</li>

                        <li><i class="fas fa-check-circle"></i> Simulates real-world scenarios like shopping and saving.</li>

                    </ul>

                </div>

            </article>

            <!-- KIT 2 -->

            <article class="kit-card reverse">

                <div class="kit-image">

                    <img src="../assets/images/kit2.png" alt="Kit 2">

                </div>

                <div class="kit-content">

                    <h3>2. Financial Literacy Story Book</h3>

                    <p>

                        Narrative-driven learning that sticks. Meet a cast
                        of relatable characters who face everyday financial
                        choices.

                    </p>

                    <ul>

                        <li><i class="fas fa-check-circle"></i> Age-appropriate vocabulary for students aged 6-11.</li>

                        <li><i class="fas fa-check-circle"></i> Beautifully illustrated chapters with hidden lessons.</li>

                        <li><i class="fas fa-check-circle"></i> Includes reflection questions at the end of every story.</li>

                    </ul>

                </div>

            </article>

            <!-- KIT 3 -->

            <article class="kit-card">

                <div class="kit-image">

                    <img src="../assets/images/kit3.png" alt="Kit 3">

                </div>

                <div class="kit-content">

                    <h3>3. Question Bank & Assessment Tools</h3>

                    <p>

                        Validate progress with fun, non-intimidating checkpoints
                        that ensure concepts are truly mastered.

                    </p>

                    <ul>

                        <li><i class="fas fa-check-circle"></i> Over 200+ curated questions across all grade levels.</li>

                        <li><i class="fas fa-check-circle"></i> Interactive quiz formats to reduce test anxiety.</li>

                        <li><i class="fas fa-check-circle"></i> Progress tracking sheets for individual student growth.</li>

                    </ul>

                </div>

            </article>

            <!-- KIT 4 -->

            <article class="kit-card reverse">

                <div class="kit-image">

                    <img src="../assets/images/kit4.png" alt="Kit 4">

                </div>

                <div class="kit-content">

                    <h3>4. Teacher Instruction Manual</h3>

                    <p>

                        Empowering educators to deliver world-class financial
                        education without prior finance expertise.

                    </p>

                    <ul>

                        <li><i class="fas fa-check-circle"></i> Scripted lesson plans and activity walkthroughs.</li>

                        <li><i class="fas fa-check-circle"></i> Time-management tips for 40-minute classroom slots.</li>

                        <li><i class="fas fa-check-circle"></i> Troubleshooting common student questions with ease.</li>

                    </ul>

                </div>

            </article>

            <!-- KIT 5 -->

            <article class="kit-card">

                <div class="kit-image">

                    <img src="../assets/images/kit5.png" alt="Kit 5">

                </div>

                <div class="kit-content">

                    <h3>5. Star Performer Bands</h3>

                    <p>

                        Gamify achievement with tangible rewards. These bands
                        serve as a badge of honor for students who excel in
                        financial tasks.

                    </p>

                    <ul>

                        <li><i class="fas fa-check-circle"></i> High-quality silicone bands in tiered colors.</li>

                        <li><i class="fas fa-check-circle"></i> Drives positive reinforcement and peer motivation.</li>

                        <li><i class="fas fa-check-circle"></i> A physical reminder of their growing money mastery.</li>

                    </ul>

                </div>

            </article>

        </div>

    </section>

</main>
<div id="footer"></div>

<script src="Components/footer-loader.js"></script>

<script src="Components/navbar-loader.js"></script>   
</body>
</html>
