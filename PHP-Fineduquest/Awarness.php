<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awareness & Impact Initiatives</title>
    <link rel="icon" type="image/png" href="../assets/images/logo-new.png">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    />
    <style>
      /*==========================================
        GLOBAL
==========================================*/

*{
    box-sizing:border-box;
}

body{
    margin:0;
    background:#ffffff;
    color:#111111;
    font-family:"Red Hat Display",Arial,Helvetica,sans-serif;
}

main{
    overflow:hidden;
}

.container{
    width:100%;
    max-width:1280px;
    margin:0 auto;
    padding:0;
}

.section-heading{
    text-align:center;
    margin-bottom:36px;
}

.section-heading h2{
    margin:0;
    font-family:"Arial Black",Arial,Helvetica,sans-serif;
    font-size:48px;
    font-weight:900;
    line-height:1.05;
    letter-spacing:0;
    color:#111111;
}

.section-heading h2 span{
    color:#1671DE;
}

.section-heading p{
    margin:14px 0 0;
    font-size:15px;
    color:#555555;
    line-height:1.5;
}

/*==========================================
        HERO
==========================================*/

.awareness-hero{
    padding:72px 0 44px;
    background:#ffffff;
}

.awareness-grid{
    display:grid;
    grid-template-columns:minmax(0,600px) minmax(420px,540px);
    gap:90px;
    align-items:start;
}

.hero-left{
    padding-top:7px;
}

.hero-subtitle{
    margin:0 0 18px;
    color:#1671DE;
    font-size:13px;
    font-weight:800;
    line-height:1.2;
}

.hero-title{
    margin:0;
    max-width:590px;
    font-family:"Arial Black",Arial,Helvetica,sans-serif;
    font-size:45px;
    font-weight:900;
    line-height:1.34;
    letter-spacing:0;
    color:#050505;
}

.hero-title span{
    display:block;
    margin-top:3px;
    color:#1671DE;
}

.hero-text{
    margin:28px 0 0;
    max-width:600px;
    color:#252525;
    font-size:16px;
    line-height:1.43;
}

.hero-text + .hero-text{
    margin-top:0;
}

.hero-image{
    display:block;
    width:100%;
    height:291px;
    object-fit:cover;
    object-position:center;
    border-radius:15px;
}

.hero-card{
    margin-top:28px;
    border:2px solid #1671DE;
    background:#EAF4FF;
    border-radius:16px;
    padding:18px 20px 20px;
}

.hero-card h2{
    margin:0 0 14px;
    color:#1671DE;
    font-family:Arial,Helvetica,sans-serif;
    font-size:23px;
    font-weight:800;
    line-height:1.2;
}

.hero-card p{
    margin:0;
    color:#1671DE;
    font-size:16px;
    line-height:1.5;
}

/*==========================================
        KIT
==========================================*/

.kit-section,
.development-section{
    width:100%;
    margin:0 auto;
    padding:34px 0 31px;
    background:#2F2F2F;
    border-radius:28px;
}

.kit-section .section-heading,
.development-section .section-heading{
    margin-bottom:35px;
}

.kit-section .section-heading h2,
.development-section .section-heading h2{
    color:#ffffff;
}

.kit-section .section-heading p,
.development-section .section-heading p{
    color:#d6d6d6;
}

.kit-grid,
.development-grid{
    display:grid;
    grid-template-columns:repeat(3,minmax(0,1fr));
    gap:24px;
    padding:0 48px;
}

.kit-card,
.development-card{
    min-height:174px;
    background:#ffffff;
    border:0;
    border-radius:14px;
    padding:16px 18px 18px;
    text-align:left;
    box-shadow:none;
    transition:transform .28s ease, box-shadow .28s ease;
}

.kit-card:hover,
.development-card:hover{
    transform:translateY(-5px);
    box-shadow:0 15px 25px rgba(0,0,0,.16);
}

.number{
    display:block;
    width:auto;
    height:auto;
    margin:0 0 4px;
    background:transparent;
    color:#FFC21F;
    font-family:Arial,Helvetica,sans-serif;
    font-size:33px;
    font-weight:900;
    line-height:1;
}

.kit-card h3,
.development-card h3{
    display:inline;
    margin:0;
    padding-bottom:2px;
    color:#050505;
    border-bottom:1px solid #d8d8d8;
    font-family:"Arial Black",Arial,Helvetica,sans-serif;
    font-size:24px;
    font-weight:900;
    line-height:.98;
    letter-spacing:0;
}

