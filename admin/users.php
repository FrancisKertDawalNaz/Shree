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
        <?php include 'connect.php'; ?>
            <h2 class="mt-4" style="color: #3A7D44;">Customers</h2>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>CustomerID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created_At</th>
                </tr>
                <?php
                $sql_query_get_table1 = mysqli_query($conn, "SELECT `customer_id`,`name`,`email`,`phone`,`address`,`created_at` FROM customers");

                while ($row_table1 = mysqli_fetch_assoc($sql_query_get_table1)) {
                    $customer_id = $row_table1['customer_id'];
                    $name = $row_table1['name'];
                    $email = $row_table1['email']; 
                    $phone = $row_table1['phone'];
                    $address = $row_table1['address'];
                    $created_at = $row_table1['created_at'];
                ?>
                    <tr>
                        <td><?php echo $customer_id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $email; ?></td>
                         <td><?php echo $phone; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $created_at; ?></td>
                    </tr>
                <?php } ?>
            </table>


            <h2 class="mt-4" style="color: #3A7D44;">Orders</h2>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>OrderID</th>
                    <th>CustomerID</th>
                    <th>ProductID</th>
                    <th>Quantity</th>
                    <th>Total_Price</th>
                    <th>Order_Date</th>
                    <th>Status</th>
                </tr>
                <?php
                $sql_query_get_table2 = mysqli_query($conn, "SELECT `order_id`,`customer_id`,`product_id`,`quantity`,`total_price`,`order_date`,`status` FROM orders");

                while ($row_table2 = mysqli_fetch_assoc($sql_query_get_table2)) {
                    $order_id = $row_table2['order_id'];
                    $customer_id = $row_table2['customer_id'];
                    $product_id = $row_table2['product_id']; 
                    $quantity = $row_table2['quantity'];
                    $total_price = $row_table2['total_price'];
                    $order_date = $row_table2['order_date'];
                    $status = $row_table2['status'];
                ?>
                    <tr>
                        <td><?php echo $order_id; ?></td>
                        <td><?php echo $customer_id; ?></td>
                        <td><?php echo $product_id; ?></td>
                        <td><?php echo $quantity; ?></td>
                        <td><?php echo $total_price; ?></td>
                        <td><?php echo $order_date; ?></td>
                        <td><?php echo $status; ?></td>
                    </tr>
                <?php } ?>
            </table>



            <h2 class="mt-4" style="color: #3A7D44;">Products</h2>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>ProductID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Tock_Quentity</th>
                    <th>Created_At</th>
                </tr>
                <?php
                $sql_query_get_table3 = mysqli_query($conn, "SELECT `product_id`,`name`,`category`,`price`,`stock_quantity`,`created_at` FROM products");

                while ($row_table3 = mysqli_fetch_assoc($sql_query_get_table3)) {
                    $product_id = $row_table3['product_id'];
                    $name = $row_table3['name'];
                    $category = $row_table3['category'];
                    $price = $row_table3['price'];
                    $stock_quantity = $row_table3['stock_quantity'];
                    $created_at = $row_table3['created_at'];
                ?>
                    <tr>
                        <td><?php echo $product_id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $category; ?></td>
                        <td><?php echo $price; ?></td>
                        <td><?php echo $stock_quantity; ?></td>
                        <td><?php echo $created_at; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>