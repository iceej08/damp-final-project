<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Homepage - Veggie Vibes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Cormorant+Garamond:wght@600&family=Cormorant+Infant&display=swap" rel="stylesheet" />
 <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f2f2f2;
    }

    .section-title {
      font-family: 'Cormorant Infant', serif;
      font-size: 2rem;
      text-align: center;
      margin-top: 2rem;
      margin-bottom: 1rem;
    }

    .menu-category span {
      font-family: 'Poppins', sans-serif;
      font-size: 1rem;
      background-color: #3b7d4d;
      color: white;
      padding: 0.4rem 1rem;
      border-radius: 1rem;
      margin: 0 0.5rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .menu-category span:hover {
      background-color: #2e653e;
    }

    .card {
      border: none;
      border-radius: 2rem;
      background-color: white;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .card-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.25rem;
      margin-bottom: 0.5rem;
    }

    .card-text {
      font-family: 'Cormorant Infant', serif;
      font-size: 0.95rem;
    }

    .feature-box {
      border-radius: 1rem;
      background-color: white;
      padding: 1rem;
      margin-top: 2rem;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .feature-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
    }

    .feature-title {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.5rem;
    }

    .feature-text {
      font-family: 'Cormorant Infant', serif;
      font-size: 1rem;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
  </style>
</head>
<body>
  <?php

  ob_start();
  ?>
  <div class="container">
    <div class="feature-box row align-items-center">
      <div class="col-md-6">
        <img src="images/menu_atas.png" alt="Tofu Avocado Power Bowl" class="img-fluid rounded" />
      </div>
      <div class="col-md-6 text-center">
        <h4 class="feature-title">Tofu Avocado Power Bowl</h4>
        <p class="feature-text">
          This Tofu Avocado Power Bowl is a vibrant and nutritious meal packed with plant-based protein.
          It features crispy tofu, creamy avocado, and a mix of fresh vegetables like edamame, kale, and carrots.
          A savory peanut-ginger dressing ties everything together with rich, tangy flavor.
        </p>
      </div>
    </div>
  </div>

  <div class="container">
    <h2 class="section-title">Don’t Know What To Eat?</h2>
   <div class="row menu-category text-center my-4">
  <div class="col-md-4">
    <span>BREAKFAST</span>
  </div>
  <div class="col-md-4">
    <span>LUNCH</span>
  </div>
  <div class="col-md-4">
    <span>DINNER</span>
  </div>
</div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card p-2">
          <img src="images/menubf1.png" class="card-img-top rounded" alt="Avocado Egg Toast Salad" />
          <div class="card-body">
            <h5 class="card-title">Avocado Egg Toast Salad</h5>
            <p class="card-text">Creamy avocado, cheesy egg, with fresh salad</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-2">
          <img src="images/menubf2.png" class="card-img-top rounded" alt="Mixed Veggie Power Bowl" />
          <div class="card-body">
            <h5 class="card-title">Mixed Veggie Power Bowl</h5>
            <p class="card-text">Hearty, colorful bowl of fresh vegetables</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-2">
          <img src="images/menulunch1.png" class="card-img-top rounded" alt="Plant Based Veggie Stir-Fry" />
          <div class="card-body">
            <h5 class="card-title">Plant Based Veggie Stir-Fry</h5>
            <p class="card-text">Colorful stir-fry with imitation beef from soy</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-2">
          <img src="images/menulunch2.png" class="card-img-top rounded" alt="Chicken Sweet Potato Box" />
          <div class="card-body">
            <h5 class="card-title">Chicken Sweet Potato Box</h5>
            <p class="card-text">Hearty, balanced meal with fresh colors</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-2">
          <img src="images/menudin1.png" class="card-img-top rounded" alt="Bibimbap Bowl Delight" />
          <div class="card-body">
            <h5 class="card-title">Bibimbap Bowl Delight</h5>
            <p class="card-text">Colorful rice bowl with savory toppings</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-2">
          <img src="images/menudin2.png" class="card-img-top rounded" alt="Stir-Fried Veggie Mix" />
          <div class="card-body">
            <h5 class="card-title">Stir-Fried Veggie Mix</h5>
            <p class="card-text">Crispy vegetables in soy garlic glaze</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
// Tangkap semua output dari atas sebagai isi konten
$content = ob_get_clean();

// Ambil isi file template navbar
$template = file_get_contents('navbar-index.html');

// Ganti placeholder <!--CONTENT--> dengan isi konten home
$page = str_replace('<!--CONTENT-->', $content, $template);

// Tampilkan halaman lengkap
echo $page;
?>
</body>
</html>
