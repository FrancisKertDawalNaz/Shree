<?php
session_start();
include 'connect.php'; 

if(isset($_POST['login'])){
    if(isset($_POST['password']) && isset($_POST['email'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password'];

        $sql_login_user = "SELECT * FROM users WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql_login_user);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['Password']; 

            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $row['id']; 
                $_SESSION['email'] = $row['Email'];
                header("Location: index.php"); 
                exit();
            } else {
                $error = "Invalid email or password!";
            }
        } else {
            $error = "Invalid email or password!";
        }
    } else {
        $error = "Email or Password is missing!";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            width: 50%;
            max-width: 450px;
            padding: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn-login {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            border: none;
            color: white;
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
        }

        .btn-login:hover {
            background: linear-gradient(45deg, #2575fc, #6a11cb);
        }

        .image-container {
            width: 50%;
            background: url('../images/hey.jpg') center/cover no-repeat;
            height: 77vh;
            border-radius: 5px;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2>Sign In</h2>
            <p class="text-center text-muted">Welcome back! Please login to your account.</p>

            <?php if(isset($error)): ?>
                <p class="error-message"><?php echo $error; ?></p>
            <?php endif; ?>

            <form action="" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <button type="submit" name="login" class="btn btn-login w-100">Login</button>
            </form>

            <p class="text-center mt-3">
                Don't have an account? <a href="register.php" class="text-primary">Sign Up</a>
            </p>
        </div>

        <div class="image-container"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
