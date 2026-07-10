<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financials</title>
    <link rel="icon" type="image/png" href="../assets/images/logo-new.png">
        <!-- Font Awesome -->
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

    /*====================================
        FINANCIAL PAGE
====================================*/

.financial-page{
    width:100%;
    background:#fff;
    overflow:hidden;
}

/*====================================
        HERO SECTION
====================================*/

.financial-hero{
    padding:20px 20px 0;
}

.financial-container{
    max-width:1180px;
    margin:auto;
    display:grid;
    grid-template-columns:1fr 540px;
    gap:70px;
    align-items:flex-start;
}

.financial-label{
    margin-bottom:18px;
    color:#0D6FEF;
    font-size:13px;
    font-weight:700;
}

.financial-title{
    font-family:"Roketto",sans-serif;
    font-size:52px;
    line-height:1.18;
    color:#000;
    margin:0;
}

.financial-title span{
    display:block;
    margin-top:8px;
    color:#1177F2;
}

.financial-description{
    margin-top:30px;
}

.financial-description p{
    margin-bottom:18px;
    font-size:15.5px;
    line-height:1.6;
    color:#1E1E1E;
}

.financial-image{
    width:100%;
    border-radius:16px;
    display:block;
}

.financial-info-card{
    margin-top:26px;
    padding:20px;
    border:1px solid #0D77FF;
    border-radius:14px;
    background:#E9F2FF;
}

.financial-info-card h3{
    margin:0;
    font-family:"Roketto",sans-serif;
    font-size:22px;
    color:#0D6FEF;
}

.financial-info-card p{
    margin-top:18px;
    color:#0D6FEF;
    line-height:1.6;
    font-size:15px;
}

/*====================================
        WHY BOOKS
====================================*/

.why-books{
    padding:70px 20px 0;
}

.why-container{
    max-width:970px;
    margin:auto;
}

.section-heading{
    text-align:center;
}

.section-heading h2{
    margin:0;
    font-family:"Roketto",sans-serif;
    font-size:44px;
    color:#000;
}

.section-heading span{
    color:#1177F2;
}

.section-heading p{
    max-width:530px;
    margin:28px auto 0;
    font-size:15px;
    line-height:1.6;
}

