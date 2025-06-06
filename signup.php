<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:ital,wght@0,300..700;1,300..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('images/bg_register.png');
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }
        .form-box {
            background: white;
            padding-top: 30px ;
            padding-bottom: 30px;
            padding-left: 40px;
            padding-right: 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            max-width: 400px;
            margin: 50px auto 30px auto;
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
            font-size: 11px;
            color: #999;
        }
        .form-box input{
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <h2 class="text-center fw-bold">Sign Up</h2>
        <h5 class="text-center text-success">Welcome to Veggie Vibes</h5>
        <form action="process_signup.php" method="POST">
            <div class="mb-2">
                <h1>Name</h1>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="mb-2">
                <h1> Username</h1>
                <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
            </div>
            <div class="mb-2">
                <h1>Email</h1>
                <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
            </div>
            <div class="mb-2">
                <h1>Password</h1>
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <h1>Password Verification</h1>
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm your password">
            </div>
            <button class="btn btn-success w-100">Sign Up</button>
        </form>
        <p class="text-center mt-3">Have an account? <a href="login.php">Log in</a></p>
    </div>
</body>
</html>