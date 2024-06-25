<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "joglodephis_book";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Initialize variables
$id = "";
$nama1 = "";
$email1 = "";
$checkin1 = "";
$checkout1 = "";
$metode_pembayaran1 = "";
$jumlah_uang1 = "";

$errorMessage = "";
$successMessage = "";

// Handle GET request
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header("location: admin.php");
        exit;
    }

    $id = $_GET["id"];
    
    $sql = "SELECT * FROM kamar2 WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: admin.php");
        exit;
    }

    // Populate form fields with existing data
    $nama1 = $row["nama"];
    $email1 = $row["email"];
    $checkin1 = $row["checkin"];
    $checkout1 = $row["checkout"];
    $metode_pembayaran1 = $row["metode_pembayaran"];
    $jumlah_uang1 = $row["jumlah_uang"];
} else {
    // Handle POST request
    $id = $_POST["id"];
    $nama1 = $_POST["nama"];
    $email1 = $_POST["email"];
    $checkin1 = $_POST["checkin"];
    $checkout1 = $_POST["checkout"];
    $metode_pembayaran1 = $_POST["metode_pembayaran"];
    $jumlah_uang1 = $_POST["jumlah_uang"];

    do {
        if (empty($nama1) || empty($email1) || empty($checkin1) || empty($checkout1) || empty($metode_pembayaran1) || empty($jumlah_uang1)) {
            $errorMessage = "All fields are required";
            break;
        }

        $sql = "UPDATE kamar2 
                SET nama = '$nama1', email = '$email1', checkin = '$checkin1', 
                checkout = '$checkout1', metode_pembayaran = '$metode_pembayaran1', jumlah_uang = '$jumlah_uang1' 
                WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Data updated successfully";
        header("location: admin.php");
        exit;
    } while (false);
}

// Close the connection
$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JogloDephis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Edit Kamar 2</h2>

        <?php 
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
        ?>

        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama1; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email1; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Checkin</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="checkin" value="<?php echo $checkin1; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Checkout</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="checkout" value="<?php echo $checkout1; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Metode Pembayaran</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="metode_pembayaran" value="<?php echo $metode_pembayaran1; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Jumlah Uang</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="jumlah_uang" value="<?php echo $jumlah_uang1; ?>">
                </div>
            </div>

            <?php 
            if (!empty($successMessage)) {
                echo "
                <div class='row mb-3'>
                    <div class='col-sm-3 col-form-label'></div>
                    <div class='col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-6 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="offset-sm-3 col-sm-6 d-grid">
                    <a class="btn btn-outline-primary" href="admin.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
