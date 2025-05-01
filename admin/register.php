<?php
include '../admin/connect.php';

if (isset($_POST['register'])) {
    $User_ID = "user-" . time();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql_save_user = "INSERT INTO users (`User_ID`, `Name`, `Email`, `Password`) 
                      VALUES ('$User_ID', '$name', '$email', '$hashed_password')";

    if (mysqli_query($conn, $sql_save_user)) {
        $success = "User registered successfully!";
    } else {
        $error = "Error saving user: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body,
        html {
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

        .btn-register {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            border: none;
            color: white;
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
        }

        .btn-register:hover {
            background: linear-gradient(45deg, #2575fc, #6a11cb);
        }

        .image-container {
            width: 45%;
            background: url('../images/hey.jpg') center/cover no-repeat;
            height: 97vh;
            border-radius: 10px;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
        }

        .success-message {
            color: green;
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2>Sign Up</h2>
            <p class="text-center text-muted">Create your account. It's free and only takes a minute.</p>

            <?php if (isset($success)): ?>
                <p class="success-message"><?php echo $success; ?></p>
            <?php endif; ?>

            <?php if (isset($serror)): ?>
                <p class="error-message"><?php echo $error; ?></p>
            <?php endif; ?>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <button type="submit" name="register" class="btn btn-register w-100">Register</button>
            </form>
            <p class="text-center mt-3">
                Already have an account? <a href="../admin/login.php" class="text-primary">Login</a>
            </p>
        </div>
        <div class="image-container"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>