.kit-card p,
.development-card p{
    margin:12px 0 0;
    color:#2c2c2c;
    font-size:15px;
    line-height:1.45;
}

/*==========================================
        JOURNEY
==========================================*/

.journey-section{
    padding:92px 0 78px;
    background:#ffffff;
}

.journey-section .section-heading{
    margin-bottom:55px;
}

.journey-grid{
    position:relative;
    display:grid;
    grid-template-columns:repeat(7,minmax(100px,1fr));
    gap:8px;
    align-items:start;
    height:250px;
}

.journey-grid::before{
    content:"";
    position:absolute;
    left:58px;
    right:58px;
    top:26px;
    height:156px;
    z-index:0;
    pointer-events:none;
 background:url("data:image/svg+xml,%3Csvg width='1050' height='95' viewBox='0 0 1050 95' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M6 37 C55 -20 107 -10 144 50 C178 105 219 104 258 44 C299 -19 348 -17 389 44 C431 106 475 103 516 41 C558 -19 607 -15 648 45 C690 107 735 103 778 40 C820 -20 869 -15 910 45 C949 103 995 105 1044 51' stroke='%231671DE' stroke-width='3' stroke-linecap='round' stroke-dasharray='12 16'/%3E%3C/svg%3E") center/100% 100% no-repeat;}

.journey-card{
    position:relative;
    z-index:1;
    text-align:center;
    transform:translateY(var(--journey-y,0));
}

.journey-card:nth-child(even){
    padding-top:0;
}

.journey-card:nth-child(1){ --journey-y:35px; }
.journey-card:nth-child(2){ --journey-y:112px; }
.journey-card:nth-child(3){ --journey-y:13px; }
.journey-card:nth-child(4){ --journey-y:90px; }
.journey-card:nth-child(5){ --journey-y:82px; }
.journey-card:nth-child(6){ --journey-y:10px; }
.journey-card:nth-child(7){ --journey-y:112px; }

.journey-card:nth-child(3) h3,
.journey-card:nth-child(6) h3{
    margin-top:11px;
}

.circle{
    position:relative;
    display:flex;
    justify-content:center;
    align-items:center;
    width:78px;
    height:78px;
    margin:0 auto;
    border:16px solid #EEECE2;
    border-radius:50%;
    background:#1671DE;
    color:#ffffff;
    font-size:25px;
}

.count{
    position:absolute;
    left:-26px;
    top:-21px;
    display:flex;
    justify-content:center;
    align-items:center;
    width:30px;
    height:30px;
    border-radius:50%;
    background:#FFC21F;
    color:#000000;
    font-size:13px;
    font-weight:900;
}

.journey-card h3{
    margin:14px auto 0;
    max-width:125px;
    color:#111111;
    font-family:"Arial Black",Arial,Helvetica,sans-serif;
    font-size:14px;
    font-weight:900;
    line-height:1.3;
}

/*==========================================
        DEVELOPMENT
==========================================*/

.development-section{
    margin-top:0;
    padding-top:40px;
    padding-bottom:35px;
}

.development-card i{
    display:block;
    margin:0 0 8px;
    color:#0c0c0c;
    font-size:29px;
    line-height:1;
}

/*==========================================
        RESPONSIVE
==========================================*/

@media(max-width:1100px){
    .container{
        padding:0 34px;
    }

    .awareness-grid{
        grid-template-columns:1fr;
        gap:34px;
    }

    .hero-right{
        max-width:650px;
        margin:auto;
    }

    .kit-grid,
    .development-grid{
        grid-template-columns:repeat(2,1fr);
        padding:0;
    }

    .journey-grid{
        display:flex;
        flex-wrap:wrap;
        justify-content:center;
        width:100%;
        max-width:920px;
        height:auto;
        margin:0 auto;
        gap:30px 16px;
    }

    .journey-grid::before{
        display:none;
    }

    .journey-card,
    .journey-card:nth-child(n){
        flex:0 1 calc(25% - 12px);
        min-width:150px;
        min-height:128px;
        padding:12px 6px;
        transform:none;
    }

    .journey-card h3,
    .journey-card:nth-child(3) h3,
    .journey-card:nth-child(6) h3{
        margin:14px auto 0;
    }

    .journey-section{
        padding:72px 0 68px;
    }

    .journey-section .section-heading{
        margin-bottom:44px;
    }
}

