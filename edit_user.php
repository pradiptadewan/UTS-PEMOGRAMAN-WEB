<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "joglodephis_login";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Initialize variables
$username = "";
$email = "";
$password = "";
$confirm_password = "";

$errorMessage = "";
$successMessage = "";

// Handle GET request
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header("location: admin_user.php");
        exit;
    }

    $id = $_GET["id"];
    
    $sql = "SELECT * FROM user WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: admin_user.php");
        exit;
    }

    // Populate form fields with existing data
    $username = $row["username"];
    $email = $row["email"];
    $password = $row["password"];
    $confirm_password = $row["confirm_password"];

} else {
    // Handle POST request
    $username = $_POST ["nama"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];
    $confirm_password = $_POST ["confirm_password"];

    do {
        if (empty($username) || empty($email) || empty($password) || empty($confirm_password) ){
            $errorMessage = "All field are required";
            break;
        }

        $sql = "UPDATE user 
                SET username = '$username', email = '$email', password = '$password', 
                confirm_password = '$confirm_password'
                WHERE id = $id";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }

        $successMessage = "Data updated successfully";
        header("location: admin_user.php");
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
        <h2>Edit User Account</h2>

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
                <label class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="usernama" value="<?php echo $username; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Confirm Password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="confirm_password" value="<?php echo $confirm_password; ?>">
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
                    <a class="btn btn-outline-primary" href="admin_user.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
