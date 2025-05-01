<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../admin/style.css">
</head>

<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="../admin/index.php" class="nav-link"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="../admin/users.php" class="nav-link"><i class="fas fa-users"></i> Users</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fas fa-cog"></i> Settings</a>
            </li>
            <li class="nav-item">
                <a href="../index.html" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </div>

    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-brand" style="color: green;">Admin Dashboard</span>
            </div>

        </nav>
        <div class="container mt-4">
            <h1 class="text-center" style="color: #3A7D44;">Welcome, Admin</h1>
            <p class="text-center">This is your dashboard where you can manage everything.</p>

            <div class="d-flex justify-content-center">
                <div class="p-3 border rounded shadow-lg" style="width: 250px;">
                    <img src="../images/fk.jpg" alt="Admin Image" class="img-fluid" width="300">
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>