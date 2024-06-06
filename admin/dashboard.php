<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Font Awesome for icons -->
  <style>
    /* Global styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    /* Sidebar styles */
    .sidebar {
      position: fixed;
      width: 250px;
      height: 100%;
      background-color: #333;
      padding-top: 20px;
      color: #fff;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .sidebar ul li {
      padding: 10px;
      border-bottom: 1px solid #555;
    }

    .sidebar ul li a {
      color: #fff;
      text-decoration: none;
    }

    .sidebar ul li:hover {
      background-color: #555;
    }

    .profile-icon {
      font-size: 30px;
      margin-bottom: 20px;
    }

    /* Content styles */
    .content {
      margin-left: 250px;
      padding: 20px;
    }

    .content h1 {
      color: #333;
    }

    .card {
      background-color: #fff;
      padding: 35vh;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>

  <div class="sidebar">
    <div class="profile-icon">
      <i class="fas fa-user-circle"> Admin</i> <!-- Font Awesome profile icon -->
    </div>
    <ul>
      <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li> <!-- Font Awesome dashboard icon -->
      <li><a href="#"><i class="fas fa-users"></i> Users</a></li> <!-- Font Awesome users icon -->
      <li><a href="#"><i class="fas fa-gamepad"></i> Games</a></li> <!-- Font Awesome games icon -->
      <li><a href="#"><i class="fas fa-history"></i> Top Up History</a></li> <!-- Font Awesome history icon -->
      <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li> <!-- Font Awesome settings icon -->
    </ul>
  </div>

  <div class="content">
    <h1> Dashboard</h1>
    <div class="card">
      <h2></h2>
      <p></p>
    </div>
  </div>

</body>

</html>