<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" type="image/png" href="../assets/images/logo-new.png">

    <style>
        
        /*==========================
      ABOUT HERO
==========================*/
.Ptag{
    margin-top:16px;
    margin-bottom:16px;
    max-width:480px;
    font-size:16px;
    line-height:1.7;
    color:#000;
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
opacity:.4;
transform:scale(.85);
}

50%{
opacity:1;
transform:scale(1.25) rotate(18deg);
}
}

@keyframes heroFadeUp{
0%{
opacity:0;
transform:translateY(22px);
}

100%{
opacity:1;
transform:translateY(0);
}
}

.hero-title-font {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      font-weight: 900;
      line-height: 0.95;
      letter-spacing: -1.5px;
    }

    .hero-title-font span {
      display: block;
      font-size: 22px;
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

.hero-fade-up{
opacity:0;
animation:heroFadeUp .8s ease-out forwards;
}

.hero-delay-4{
animation-delay:.95s;
}

.hero-delay-5{
animation-delay:1.15s;
}
.about-hero{
    width:100%;
    background:#fff;
    overflow:hidden;
}

.about-hero-wrapper{
    position:relative;
    width:100%;
    min-height:calc(100vh - 120px);
    display:flex;
    justify-content:center;
    align-items:center;
    padding:10px 40px 0;
}

.about-hero-box{
    position:relative;
    width:100%;
    max-width:1050px;
    aspect-ratio:16/8;
    display:flex;
    justify-content:center;
    align-items:center;
}

/*==========================
      Background
==========================*/

.hero-bg{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    object-fit:contain;
    object-position:center;
    pointer-events:none;
    user-select:none;
}

/*==========================
      Decorative Images
==========================*/

.hero-star-big{
    position:absolute;
    left:1%;
    top:2%;
    width:70px;
    pointer-events:none;
}

.hero-arrow{
    position:absolute;
    left:1%;
    bottom:5%;
    width:85px;
    pointer-events:none;
}

.hero-light{
    position:absolute;
    right:12%;
    top:42%;
    width:52px;
    pointer-events:none;
}

.hero-star-small{
    position:absolute;
    left:12%;
    top:22%;
    width:28px;
    pointer-events:none;
}

.hero-star-right{
    position:absolute;
    right:4%;
    top:6%;
    width:55px;
    pointer-events:none;
}

/*==========================
      Hero Content
==========================*/

.hero-content{
    position:absolute;
    left:10%;
    top:20%;
    z-index:10;
    max-width:640px;
}

.hero-content h1{
    margin:0;
}

.hero-content h1 span{
    display:block;
    font-family:"Roketto",sans-serif;
    font-size:64px;
    line-height:1.08;
    color:#000;
}

.hero-content h1 .blue{
    color:#007BFF;
}

.hero-content p{
    margin-top:16px;
    max-width:480px;
    font-size:16px;
    line-height:1.7;
    color:#000;
}

/*==========================
      Discover Button
==========================*/

 .discover-btn {
  position: relative;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 44px;
  overflow: hidden;
  border: 0;
  border-radius: 999px;
  background: #F5BC18;
  color: #1f1f1f;
  padding: 0 26px;
  cursor: pointer;
  box-shadow: 0 5px 0 #101010;
  transition: transform 300ms ease, box-shadow 300ms ease;
  font-family: Arial, Helvetica, sans-serif;
}

 .discover-btn::before {
  content: "";
  position: absolute;
  inset: 0;
  background: #000000;
  transform: translateY(-100%);
  transition: transform 300ms ease-out;
}

 .discover-btn:hover {
  transform: translateY(2px);
  box-shadow: 0 3px 0 #101010;
}

 .discover-btn:hover::before {
  transform: translateY(0);
}

 .discover-btn span,
 .discover-btn a {
  position: relative;
  z-index: 2;
  color: #1f1f1f;
  text-decoration: none;
  font-size: 17px;
  font-weight: 500;
  transition: color 300ms ease;
}

 .discover-btn:hover span,
 .discover-btn:hover a {
  color: #F5BC18;
}

/*==========================
      Responsive
==========================*/

@media(max-width:1200px){

.hero-content{
left:10%;
top:18%;
max-width:520px;
}

.hero-content h1 span{
font-size:48px;
}

.hero-content p{
font-size:15px;
max-width:430px;
}

.hero-star-big{
width:68px;
}

.hero-arrow{
width:78px;
}

.hero-light{
width:48px;
}

.hero-star-small{
width:26px;
}

.hero-star-right{
width:46px;
}

}

@media(max-width:992px){

.about-hero-wrapper{
min-height:700px;
padding:30px;
}

.about-hero-box{
aspect-ratio:16/9;
}

.hero-content{
left:10%;
top:18%;
max-width:520px;
}

.hero-content h1 span{
font-size:56px;
}

.hero-content p{
font-size:16px;
}

.hero-star-big{
left:2%;
top:4%;
width:70px;
}

.hero-arrow{
left:7%;
bottom:6%;
width:78px;
}

.hero-light{
right:12%;
top:44%;
width:48px;
}

.hero-star-small{
left:12%;
top:23%;
width:26px;
}

.hero-star-right{
right:4%;
top:6%;
width:46px;
}

}

@media(max-width:768px){

.about-hero-wrapper{
padding:40px 20px;
min-height:640px;
}

.about-hero-box{
max-width:720px;
aspect-ratio:829/620;
}

.hero-content{
left:12%;
top:19%;
max-width:430px;
}

.hero-content h1 span{
font-size:48px;
}

.hero-content p{
font-size:12px;
line-height:1.6;
max-width:430px;
margin-top:16px;
}

.hero-star-big{
left:4%;
top:5%;
width:68px;
}

.hero-arrow{
left:7%;
bottom:1%;
width:62px;
}

.hero-light{
right:12%;
top:44%;
width:40px;
}

.hero-star-small{
left:12%;
top:23%;
width:22px;
}

.hero-star-right{
right:5%;
top:7%;
width:34px;
}

}

 @media (max-width: 639px) {
.discover-btn {
        min-height: 40px;
        max-width: 100%;
        margin-top: clamp(10px, 3vw, 14px);
        padding-inline: clamp(14px, 4vw, 20px);
      }
}

@media(max-width:480px){

.about-hero-wrapper{
padding:15px;
min-height:520px;
}

.about-hero-box{
max-width:430px;
aspect-ratio:829/691;
}

.hero-content{
left:8%;
top:22%;
max-width:260px;
}

.hero-content h1 span{
font-size:30px;
}

.hero-content p{
font-size:8px;
line-height:1.4;
max-width:180px;
margin-top:8px;
}

.hero-content .discover-btn{
min-height: 40px;
        max-width: 100%;
        margin-top: -10px;
        padding-inline: clamp(14px, 4vw, 20px);
}

.hero-star-big{
left:3%;
top:4%;
width:42px;
}

.hero-arrow{
left:5%;
bottom:1%;
width:38px;
}

.hero-light{
right:11%;
top:14%;
width:24px;
}

.hero-star-small{
left:13%;
top:25%;
width:14px;
}

.hero-star-right{
right:6%;
top:8%;
width:16px;
}

}

.our-story{
    width:100%;
    position:relative;
    background:
        linear-gradient(180deg, #ffffff 0%, #f7fbff 48%, #ffffff 100%);
    padding:78px 24px;
    overflow:hidden;
}

.our-story::before,
.our-story::after{
    content:"";
    position:absolute;
    width:220px;
    height:220px;
    border:1px solid rgba(22,113,222,.14);
    border-radius:36px;
    transform:rotate(18deg);
    pointer-events:none;
}

.our-story::before{
    left:-110px;
    top:88px;
}

.our-story::after{
    right:-120px;
    bottom:110px;
}

.our-story-container{
    width:100%;
    max-width:1320px;
    margin:auto;
    position:relative;
    z-index:1;
}

.our-story-heading{
    text-align:center;
    max-width:920px;
    margin:0 auto 38px;
}

.our-story-heading h2{
    font-size:clamp(36px, 3.5vw, 54px);
    font-weight:800;
    color:#000;
    line-height:1.08;
    letter-spacing:0;
    margin:0;
}

.our-story-heading span{
    color:#007BFF;
}

.our-story-heading p{
    max-width:680px;
    margin:18px auto 0;
    font-size:17px;
    line-height:26px;
    color:#40515e;
}

.our-story-content{
    width:100%;
    max-width:1220px;
    margin:0 auto;
    padding:46px clamp(34px, 4.5vw, 70px);
    border:1px solid rgba(22,113,222,.12);
    border-radius:24px;
    background:rgba(255,255,255,.94);
    box-shadow:0 24px 70px rgba(19,65,120,.09);
    font-size:16px;
    color:#1d2933;
    line-height:1.85;
}

.our-story-content p{
    margin:0 0 20px;
}

.our-story-content .bold{
    position:relative;
    margin:28px 0;
    padding:18px 22px 18px 58px;
    border-left:4px solid #1671DE;
    border-radius:16px;
    background:#eef6ff;
    color:#0c315f;
    font-size:18px;
    font-weight:700;
    line-height:1.55;
}

.our-story-content .bold::before{
    content:"";
    position:absolute;
    left:22px;
    top:24px;
    width:16px;
    height:16px;
    border-radius:50%;
    background:#F5BC18;
    box-shadow:0 0 0 6px rgba(245,188,24,.18);
}

.our-story-content strong{
    font-weight:700;
    color:#0b62c4;
}

@media(max-width:992px){

.our-story{
padding:64px 20px;
}

.our-story-content{
padding:36px 30px;
font-size:15px;
}

}

@media(max-width:768px){

.our-story{
padding:54px 18px;
}

.our-story-heading{
margin-bottom:34px;
}

.our-story-heading p{
font-size:15px;
line-height:23px;
}

.our-story-content{
padding:30px 22px;
font-size:14px;
line-height:1.8;
border-radius:18px;
}

.our-story-content .bold{
padding:16px 18px 16px 50px;
font-size:16px;
}

.our-story-content .bold::before{
left:18px;
top:23px;
}

}

@media(max-width:480px){

.our-story{
padding:48px 14px;
}

.our-story-heading p{
font-size:14px;
line-height:22px;
}

.our-story-content{
padding:24px 16px;
font-size:13px;
line-height:1.75;
}

.our-story-content p{
margin-bottom:18px;
}

.our-story-content .bold{
margin:24px 0;
padding:15px 16px 15px 44px;
font-size:15px;
line-height:1.5;
}

.our-story-content .bold::before{
left:16px;
top:22px;
width:12px;
height:12px;
box-shadow:0 0 0 5px rgba(245,188,24,.18);
}

} 

    </style>
</head>
<body>
<div id="navbar"></div>
<main>
    <section class="about-hero">

    <div class="about-hero-wrapper">

        <div class="about-hero-box">

            <!-- Background -->

            <img
                src="../assets/images/hero-bg.png"
                alt="Hero Background"
                class="hero-bg"
            >

            <!-- Decorative Images -->

            <img
                src="../assets/images/hero-star.png"
                class="hero-star-big animate-spin-soft"
                alt=""
            >

            <img
                src="../assets/images/heo-arrow.png"
                class="hero-arrow animate-float-reverse"
                alt=""
            >

            <img
                src="../assets/images/hero-light.png"
                class="hero-light animate-pulse-pop"
                alt=""
            >

            <img
                src="../assets/images/hero-star.png"
                class="hero-star-small animate-spin-soft"
                alt=""
            >

            <img
                src="../assets/images/hero-star.png"
                class="hero-star-right animate-twinkle"
                alt=""
            >

            <!-- Text -->

            <div class="hero-content">

                <h1 class="hero-title-font">

                    <span class="hero-left-animate hero-delay-1">
                        Birth of
                    </span>

                    <span class="hero-left-animate hero-delay-2">
                        FLQ Knowledge
                    </span>

                    <span class="blue hero-right-animate hero-delay-3">
                        Foundation
                    </span>

                </h1>

                <p class="Ptag hero-fade-up hero-delay-4">
                    Fineduquest empowers kids with literacy and life skills to
                    build confidence, make smart choices,
                    and create a better tomorrow.
                </p>

                

            </div>

        </div>

    </div>

</section>

<section class="our-story">

    <div class="our-story-container">

        <div class="our-story-heading">

            <h2>
                Our <span>Story</span>
            </h2>

            <p>
                Every meaningful movement begins with a simple question.
            </p>

        </div>

        <div class="our-story-content">

            <p class="bold">
                Why do we teach children how to earn money, but not how to manage it?
            </p>

            <p>
                This question brought together a group of Chartered Accountants,
                educators, civil servants, bankers, and industry professionals.
                Each of us had witnessed the same reality from different
                perspectives: highly educated individuals making poor financial
                decisions simply because no one had ever taught them the basics
                of money management.
            </p>

            <p>
                As we brainstormed, another, even bigger question emerged:
            </p>

            <p class="bold">
                Can India create a financially literate generation by 2047?
            </p>

            <p>
                The more we discussed, the clearer the challenge became. We
                realised that this ambitious mission could never be achieved
                through a few workshops, seminars, or awareness campaigns.
                Financial literacy is not a one-time lesson. It is a life skill
                that must be nurtured consistently over many years.
            </p>

            <p>
                That led us to a powerful realization.
            </p>

            <p class="bold">
                The only place where every child learns consistently over a long
                period of time is school.
            </p>

            <p>
                If India truly wants to build a financially literate generation
                by 2047, financial literacy cannot remain an optional awareness
                program. It must become a structured part of school education.
            </p>

            <p>
                Fortunately, the <strong>National Education Policy (NEP) 2020</strong>
                had already recognized financial literacy as an essential life
                skill. Schools were willing to embrace this vision.
            </p>

            <p>
                But another challenge soon became evident. There was no
                comprehensive, age-appropriate curriculum. There were very few
                trained educators. Schools wanted to implement financial literacy
                but lacked structured content that was engaging, practical, and
                easy to deliver.
            </p>

            <p>
                This was the gap we decided to fill.
            </p>

            <p>
                Months of research, collaboration, classroom discussions, and
                countless brainstorming sessions by educators and professionals
                culminated in the creation of a structured Financial Literacy
                Program aligned with <strong>NEP 2020</strong>. We developed our
                own story-based learning framework, age-wise curriculum,
                activity-driven pedagogy, assessment model, and book series that
                make financial concepts simple, relatable, and enjoyable for
                children from an early age.
            </p>

            <p>
                Thus was born <strong>FLQ Knowledge Foundation</strong>, a
                <strong> Section 8 organization registered with NITI Aayog</strong>,
                with one unwavering mission:
            </p>

            <p class="bold">
                To create a financially literate generation by 2047.
            </p>

            <p>
                We believe that when a child learns to save wisely, spend
                responsibly, invest thoughtfully, and make informed financial
                decisions, the impact extends far beyond the classroom. One
                financially literate child can transform an entire family.
                Thousands of such children can transform communities. Millions
                can transform a nation.
            </p>

            <p>
                This is more than an educational initiative.
            </p>

            <p>
                It is a movement to build a financially aware, responsible, and
                resilient India.
            </p>

            <p class="bold">
                The journey to a financially literate India begins with every
                child we educate today.
            </p>

        </div>

    </div>

</section>
</main>


<div id="footer"></div>

<script src="Components/footer-loader.js"></script>

<script src="Components/navbar-loader.js"></script>
</body>
</html>
