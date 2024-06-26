<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JogloDephis</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
    .logout{
      padding: 0.75rem 2rem;
      font-size: 1rem;
      background-color: red;
      outline: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<nav>
    <div class="nav__bar">
      <div class="nav__header">
        <div class="logo nav__logo">
          <div class="judul-nav">JD</div>
          <span>HOMESTAY<br />JOGLODHEPIS</span>
          <div></div>
          <i class="ri-star-fill"></i>
          <i class="ri-star-fill"></i>
          <i class="ri-star-fill"></i>
          <i class="ri-star-fill"></i>
          <i class="ri-star-fill"></i>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="logout.php" class="logout">Logout</a></li>
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Manage
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin.php#admin_pagee">Kamar</a></li>
            <li><a class="dropdown-item" href="#admin_pagee">User Account</a></li>
            <li><a class="dropdown-item" href="edit_index.php">Edit Main Page</a></li>
            <li><a class="dropdown-item" href="edit_team.php">Edit Team Page</a></li>
          </ul>
        </div>
      </ul>
    </div>
  </nav>

  
    <div class="container my-5">
        <br><br><h2 id="admin_pagee">ADMIN PAGE</h2><hr><br><br><br><br><br>
        <h2>User's Account</h2>
        <a class="btn btn-primary" href="create_user.php" role="button">Add User</a>
        <br>
        <table  class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Confirm Password</th>
                    <th>Date Created</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Connection details
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "joglodephis_login";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if($connection->connect_error){
                    die("Connection failed: " . $connection->connect_error);
                }

                // SQL query
                $sql = "SELECT * FROM user";
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
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['password']}</td>
                        <td>{$row['confirm_password']}</td>
                        <td>{$row['date']}</td>
                        <td>
                            <a class='btn btn-primary' href='edit_user.php?id={$row['id']}'>Edit</a>
                            <a class='btn btn-danger' href='delete_user.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
