<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HBK</title>

  <link rel="stylesheet" href="./main.css">

  <style>
    /* Styles for the hero section */
    #hero-section {
      position: relative;
      width: 100%;
      height: 100vh;
      background-color: #ffe4e6;
      background-image: url('./images/hero.jpg');
      background-size: cover;
      background-position: center;
    }

    .radial-gradient {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      background: radial-gradient(circle, rgba(0, 0, 0, 0.6), transparent);
    }

    .hero-content {
      position: relative;
      z-index: 10;
      display: grid;
      place-items: center;
      width: 100%;
      height: 100%;
      grid-template-columns: repeat(12, 1fr);
    }

    .hero-text {
      text-align: center;
      grid-column: span 7 / span 7;
      grid-column-start: 2;
      grid-column-end: 12;
    }

    .hero-title {
      color: white;
      font-size: 2.4rem;
      font-weight: bold;
      width: 70%;
      margin: 0 auto;
      font-family: 'EB Garamond', serif;
    }

    @media (min-width: 768px) {
      .hero-title {
        font-size: 7rem;
      }
    }

    .hero-description {
      color: rgba(255, 255, 255, 0.6);
      font-size: 1.25rem;
      margin-top: 1.25rem;
      max-width: 70%;
      margin-left: auto;
      margin-right: auto;
    }

    .hero-button {
      margin-top: 2.5rem;
    }

    .know-more-button {
      padding: 0.75rem 1.25rem;
      border: 2px solid var(--primary-color);
      border-radius: 0.375rem;
      color: var(--primary-color);
      transition: all 0.3s;
      background-color: white;
      text-decoration: none;
    }

    .know-more-button:hover {
      background-color: var(--primary-color);
      color: white;
      border: 1px solid white;
    }

    /* Styles for the menu section */
    .menu-section {
      width: 100%;
      height: auto;
    }
  </style>
</head>

<body>
  <?php
  include 'navigation.php';
  ?>

  <main>
    <section id="hero-section">
      <div class="radial-gradient"></div>
      <div class="hero-content">
        <div class="hero-text">
          <h1 class="hero-title">
            Amazing Food, Fresh Products
          </h1>
          <p class="hero-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum blanditiis cum ullam sequi aperiam autem ex quos officiis explicabo nesciunt quidem quam exercitationem expedita, rem aspernatur repudiandae tenetur suscipit consequuntur?
          </p>
          <div class="hero-button">
            <a href="#ourMenu" class="know-more-button">Know More</a>
          </div>
        </div>
      </div>
    </section>
    <section id="ourMenu" class="menu-section">
      <OurStory />
    </section>
  </main>

</body>

</html>