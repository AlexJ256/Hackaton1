
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
        .registration-container {
            background-color: #fff;
            padding: 100px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
        }
        .registration-container h2 {
            margin-top: 0;
        }
        .registration-container input[type="text"],
        .registration-container input[type="email"],
        .registration-container input[type="password"],
        .registration-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .registration-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .registration-container button:hover {
            background-color: #0056b3;
        }
        .registration-container .form-check {
            text-align: left;
        }
    </style>
</head>
<body>

<div class="registration-container">
    <h2>Registro</h2>
    <form class="row g-3">
        <div class="col-md-12">
            <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" required>
        </div>
        <div class="col-md-12">
            <input type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" required>
        </div>
        <div class="col-md-12">
            <label for="inputEmail4" class="form-label">Correo</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Correo@ejemplo.com" required>
        </div>
        <div class="col-md-12">
            <label for="inputPassword4" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña" required>
        </div>
        <div class="col-md-12">
            <label for="inputAddress" class="form-label">Número</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="+569 ---- ----" required>
        </div>
        <div class="col-md-12">
            <label for="inputInstitution" class="form-label">Institución</label>
            <select id="inputInstitution" class="form-select" required>
                <option selected disabled value="">Elige...</option>
                <option>Instituto A</option>
                <option>Instituto B</option>
                <option>Instituto C</option>
                <option>Instituto D</option>
            </select>
        </div>
        <div class="col-md-12">
           
            <div class="form-check">
                <center>
                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                <label class="form-check-label" for="gridCheck">
                    Verificar
                </label></center>
            </div>
        </div>
        <div class="col-md-12">
           
            <button type="submit" class="btn btn-primary">Registrarse</button>
            <a href="Obtener.php?opcion=1" > aqui  </a> 
    

        </div>
    </form>
</div>


    
</body>
</html>

