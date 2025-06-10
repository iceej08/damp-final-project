<?php
session_start();
include 'db.php';

$name = $_SESSION['user_name'] ?? '';
$username = $_SESSION['user'] ?? '';
$email = '';

//Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newName = $_POST['name'] ?? '';
    $newUsername = $_POST['username'] ?? '';
    $newEmail = $_POST['email'] ?? '';
    
    if ($username) {
        // update detail
        $stmt = $conn->prepare("UPDATE user SET name = ?, username = ?, email = ? WHERE username = ?");
        $stmt->bind_param("ssss", $newName, $newUsername, $newEmail, $username);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Update session variables if username or name changed
            $_SESSION['user_name'] = $newName;
            $_SESSION['user'] = $newUsername;

            // Update current variables for form display
            $name = $newName;
            $username = $newUsername;
            $email = $newEmail;
        }
        $stmt->close();
    }
}

// If username exists, fetch email from DB (only if not updated above)
if (!$email && $username) {
    $stmt = $conn->prepare("SELECT email FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($emailFromDB);
    if ($stmt->fetch()) {
        $email = $emailFromDB;
    }
    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:ital,wght@0,300..700;1,300..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="navbar-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet"/>
   <style>
        .form-box {
            background: white;
            padding: 23px 30px;
            border-radius: 25px;
            box-shadow: 0.4rem 0.4rem 0.5rem rgba(0, 0, 0, 0.35);
            max-width: 50rem;
            margin: 125px auto 80px auto;
            height: 30rem;
        }
        .form-box p{
            margin-bottom: 2px;
            margin-top: 0;
            font-size: 11px;
        }
        .form-box h2{
            margin-bottom: 10px;
            margin-top: 2px;
            font-size: 30px;
        }
        .form-box h1{
            margin-bottom: 7px;
            margin-top: 2px;
            font-size: 13px; 
        }
        .form-box h5 {
            margin-bottom: 20px;
            margin-top: 15px; 
        }
        .form-control::placeholder {
            font-size: 13px;
            color: #999;
        }
        .form-box input{
            font-size: 15px;
        }
    </style>
</head>
<body>
 <!--Navbar-->
 <div class="wrapper" style="background-color: #EFEFEF;">
    <aside id="sidebar">
        <div class="d-flex">
            <button id="toggle-btn" type="button">
                <i id="toggle-icon" class="material-icons">menu</i>
            </button>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="profile.php" class="sidebar-link"  data-page="profile">
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
                <a href="navbar/explore.html" class="sidebar-link">
                    <i class="material-icons">search</i>
                    <span class="material-symbols">Explore</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="bookmark.html" class="sidebar-link">
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
                <span class="material-symbols">Logout</span>
            </a>
        </div>
    </aside>

    <div class="main p-5 pt-0 pe-0" style="background-image: url('images/bg_register.png');">
        <div class="form-box">
            <div class="mb-2 mt-5" style="display: flex; align-items: center; justify-content: center;">
                <img src="images/ava-profile.png" style="width: 3rem; height: 3rem;">
            </div>
            <h3 class="text-center text-success mb-3" style="font-weight: bold;">Good afternoon, Vara Vaulina</h3>

            <form action="profile.php" method="POST">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control form-control-lg" value="<?= htmlspecialchars($name) ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control form-control-lg" value="<?= htmlspecialchars($username) ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-lg" value="<?= htmlspecialchars($email) ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password cannot be edited" disabled>
                    </div>
                </div>
                <button type="submit" class="btn btn-success w-100">Save Edit</button>
            </form>
        </div>
    </div>


    <script src="navbar-script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>              
</body>
</html>