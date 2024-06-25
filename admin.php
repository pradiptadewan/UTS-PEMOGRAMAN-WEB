<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JogloDephis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Standart Double</h2>
        <a class="btn btn-primary" href="create1.php" role="button">Booking</a>
        <br>
        <table  class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Checkin</th>
                    <th>Checkout</th>
                    <th>Metode Pembayaran</th>
                    <th>Jumlah Uang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Connection details
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "joglodephis_book";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }

                // SQL query
                $sql = "SELECT * FROM kamar1";
                $result = $connection->query($sql);
                
                // Check for query result
                if(!$result){
                    die("Invalid query: " . $connection->error);
                }

                // Display data in table rows
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['checkin']}</td>
                        <td>{$row['checkout']}</td>
                        <td>{$row['metode_pembayaran']}</td>
                        <td>{$row['jumlah_uang']}</td>
                        <td>
                            <a class='btn btn-primary' href='edit1.php?id={$row['id']}'>Edit</a>
                            <a class='btn btn-danger' href='delete1.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container my-5">
        <h2>Deluxe Double</h2>
        <a class="btn btn-primary" href="create2.php" role="button">Booking</a>
        <br>
        <table  class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Checkin</th>
                    <th>Checkout</th>
                    <th>Metode Pembayaran</th>
                    <th>Jumlah Uang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Connection details
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "joglodephis_book";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }

                // SQL query
                $sql = "SELECT * FROM kamar2";
                $result = $connection->query($sql);
                
                // Check for query result
                if(!$result){
                    die("Invalid query: " . $connection->error);
                }

                // Display data in table rows
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['checkin']}</td>
                        <td>{$row['checkout']}</td>
                        <td>{$row['metode_pembayaran']}</td>
                        <td>{$row['jumlah_uang']}</td>
                        <td>
                            <a class='btn btn-primary' href='edit2.php?id={$row['id']}'>Edit</a>
                            <a class='btn btn-danger' href='delete2.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container my-5">
        <h2>Family Suite</h2>
        <a class="btn btn-primary" href="create3.php" role="button">Booking</a>
        <br>
        <table  class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Checkin</th>
                    <th>Checkout</th>
                    <th>Metode Pembayaran</th>
                    <th>Jumlah Uang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Connection details
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "joglodephis_book";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }

                // SQL query
                $sql = "SELECT * FROM kamar3";
                $result = $connection->query($sql);
                
                // Check for query result
                if(!$result){
                    die("Invalid query: " . $connection->error);
                }

                // Display data in table rows
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['checkin']}</td>
                        <td>{$row['checkout']}</td>
                        <td>{$row['metode_pembayaran']}</td>
                        <td>{$row['jumlah_uang']}</td>
                        <td>
                            <a class='btn btn-primary' href='edit3.php?id={$row['id']}'>Edit</a>
                            <a class='btn btn-danger' href='delete3.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
