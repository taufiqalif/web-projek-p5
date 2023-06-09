<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    .welcome-message {
      text-align: center;
      margin-top: 50px;
    }

    .logout-link {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
<div class="container">
  <h1>Welcome to the Dashboard</h1>
  <div class="welcome-message">
    <p>Hello, <?= session()->get('username'); ?>! This is the dashboard page.</p>
  </div>
  <div class="logout-link">
    <a href="[logout_url]">Logout</a>
  </div>
</div>

</body>
</html>
