<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Homepage - Veggie Vibes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Cormorant+Garamond:wght@600&family=Cormorant+Infant&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="navbar-style.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet"/>
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
        font-family: 'Cormorant Infant', serif;
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
    }

    .card-text {
        font-family: 'Poppins', sans-serif;
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
        font-family: 'Cormorant Infant', serif;
        font-size: 2rem;
    }

    .feature-text {
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        text-align:justify;
    }

    iframe {
        width: 100%;
        height: 100%;
        border: none;
    }
    </style>
</head>
<body>
<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button id="toggle-btn" type="button">
                <i id="toggle-icon" class="material-icons">menu</i>
            </button>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="profile.php" class="sidebar-link">
                    <i class="material-icons">person</i>
                    <span class="material-symbols">Profile</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="home.php" class="sidebar-link">
                    <i class="material-icons">home</i>
                    <span class="material-symbols">Home</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="article.html" class="sidebar-link">
                    <i class="material-icons">description</i>
                    <span class="material-symbols">Article</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="material-icons">search</i>
                    <span class="material-symbols">Explore</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="material-icons">bookmarks</i>
                    <span class="material-symbols">Bookmarks</span>
                </a>
            </li>
            <li class="sidebar-item mt-3">
                <a href="add_resep.html" class="sidebar-link">
                    <i class="material-icons">add</i>
                    <span class="material-symbols">Add</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer mt-5">
            <a href="landing.html" class="sidebar-link">
                <i class="material-icons">logout</i>
                <span class="material-symbols">logout</span>
            </a>
        </div>
    </aside>
    <div class="main">
        <div class="container p-3">
            <div class="feature-box row align-items-center">
            <div class="col-md-6">
                <img src="images/menu_atas.png" alt="Tofu Avocado Power Bowl" class="img-fluid rounded" />
            </div>
            <div class="col-md-6 text-center">
                <h1 class="feature-title">
                    <a href="recipe_sample.html" style="color:black; text-decoration:none;">Tofu Avocado Power Bowl</a>
                </h1>
                <p class="feature-text">
                This Tofu Avocado Power Bowl is a vibrant and nutritious meal packed with plant-based protein.
                It features crispy tofu, creamy avocado, and a mix of fresh vegetables like edamame, kale, and carrots.
                A savory peanut-ginger dressing ties everything together with rich, tangy flavor.
                </p>
            </div>
            </div>
        </div>

        <div class="container">
            <h2 class="section-title">Don't Know What To Eat?</h2>
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
                <div class="card rounded-5">
                <img src="images/menubf1.png" class="card-img-top rounded" alt="Avocado Egg Toast Salad" />
                <div class="card-body">
                    <h5 class="card-title">Avocado Egg Toast Salad</h5>
                    <p class="card-text">Creamy avocado, cheesy egg, with fresh salad</p>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card rounded-5">
                <img src="images/menubf2.png" class="card-img-top rounded" alt="Mixed Veggie Power Bowl" />
                <div class="card-body">
                    <h5 class="card-title">Mixed Veggie Power Bowl</h5>
                    <p class="card-text">Hearty, colorful bowl of fresh vegetables</p>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card rounded-5">
                <img src="images/menulunch1.png" class="card-img-top rounded" alt="Plant Based Veggie Stir-Fry" />
                <div class="card-body">
                    <h5 class="card-title">Plant Based Veggie Stir-Fry</h5>
                    <p class="card-text">Colorful stir-fry with imitation beef from soy</p>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card rounded-5">
                <img src="images/menulunch2.png" class="card-img-top rounded" alt="Chicken Sweet Potato Box" />
                <div class="card-body">
                    <h5 class="card-title">Chicken Sweet Potato Box</h5>
                    <p class="card-text">Hearty, balanced meal with fresh colors</p>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card rounded-5">
                <img src="images/menudin1.png" class="card-img-top rounded" alt="Bibimbap Bowl Delight" />
                <div class="card-body">
                    <h5 class="card-title">Bibimbap Bowl Delight</h5>
                    <p class="card-text">Colorful rice bowl with savory toppings</p>
                </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card rounded-5">
                <img src="images/menudin2.png" class="card-img-top rounded" alt="Stir-Fried Veggie Mix" />
                <div class="card-body">
                    <h5 class="card-title">Stir-Fried Veggie Mix</h5>
                    <p class="card-text">Crispy vegetables in soy garlic glaze</p>
                </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container-fluid p-0 mt-5">
            <footer class="p-5 text-white" style="background-color: #3F7D58;">
            <div class="row text-center text-md-start px-3">
                <div class="col-md-2">
                <h6 class="fw-bold">LINKS</h6>
                <ul class="list-unstyled">
                    <li class="py-1"><a href="login.php" class="text-white text-decoration-none">Recipes</a></li>
                    <li class="py-1"><a href="login.php" class="text-white text-decoration-none">Articles</a></li>
                    <li class="py-1"><a href="#about" class="text-white text-decoration-none">About Us</a></li>
                </ul>
                </div>

                <div class="col-md-3">
                    <h6 class="fw-bold">CONTACT US</h6>
                    <p class="mb-1">+6281234567890</p>
                    <p>veggievibes@gmail.com</p>
                </div>

                <div class="col-md-3">
                <h6 class="fw-bold">FOLLOW US</h6>
                <div class="d-flex justify-content-center justify-content-md-start gap-3">
                    <a href="https://facebook.com" target="_blank"><img src="images/fb.png"></img></a>
                    <a href="https://instagram.com" target="_blank"><img src="images/ig.png"></img></a>
                    <a href="https://pinterest.com" target="_blank"><img src="images/pin.png"></img></a>
                    <a href="https://youtube.com" target="_blank"><img src="images/yt.png"></img></a>
                    <a href="https://x.com" target="_blank"><img src="images/x.png"></img></a>
                </div>
                </div>

                <div class="col-md-4 text-md-end" style="margin-top: -0.75rem;">
                    <div>
                        <img src="images/veggievibes.png" alt="Veggie Vibes Logo" style="width: 3rem; height: 3rem; margin-bottom: 0.5rem;"/>
                        <span class="fs-2 fw-bold" style="font-family: 'Cormorant Infant', sans-serif;">Veggie Vibes</span>
                    </div>
                    <p class="small">
                        Veggie Vibes is a website that shares simple, healthy recipes to support balanced living.
                        We aim to make nutritious eating easy and accessible for everyone.
                    </p>
                </div>
            </div>
                <hr class="border-white border-2"/>
                <div class="text-center small mt-3">
                &copy; 2025 Brand. All rights reserved.
                </div>
            </footer>
        </div>
</div>
<script src="navbar-script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>