<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .forgot-password-container {
            background-color: #fff;
            padding: 90px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
        }
        .forgot-password-container h2 {
            margin-top: 0;
        }
        .forgot-password-container input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .forgot-password-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .forgot-password-container button:hover {
            background-color: #0056b3;
        }
        .forgot-password-container a {
            display: block;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
        }
        .forgot-password-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="forgot-password-container">
    <h2>Forgot Password</h2>
    <form action="/reset-password" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Send Reset Link</button>
    </form>
    <a href="index.php">Back to Login</a>
</div>

</body>
</html>