@media(max-width:768px){
    .container{
        padding:0 20px;
    }

    .awareness-hero{
        padding:48px 0 34px;
    }

    .hero-title{
        font-size:38px;
        line-height:1.22;
    }

    .hero-image{
        height:auto;
        aspect-ratio:540/291;
    }

    .section-heading h2{
        font-size:36px;
    }

    .kit-section,
    .development-section{
        border-radius:22px;
        padding:36px 20px;
    }

    .kit-grid,
    .journey-grid,
    .development-grid{
        grid-template-columns:1fr;
    }

    .journey-section{
        padding:58px 0 64px;
    }

    .journey-section .section-heading{
        margin-bottom:34px;
    }

    .journey-grid{
        display:grid;
        width:100%;
        max-width:340px;
        height:auto;
        margin:0 auto;
        padding:0 12px;
        gap:0;
    }

    .journey-grid::before{
        display:block;
        left:50px;
        right:auto;
        top:48px;
        bottom:48px;
        width:0;
        height:auto;
        border-left:2px dashed rgba(22,113,222,.42);
        background:none;
    }

    .journey-card,
    .journey-card:nth-child(n){
        display:grid;
        min-width:0;
        grid-template-columns:76px minmax(0,1fr);
        align-items:center;
        gap:18px;
        min-height:112px;
        padding:12px 0;
        text-align:left;
        transform:none;
    }

    .journey-card .circle{
        position:relative;
        z-index:2;
        margin:0;
    }

    .journey-card .count{
        left:-8px;
        top:-10px;
        width:27px;
        height:27px;
        font-size:12px;
    }

    .journey-card h3,
    .journey-card:nth-child(3) h3,
    .journey-card:nth-child(6) h3{
        max-width:none;
        margin:0;
        font-size:16px;
        line-height:1.35;
    }

    .kit-card,
    .development-card{
        min-height:auto;
    }

    .circle{
        width:76px;
        height:76px;
    }
}

@media(max-width:480px){
    .hero-title{
        font-size:31px;
    }

    .hero-text,
    .hero-card p{
        font-size:14px;
    }

    .hero-card h2{
        font-size:20px;
    }

    .section-heading h2{
        font-size:30px;
    }

    .section-heading p{
        font-size:14px;
    }

    .kit-card h3,
    .development-card h3{
        font-size:21px;
    }
}
    </style>
</head>
<body>

<div id="navbar"></div>