.why-grid{
    margin-top:35px;
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

.why-card{
    min-height:170px;
    background:#F7BE16;
    border:2px solid #1C1C1C;
    border-radius:12px;
    padding:24px 28px;
}

.why-card h3{
    text-align:center;
    margin:0;
    font-family:"Roketto",sans-serif;
    font-size:25px;
    color:#000;
}

.why-card ul{
    margin-top:20px;
    padding-left:20px;
}

.why-card li{
    margin-bottom:10px;
    line-height:1.45;
    font-size:14px;
}

/*====================================
        BEYOND STORY
====================================*/

.beyond-story{
    padding:70px 20px 70px;
}

.story-container{
    max-width:1120px;
    margin:auto;
}

.story-container>h2{
    text-align:center;
    font-family:"Roketto",sans-serif;
    font-size:44px;
    margin:0;
}

.story-container>h2 span{
    color:#1177F2;
}

.story-grid{
    margin-top:60px;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
}

.story-card{
    border-radius:14px;
    padding:28px;
    min-height:370px;
}

.light-card{
    background:#fff;
    border:1px solid #D4D4D4;
}

.dark-card{
    background:#2D2D2D;
    color:#fff;
}

.story-badge{
    display:inline-block;
    padding:7px 20px;
    border-radius:50px;
    background:#DCEEFF;
    color:#1177F2;
    font-size:11px;
    font-weight:700;
}

.story-badge.dark{
    background:#3B3C7A;
    color:#647CFF;
}

.story-card h3{
    margin-top:25px;
    font-family:"Roketto",sans-serif;
    font-size:30px;
    line-height:1.2;
}

.story-card p{
    margin-top:18px;
    line-height:1.6;
    font-size:15px;
}

.story-card h4{
    margin-top:28px;
    font-size:18px;
    font-weight:700;
}

.story-card ul{
    list-style:none;
    padding:0;
    margin-top:16px;
}

.story-card li{
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:12px;
    font-size:15px;
}

.story-card li i{
    color:#1177F2;
    font-size:20px;
}

.activity-grid{
    margin-top:40px;
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:14px;
}

.activity-item{
    display:flex;
    align-items:center;
    gap:10px;
    height:40px;
    padding:0 14px;
    border-radius:8px;
    border:1px solid rgba(255,255,255,.15);
    background:rgba(255,255,255,.08);
    font-size:14px;
}

.activity-item i{
    color:#647CFF;
    font-size:18px;
}

/*====================================
        TABLET
====================================*/

@media(max-width:991px){

.financial-container{
    grid-template-columns:1fr;
    gap:40px;
}

.financial-left{
    text-align:center;
}

.financial-description{
    max-width:700px;
    margin:auto;
    margin-top:25px;
}

.financial-right{
    max-width:600px;
    margin:auto;
}

.why-grid{
    grid-template-columns:1fr;
}

.story-grid{
    grid-template-columns:1fr;
}

.activity-grid{
    grid-template-columns:1fr 1fr;
}

}

/*====================================
        MOBILE
====================================*/

@media(max-width:576px){

.financial-hero,
.why-books,
.beyond-story{
    padding-left:16px;
    padding-right:16px;
}

.financial-title{
    font-size:38px;
}

.section-heading h2,
.story-container>h2{
    font-size:36px;
}

.why-card{
    padding:20px;
}

.why-card h3{
    font-size:22px;
}

.story-card{
    padding:22px;
}

.story-card h3{
    font-size:26px;
}

.activity-grid{
    grid-template-columns:1fr;
}

.activity-item{
    height:auto;
    min-height:42px;
    padding:10px 12px;
}

}
</style>
</head>
<body>
    <div id="navbar"></div>


<main class="financial-page">

    <!-- =====================================
                HERO SECTION
    ====================================== -->

    <section class="financial-hero">

        <div class="financial-container">

            <!-- LEFT -->

            <div class="financial-left">

                <p class="financial-label">
                    Financial Literacy Book Series
                </p>

                <h1 class="financial-title">

                    NEP 2020-Aligned Financial Literacy Books for

                    <span>
                        Classes 1-10
                    </span>

                </h1>

                <div class="financial-description">

                    <p>

                        The Fin Edu Quest Financial Literacy Book Series is a
                        thoughtfully designed collection of age-appropriate books
                        that introduce children to essential money concepts through
                        engaging stories, relatable characters, real-life
                        situations, and interactive learning experiences.

                    </p>

                    <p>

                        Developed by a team of education experts, financial
                        professionals, and child learning specialists, the series
                        helps students build practical financial life skills while
                        fostering critical thinking, responsible decision-making,
                        and financial confidence.

                    </p>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="financial-right">

                <img
                    src="../assets/images/financialshero.png"
                    alt="Financial Books"
                    class="financial-image"
                >

                <div class="financial-info-card">

                    <h3>
                        Creating Financially Smart Future Citizens
                    </h3>

                    <p>

                        More than just books, the Fin Edu Quest Financial Literacy
                        Series empowers students with practical knowledge,
                        responsible habits, and essential life skills preparing
                        them not only for academic success but for life beyond
                        the classroom.

                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================
            WHY OUR BOOKS
    ====================================== -->

    <section class="why-books">

        <div class="why-container">

            <div class="section-heading">

                <h2>

                    Why Our

                    <span>Books?</span>

                </h2>

                <p>

                    Financial literacy is a life skill best learned early.
                    Our books make complex financial concepts simple,
                    relatable, and enjoyable through storytelling and
                    experiential learning.

                </p>

            </div>

            <div class="why-grid">

                <!-- CARD 1 -->

                <article class="why-card">

                    <h3>Age-Appropriate Content</h3>

                    <ul>

                        <li>
                            Carefully designed for students from
                            Class 1 to Class 10
                        </li>

                        <li>
                            Concepts introduced progressively based
                            on cognitive development and learning levels
                        </li>

                    </ul>

                </article>

                <!-- CARD 2 -->

                <article class="why-card">

                    <h3>Story-Based Learning</h3>

                    <ul>

                        <li>
                            Engaging stories that connect financial concepts
                            to everyday life
                        </li>

                        <li>
                            Characters and situations students can relate to
                        </li>

                        <li>
                            Learning through experiences rather than
                            definitions
                        </li>

                    </ul>

                </article>

                <!-- CARD 3 -->

                <article class="why-card">

                    <h3>Professionally Designed Curriculum</h3>

                    <ul>

                        <li>
                            Developed by Chartered Accountants,
                            educators, curriculum specialists and
                            child learning experts
                        </li>

                        <li>
                            Trusted by schools and institutions
                        </li>

                    </ul>

                </article>

                <!-- CARD 4 -->

                <article class="why-card">

                    <h3>NEP 2020 Aligned</h3>

                    <ul>

                        <li>
                            Supports experiential learning,
                            competency-based education,
                            and life skills development
                        </li>

                        <li>
                            Encourages application of knowledge
                            in real-life situations
                        </li>

                    </ul>

                </article>

            </div>

        </div>

    </section>


    <!-- =====================================
            BEYOND THE STORY
    ====================================== -->

    <section class="beyond-story">

        <div class="story-container">

            <h2>

                Beyond

                <span>the Story</span>

            </h2>

            <div class="story-grid">

                <!-- LEFT CARD -->

                <article class="story-card light-card">

                    <span class="story-badge">
                        Classes 1 &amp; 2
                    </span>

                    <h3>
                        Parent Guide in Every Chapter
                    </h3>

                    <p>

                        Each chapter includes a dedicated Parent Guide
                        designed to help families reinforce financial
                        habits at home through meaningful conversations
                        and simple activities.

                    </p>

                    <h4>
                        Parents receive:
                    </h4>

                    <ul>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Discussion prompts
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Family activities
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Practical money lessons
                        </li>

                        <li>
                            <i class="fa-regular fa-circle-check"></i>
                            Everyday learning opportunities
                        </li>

                    </ul>

                </article>


                <!-- RIGHT CARD -->

                <article class="story-card dark-card">

                    <span class="story-badge dark">
                        Classes 3-10
                    </span>

                    <h3>
                        Experiential Learning Activities
                    </h3>

                    <p>

                        Each chapter includes a "Learn by Doing"
                        section where students apply concepts through:

                    </p>

                    <div class="activity-grid">

                        <div class="activity-item">
                            <i class="fa-regular fa-circle-check"></i>
                            Real-life challenges
                        </div>

                        <div class="activity-item">
                            <i class="fa-regular fa-circle-check"></i>
                            Reflection exercises
                        </div>

                        <div class="activity-item">
                            <i class="fa-regular fa-circle-check"></i>
                            Decision-making scenarios
                        </div>

                        <div class="activity-item">
                            <i class="fa-regular fa-circle-check"></i>
                            Budgeting activities
                        </div>

                        <div class="activity-item">
                            <i class="fa-regular fa-circle-check"></i>
                            Research tasks
                        </div>

                        <div class="activity-item">
                            <i class="fa-regular fa-circle-check"></i>
                            Entrepreneurial thinking
                        </div>

                    </div>

                </article>

            </div>

        </div>

    </section>

</main>

<div id="footer"></div>

<script src="Components/footer-loader.js"></script>

<script src="Components/navbar-loader.js"></script>
</body>
</html>
