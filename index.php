<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/imagenes/logo.jpeg" type="image/jpeg">

    <title>Green Wheel parking - Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 110vh;
            margin: 0;
        }
        .dropdown-menu {
            background-color: #fff;
            padding: 100px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
        }
        .dropdown-menu h2 {
            margin-top: 0;
        }
        .dropdown-menu input[type="email"],
        .dropdown-menu input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .dropdown-menu button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .dropdown-menu button:hover {
            background-color: #0056b3;
        }
        .dropdown-menu a {
            display: block;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
        }
        .dropdown-menu a:hover {
            text-decoration: underline;
        }
        .dropdown-menu .form-check {
            text-align: left;
        }
        .dropdown-divider {
            border-top: 1px solid #e9ecef;
            margin: 1rem 0;
        }
    </style>
</head>
<body>

<div class="dropdown-menu">
    <h2>GREEN WHEEL PARKING<h2>
    <h2>Iniciar Sesión</h2>
    <h2><img src="/proyecto/logo.jpeg"  height="150"></h2>

    <form class="px-4 py-3" action="alumnoUI.php">
        <div class="mb-3">
            <label for="exampleDropdownFormEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleDropdownFormPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                <label class="form-check-label" for="dropdownCheck">Recordar cuenta</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="./singup.php">¿Nuevo? Regístrate</a>
    <a class="dropdown-item" href="./forgotPassword.php">¿Olvidaste tu contraseña?</a>
    <a class="dropdown-item" href="./administratorUI.php">¿admin?</a> 
</div>

</body>
</html>
