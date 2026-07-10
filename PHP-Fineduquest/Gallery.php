<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Photo Gallery | FLQ Knowledge Foundation</title>
  <link rel="icon" type="image/png" href="../assets/images/logo-new.png">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background: #ffffff;
      color: #111111;
      font-family: "Red Hat Display", Arial, Helvetica, sans-serif;
    }

    main {
      overflow: hidden;
    }

    .gallery-page {
      padding: 84px 18px 96px;
      background: #ffffff;
    }

    .gallery-container {
      width: 100%;
      max-width: 1120px;
      margin: 0 auto;
    }

    .gallery-eyebrow {
      margin: 0 0 18px;
      color: #1671de;
      font-size: 18px;
      font-weight: 900;
      line-height: 1;
    }

    .gallery-heading-row {
      display: grid;
      grid-template-columns: minmax(0, 1.15fr) minmax(280px, 0.85fr);
      gap: 48px;
      align-items: end;
      margin-bottom: 64px;
    }

    .gallery-title {
      margin: 0;
      font-family: "Arial Black", Arial, Helvetica, sans-serif;
      font-size: clamp(44px, 7vw, 76px);
      line-height: 0.95;
      letter-spacing: 0;
      color: #050505;
    }

    .gallery-subtitle {
      margin: 0 0 8px;
      max-width: 430px;
      color: #3b3b3b;
      font-size: 18px;
      line-height: 1.55;
    }

    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      gap: 22px;
    }

    .gallery-card {
      position: relative;
      overflow: hidden;
      min-height: 260px;
      border-radius: 14px;
      background: #f3f3f3;
    }

    .gallery-card.large {
      grid-column: span 5;
      min-height: 320px;
    }

    .gallery-card.medium {
      grid-column: span 4;
      min-height: 320px;
    }

    .gallery-card.small {
      grid-column: span 3;
      min-height: 320px;
    }

    .gallery-card.wide {
      grid-column: span 6;
      min-height: 320px;
    }

    .gallery-card img {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
      transition: transform 500ms ease;
    }

    .gallery-card:hover img {
      transform: scale(1.045);
    }

    .gallery-card::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, transparent 56%, rgba(0, 0, 0, 0.42));
      opacity: 0;
      transition: opacity 260ms ease;
    }

    .gallery-card:hover::after {
      opacity: 1;
    }

    .gallery-caption {
      position: absolute;
      left: 18px;
      right: 18px;
      bottom: 16px;
      z-index: 2;
      margin: 0;
      color: #ffffff;
      font-size: 15px;
      font-weight: 800;
      line-height: 1.25;
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 260ms ease, transform 260ms ease;
    }

    .gallery-card:hover .gallery-caption {
      opacity: 1;
      transform: translateY(0);
    }

    @media (max-width: 900px) {
      .gallery-heading-row {
        grid-template-columns: 1fr;
        gap: 18px;
        margin-bottom: 42px;
      }

      .gallery-card.large,
      .gallery-card.medium,
      .gallery-card.small,
      .gallery-card.wide {
        grid-column: span 6;
        min-height: 280px;
      }
    }

    @media (max-width: 620px) {
      .gallery-page {
        padding: 68px 14px 70px;
      }

      .gallery-eyebrow {
        font-size: 15px;
      }

      .gallery-subtitle {
        font-size: 15px;
      }

      .gallery-grid {
        gap: 14px;
      }

      .gallery-card.large,
      .gallery-card.medium,
      .gallery-card.small,
      .gallery-card.wide {
        grid-column: 1 / -1;
        min-height: 240px;
      }
    }
  </style>
</head>
<body>
<div id="navbar"></div>

<main>
  <section class="gallery-page">
    <div class="gallery-container">
      <p class="gallery-eyebrow">Our Stories</p>

      <div class="gallery-heading-row">
        <h1 class="gallery-title">Photo Gallery</h1>
        <p class="gallery-subtitle">
          Captured moments from our schools, learning sessions, awards and student activities.
        </p>
      </div>

      <div class="gallery-grid">
        <figure class="gallery-card large">
          <img src="../assets/gallery/1.png" alt="Students participating in a computer lab session">
          <figcaption class="gallery-caption">Financial literacy classroom session</figcaption>
        </figure>

        <figure class="gallery-card medium">
          <img src="../assets/gallery/2.png" alt="Educators conducting a student workshop">
          <figcaption class="gallery-caption">Interactive workshop with educators</figcaption>
        </figure>

        <figure class="gallery-card small">
          <img src="../assets/gallery/3.png" alt="Students participating in a library activity">
          <figcaption class="gallery-caption">Activity-based money learning</figcaption>
        </figure>

        <figure class="gallery-card small">
          <img src="../assets/gallery/4.png" alt="Award presentation at a partner school">
          <figcaption class="gallery-caption">Partner school recognition</figcaption>
        </figure>

        <figure class="gallery-card small">
          <img src="../assets/gallery/5.png" alt="Student holding a certificate of merit">
          <figcaption class="gallery-caption">Student achievement moments</figcaption>
        </figure>

        <figure class="gallery-card small">
          <img src="../assets/gallery/6.png" alt="Recognition event at a partner school">
          <figcaption class="gallery-caption">School partnership celebration</figcaption>
        </figure>

        <figure class="gallery-card small">
          <img src="../assets/gallery/7.png" alt="Student holding a financial literacy certificate">
          <figcaption class="gallery-caption">Certificate distribution</figcaption>
        </figure>

        <figure class="gallery-card large">
          <img src="../assets/gallery/8.png" alt="Students attending a financial literacy seminar">
          <figcaption class="gallery-caption">Student awareness seminar</figcaption>
        </figure>

        <figure class="gallery-card medium">
          <img src="../assets/gallery/9.png" alt="Students receiving medals and certificates">
          <figcaption class="gallery-caption">Award ceremony at school</figcaption>
        </figure>

        <figure class="gallery-card small">
          <img src="../assets/gallery/10.png" alt="Students reading a Fin Edu Quest book">
          <figcaption class="gallery-caption">Learning through FLQ books</figcaption>
        </figure>

        <figure class="gallery-card wide">
          <img src="../assets/gallery/11.png" alt="Students writing an exam in a classroom">
          <figcaption class="gallery-caption">Financial literacy assessment</figcaption>
        </figure>

        <figure class="gallery-card wide">
          <img src="../assets/gallery/12.png" alt="Students receiving certificates with teachers">
          <figcaption class="gallery-caption">Celebrating student success</figcaption>
        </figure>
      </div>
    </div>
  </section>
</main>

<div id="footer"></div>

<script src="Components/navbar-loader.js"></script>
<script src="Components/footer-loader.js"></script>
</body>
</html>