<main>

    <!-- ==========================================
            HERO SECTION
    =========================================== -->

    <section class="awareness-hero">

        <div class="container awareness-grid">

            <!-- LEFT -->

            <div class="hero-left">

                <p class="hero-subtitle">
                    Awareness &amp; Impact Initiatives
                </p>

                <h1 class="hero-title">
                    Building Financially Smart Students Through Financial Literacy
                    <span>Classes 1-10</span>
                </h1>

                <p class="hero-text">
                    Our Financial Literacy Program is designed to equip students
                    with essential financial knowledge through an engaging,
                    activity-based learning experience. Using a comprehensive
                    Financial Literacy Kit—including a Financial Literacy Book,
                    Budget Book, Dream Tracker Piggy Bank, and digital
                    assessment tools—students develop lifelong skills in
                    saving, budgeting, goal setting, and responsible money
                    management.
                </p>

                <p class="hero-text">
                    The program also includes measurable impact assessments
                    and an online progress tracking portal, making it an
                    ideal CSR initiative for creating sustainable educational
                    outcomes.
                </p>

            </div>

            <!-- RIGHT -->

            <div class="hero-right">

                <img
                    src="../assets/images/financialshero.png"
                    alt=""
                    class="hero-image"
                >

                <div class="hero-card">

                    <h2>
                        Creating Financially Smart Future Citizens
                    </h2>

                    <p>
                        More than just a learning kit, our Financial Literacy
                        Program inspires positive financial behaviours from an
                        early age. By combining interactive learning,
                        practical activities, and measurable impact tracking,
                        we empower students to make informed financial
                        decisions, achieve their goals, and build a
                        financially secure future.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- ==========================================
            WHAT'S INSIDE THE KIT
    =========================================== -->

    <section class="kit-section">

        <div class="container">

            <div class="section-heading">

                <h2>
                    What's inside the
                    <span>kits?</span>
                </h2>

                <p>
                    A comprehensive toolkit designed for practical learning
                    and lasting results.
                </p>

            </div>

            <div class="kit-grid">

                <div class="kit-card">

                    <span class="number">01</span>

                    <h3>Premium Kit Bag</h3>

                    <p>
                        A durable, branded bag that students carry with pride,
                        keeping all materials organized.
                    </p>

                </div>

                <div class="kit-card">

                    <span class="number">02</span>

                    <h3>Literacy Book</h3>

                    <p>
                        Illustrated story-based guide explaining core financial
                        concepts in regional languages.
                    </p>

                </div>

                <div class="kit-card">

                    <span class="number">03</span>

                    <h3>Budget Book</h3>

                    <p>
                        A practical ledger for students to track their
                        imaginary and real-world expenses.
                    </p>

                </div>

                <div class="kit-card">

                    <span class="number">04</span>

                    <h3>Dream Tracker Piggy Bank</h3>

                    <p>
                        Goal based saving tool that visually represents
                        progress toward personal dreams.
                    </p>

                </div>

                <div class="kit-card">

                    <span class="number">05</span>

                    <h3>Impact Assessment</h3>

                    <p>
                        Pre and post-program evaluations to measure the
                        quantitative shift in knowledge.
                    </p>

                </div>

                <div class="kit-card">

                    <span class="number">06</span>

                    <h3>Online Progress Portal</h3>

                    <p>
                        A dedicated dashboard for sponsors to track program
                        metrics in real-time.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- ==========================================
            LEARNING JOURNEY
    =========================================== -->

    <section class="journey-section">

        <div class="container">

            <div class="section-heading">

                <h2>
                    The Learning
                    <span>Journey?</span>
                </h2>

                <p>
                    How we turn CSR Contributions into student success.
                </p>

            </div>

            <div class="journey-grid">

                <div class="journey-card">
                    <div class="circle">
                        <span class="count">1</span>
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </div>
                    <h3>CSR Sponsor</h3>
                </div>

                <div class="journey-card">
                    <div class="circle">
                        <span class="count">2</span>
                        <i class="fa-solid fa-school"></i>
                    </div>
                    <h3>School Selection</h3>
                </div>

                <div class="journey-card">
                    <div class="circle">
                        <span class="count">3</span>
                        <i class="fa-solid fa-briefcase"></i>
                    </div>
                    <h3>Kit Distribution</h3>
                </div>

                <div class="journey-card">
                    <div class="circle">
                        <span class="count">4</span>
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3>Student Activities</h3>
                </div>

                <div class="journey-card">
                    <div class="circle">
                        <span class="count">5</span>
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <h3>Teacher Monitoring</h3>
                </div>

                <div class="journey-card">
                    <div class="circle">
                        <span class="count">6</span>
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3>Impact Assessment</h3>
                </div>

                <div class="journey-card">
                    <div class="circle">
                        <span class="count">7</span>
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <h3>CSR Report</h3>
                </div>

            </div>

        </div>

    </section>



    <!-- ==========================================
            HOLISTIC DEVELOPMENT
    =========================================== -->

    <section class="development-section">

        <div class="container">

            <div class="section-heading">

                <h2>
                    Holistic Development
                </h2>

                <p>
                    Measuring success through behavioral change and life skills.
                </p>

            </div>

            <div class="development-grid">

                <div class="development-card">
                    <i class="fa-solid fa-dollar-sign"></i>
                    <h3>Saving Habits</h3>
                    <p>
                        Cultivating the discipline of putting aside income
                        for future needs.
                    </p>
                </div>

                <div class="development-card">
                    <i class="fa-solid fa-bullseye"></i>
                    <h3>Goal Setting</h3>
                    <p>
                        Defining clear financial milestones and how to achieve them.
                    </p>
                </div>

                <div class="development-card">
                    <i class="fa-solid fa-lightbulb"></i>
                    <h3>Financial Awareness</h3>
                    <p>
                        Understanding inflation, interest and value of money.
                    </p>
                </div>

                <div class="development-card">
                    <i class="fa-solid fa-landmark"></i>
                    <h3>Responsible Money Management</h3>
                    <p>
                        Learning needs vs wants for smarter spending decisions.
                    </p>
                </div>

                <div class="development-card">
                    <i class="fa-solid fa-circle-check"></i>
                    <h3>Decision Making Skills</h3>
                    <p>
                        Better financial decisions through analytical thinking.
                    </p>
                </div>

                <div class="development-card">
                    <i class="fa-solid fa-chart-simple"></i>
                    <h3>Confident Future Citizens</h3>
                    <p>
                        Empowering students to navigate adult financial life
                        confidently.
                    </p>
                </div>

            </div>

        </div>

    </section>

</main>

<div id="footer"></div>

<script src="Components/navbar-loader.js"></script>
<script src="Components/footer-loader.js"></script>

</body>
</html>
