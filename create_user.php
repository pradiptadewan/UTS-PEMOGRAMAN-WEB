<?php 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "joglodephis_login";

 $connection = new mysqli($servername, $username, $password, $database);

$username = "";
$email = "";
$password = "";
$confirm_password = "";

$errorMessage = "";
$successMessage = "";

if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST ["nama"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];
    $password=md5($password);
    $confirm_password = $_POST ["confirm_password"];
    $confirm_password=md5($confirm_password);

    do{
        if (empty($username) || empty($email) || empty($password) || empty($confirm_password) ){
            $errorMessage = "All field are required";
            break;
        }
        
        $sql = "INSERT INTO user (username, email, password, confirm_password, date)" . 
               "VALUES ('$username', '$email', ' $password', '$confirm_password', NOW())";
        $result = $connection->query($sql);

        if (!$result){
            $errorMessage = "Invalid querry: " . $connection->error;
            break;
        }

        $username = "";
        $email = "";
        $password = "";
        $confirm_password = "";

        $successMessage = "Data Added Correctly";

        header("location: admin_user.php");
        exit;
    } while (false);

}
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
        <h2>User Account</h2>

        <?php 
        if ( !empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>



        <form method="POST">
            <div class="row mb-3">
                <label for="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama" value="<?php echo $username; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="col-sm-3 col-form-label">Confirm Password</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="confirm_password" value="<?php echo $confirm_password; ?>">
                </div>
            </div>

            <?php 
            if ( !empty($successMessage)) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-3 d-grid'>
                        <div class='alert alert-success alert-dismissible fade show' role = 'alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                     </div>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid"> 
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="admin_user.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>