<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog | FLQ Knowledge Foundation</title>
  <link rel="icon" type="image/png" href="../assets/images/logo-new.png">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
  />
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background: #fff7df;
      color: #111111;
      font-family: "Red Hat Display", Arial, Helvetica, sans-serif;
    }

    main {
      overflow: hidden;
    }

    .blog-hero {
      position: relative;
      padding: 92px 18px 54px;
      background: linear-gradient(180deg, #fff2c9 0%, #ffffff 100%);
      text-align: center;
    }

    .blog-kicker {
      margin: 0 0 12px;
      color: #1671de;
      font-size: 13px;
      font-weight: 900;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .blog-title {
      margin: 0 auto;
      max-width: 850px;
      font-family: "Arial Black", Arial, Helvetica, sans-serif;
      font-size: clamp(36px, 6vw, 72px);
      line-height: 1.02;
      letter-spacing: 0;
      color: #050505;
    }

    .blog-title span {
      color: #1671de;
    }

    .blog-intro {
      margin: 20px auto 0;
      max-width: 710px;
      color: #393939;
      font-size: 17px;
      line-height: 1.65;
    }

    .blog-section {
      padding: 58px 18px 76px;
      background: #ffffff;
    }

    .blog-container {
      width: 100%;
      max-width: 1160px;
      margin: 0 auto;
    }

    .featured-post {
      display: grid;
      grid-template-columns: minmax(0, 1.05fr) minmax(320px, 0.95fr);
      gap: 34px;
      align-items: start;
      margin-bottom: 34px;
      border: 2px dashed #1671de;
      border-radius: 16px;
      background: #fffaf0;
      padding: 22px;
    }

    .featured-post img,
    .post-card img {
      width: 100%;
      display: block;
      object-fit: cover;
    }

    .featured-post img {
      height: 360px;
      border-radius: 12px;
    }

    .post-tag {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 14px;
      color: #1671de;
      font-size: 13px;
      font-weight: 900;
      text-transform: uppercase;
    }

    .featured-post h2,
    .post-card h3 {
      margin: 0;
      font-family: "Arial Black", Arial, Helvetica, sans-serif;
      color: #111111;
      letter-spacing: 0;
    }

    .featured-post h2 {
      font-size: clamp(28px, 4vw, 46px);
      line-height: 1.08;
    }

    .featured-post p,
    .post-card p,
    .article-body li {
      color: #333333;
      line-height: 1.65;
    }

    .featured-post p {
      margin: 18px 0 0;
      font-size: 16px;
    }

    .blog-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 22px;
    }

    .post-card {
      display: flex;
      flex-direction: column;
      min-height: 100%;
      border: 2px dashed #d3d8e1;
      border-radius: 14px;
      background: #ffffff;
      padding: 16px;
      transition: transform 260ms ease, border-color 260ms ease, box-shadow 260ms ease;
    }

    .post-card:hover {
      transform: translateY(-6px);
      border-color: #1671de;
      box-shadow: 0 18px 38px rgba(22, 113, 222, 0.12);
    }

    .post-card img {
      height: 190px;
      border-radius: 10px;
      margin-bottom: 18px;
    }

    .post-card h3 {
      font-size: 22px;
      line-height: 1.2;
    }

    .post-card p {
      margin: 12px 0 0;
      font-size: 15px;
    }

    .read-more {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      width: fit-content;
      margin-top: auto;
      padding: 13px 18px;
      border-radius: 999px;
      background: #1671de;
      color: #ffffff;
      font-size: 14px;
      font-weight: 900;
      line-height: 1;
      text-decoration: none;
      transition: transform 220ms ease, background 220ms ease, box-shadow 220ms ease;
    }

    .read-more:hover {
      transform: translateY(-2px);
      background: #0f5ebc;
      box-shadow: 0 12px 24px rgba(22, 113, 222, 0.22);
    }

    .article-body h4 {
      margin: 20px 0 8px;
      color: #111111;
      font-size: 17px;
      font-weight: 900;
    }

    .article-body ul {
      margin: 12px 0 0;
      padding-left: 20px;
    }

    .article-body li {
      margin: 6px 0;
      font-size: 15px;
    }

    .insight-strip {
      margin-top: 36px;
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 14px;
    }

    .insight-item {
      border-radius: 12px;
      background: #fff1c5;
      padding: 18px;
      border: 1px solid rgba(0, 0, 0, 0.08);
    }

    .insight-item i {
      color: #1671de;
      font-size: 22px;
    }

    .insight-item h4 {
      margin: 12px 0 6px;
      font-size: 16px;
      font-weight: 900;
    }

    .insight-item p {
      margin: 0;
      color: #555555;
      font-size: 13px;
      line-height: 1.45;
    }

    @media (max-width: 900px) {
      .featured-post,
      .blog-grid,
      .insight-strip {
        grid-template-columns: 1fr;
      }

      .featured-post img {
        height: 280px;
      }
    }

    @media (max-width: 560px) {
      .blog-hero {
        padding-top: 74px;
      }

      .featured-post {
        padding: 16px;
      }

      .featured-post img,
      .post-card img {
        height: 220px;
      }
    }
  </style>
</head>
<body>
<div id="navbar"></div>

<main>
  <section class="blog-hero">
    <p class="blog-kicker">FLQ Insights</p>
    <h1 class="blog-title">Financial literacy ideas for <span>schools, students and families</span></h1>
    <p class="blog-intro">
      Practical articles on school selection, holistic education, student growth and strong learning habits.
    </p>
  </section>

  <section class="blog-section">
    <div class="blog-container">
      <div class="blog-grid">
        <article class="post-card">
          <img src="../assets/images/blog1.png" alt="Parents choosing the right school">
          <span class="post-tag"><i class="fa-solid fa-book-open"></i> Parent Guide</span>
          <h3>Choosing the Right School: A Parent's Complete Guide</h3>
          <p>
            A practical guide for parents to evaluate academics, facilities, values, safety,
            communication and overall fit before choosing the right school.
          </p>
          <a class="read-more" href="Blog-Choosing-School.php">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="post-card">
          <img src="../assets/images/blog2.png" alt="Students learning through holistic education">
          <span class="post-tag"><i class="fa-solid fa-chalkboard-user"></i> Holistic Learning</span>
          <h3>Why Holistic Education Is the Future of Student Success</h3>
          <p>
            Holistic education develops the whole child by balancing academics with emotional,
            physical, social and creative growth for future-ready success.
          </p>
          <a class="read-more" href="Blog-Holistic-Education.php">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </article>

        <article class="post-card">
          <img src="../assets/images/blog3.png" alt="Student building strong study habits">
          <span class="post-tag"><i class="fa-solid fa-people-roof"></i> Study Skills</span>
          <h3>Building Strong Study Habits: Practical Tips for School Students</h3>
          <p>
            Smart study habits help students stay organized, reduce stress, improve academic
            performance and become confident independent learners.
          </p>
          <a class="read-more" href="Blog-Study-Habits.php">Read More <i class="fa-solid fa-arrow-right"></i></a>
        </article>
      </div>

      <div class="insight-strip">
        <div class="insight-item">
          <i class="fa-solid fa-school"></i>
          <h4>School Choice</h4>
          <p>Parents can compare academics, safety, values and facilities.</p>
        </div>
        <div class="insight-item">
          <i class="fa-solid fa-heart-pulse"></i>
          <h4>Whole Child</h4>
          <p>Holistic education balances mind, body, emotion and creativity.</p>
        </div>
        <div class="insight-item">
          <i class="fa-solid fa-bullseye"></i>
          <h4>Study Goals</h4>
          <p>Clear learning targets make daily study more focused.</p>
        </div>
        <div class="insight-item">
          <i class="fa-solid fa-handshake-angle"></i>
          <h4>Partnership</h4>
          <p>Parent-school communication strengthens student success.</p>
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
