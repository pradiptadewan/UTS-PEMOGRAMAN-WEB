<?php
// Nama file yang ingin Anda edit
$file = 'team.html';

// Variabel untuk pesan error dan sukses
$error = '';
$success = '';

// Cek apakah formulir telah dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil konten yang di-post
    $newContent = $_POST['content'];
    
    // Simpan konten ke file
    if (file_put_contents($file, $newContent) !== false) {
        $success = "File successfully updated.";
    } else {
        $error = "Failed to update the file.";
    }
}

// Baca konten file
$content = file_get_contents($file);

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
        <h2>Edit Team.html</h2>

        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo $success; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label for="content">File Content:</label>
                <textarea class="form-control" name="content" rows="20"><?php echo htmlspecialchars($content); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
        </form>
        <div class="offset-sm-3 col-sm-6 d-grid">
                    <a class="btn btn-outline-primary" href="admin_user.php" role="button">Done</a>
        </div>
        <div class="offset-sm-3 col-sm-6 d-grid">
                    <a class="btn btn-outline-primary" href="admin_user.php" role="button">Cancel</a>
        </div>
    </div>
</body>
</html>
