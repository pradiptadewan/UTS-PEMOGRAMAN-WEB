<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="style2.css">
  <title>Login - Homestay Joglo Dhepis</title>
</head>

<body>
<!-- Register -->
  <div class="auth-container" id="signup" style="display: none;" >
    <div class="auth-box">
      <h2>Sign Up</h2>
      <hr> <br>
      <form action="create_login_register.php" method="POST">
        <div class="input__group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="input__group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="input__group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="input__group">
          <label for="confirm_password">Confirm Password</label>
          <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <button class="btn" type="submit" value="signUp" name="signUp">Sign Up</button>
      </form>
      <p>Sudah Memiliki Akun?</p><button class="login_btn" id="signInButton">Login</button>
    </div>
  </div>

<!-- Login -->
  <div class="auth-container" id="signIn" style="display: flex;">
    <div class="auth-box">
      <h2>Login</h2>
      <hr> <br>
      <form action="create_login_register.php" method="POST">
        <div class="input__group">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" required>
        </div>
        <div class="input__group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button class="btn" type="submit" value="signIn" name="signIn">Login</button>
      </form>
      <p>Belum punya akun?</p><button class="register_btn" id="signUpButton">Register</button>
    </div>
  </div>

  <script src="script2.js"></script>
</body>
</html>