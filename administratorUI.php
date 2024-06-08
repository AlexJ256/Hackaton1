<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <title> </title>
    <title>Gestión de Estacionamientos</title>
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
        .admin-container {
            background-color: #fff;
            padding: 90px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 600px;
            text-align: center;
            align-items: center;
            vertical-align: middle;
        }
        .admin-container h2 {
            margin-top: 0;
        }
        .admin-container input[type="text"],
        .admin-container input[type="number"],
        .admin-container input[type="time"],
        .admin-container select {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .admin-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        .admin-container button:hover {
            background-color: #0056b3;
        }
        .parking-list {
            margin-top: 20px;
        }
        .parking-list table {
            width: 100%;
            border-collapse: collapse;
        }
        .parking-list th, .parking-list td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        .parking-list th {
            background-color: #007BFF;
            color: white;
        }
        .parking-list button {
            background-color: #FF5733;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .parking-list button:hover {
            background-color: #c7001e;
        }
    </style>
</head>
<body>

<div class="admin-container class">
    <h2>Gestión de Estacionamientos</h2>
    <form id="parkingForm">
        <input type="text" id="parkingName" placeholder="Nombre del Estacionamiento" required>
        <input type="text" id="location" placeholder="Ubicación" required>
        <input type="number" id="capacity" placeholder="Capacidad" required>
        <input type="number" id="available" placeholder="Espacios Disponibles" required>
        <button type="submit">Agregar Estacionamiento</button>
    </form>
    
    <div class="parking-list">
        <h2>Lista de Estacionamientos</h2>
        <select id="locationFilter">
            <option value="">Selecciona una sede</option>
            <option value="Rodríguez">Rodríguez</option>
            <option value="Pedro de Valdivia">Pedro de Valdivia</option>
        </select>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Capacidad</th>
                    <th>Disponibles</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="parkingTableBody">
                <!-- Aquí se añadirán dinámicamente los estacionamientos -->
            </tbody>
        </table>
    </div>
</div>

<script>
    const parkingForm = document.getElementById('parkingForm');
    const parkingTableBody = document.getElementById('parkingTableBody');
    const locationFilter = document.getElementById('locationFilter');

    parkingForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const parkingName = document.getElementById('parkingName').value;
        const location = document.getElementById('location').value;
        const capacity = document.getElementById('capacity').value;
        const available = document.getElementById('available').value;

        const newRow = document.createElement('tr');

        newRow.innerHTML = `
            <td>${parkingName}</td>
            <td>${location}</td>
            <td>${capacity}</td>
            <td>${available}</td>
            <td>
                <button onclick="editParking(this)">Editar</button>
                <button onclick="deleteParking(this)">Eliminar</button>
            </td>
        `;

        parkingTableBody.appendChild(newRow);

        parkingForm.reset();
    });

    locationFilter.addEventListener('change', function() {
        const selectedLocation = locationFilter.value;
        
        // Simulación de filtrado por sede
        console.log('Filtrando por sede:', selectedLocation);

        // Aquí agregarías lógica para filtrar los espacios disponibles por la sede seleccionada
    });

    function deleteParking(button) {
        const row = button.parentElement.parentElement;
        row.remove();
    }

    function editParking(button) {
        const row = button.parentElement.parentElement;
        const cells = row.getElementsByTagName('td');

        document.getElementById('parkingName').value = cells[0].innerText;
        document.getElementById('location').value = cells[1].innerText;
        document.getElementById('capacity').value = cells[2].innerText;
        document.getElementById('available').value = cells[3].innerText;

        deleteParking(button);
    }

    // Simulación de espacios disponibles
    const exampleSpaces = [
        { name: 'Estacionamiento A', location: 'Rodríguez', capacity: 50, available: 10 },
        { name: 'Estacionamiento B', location: 'Pedro de Valdivia', capacity: 40, available: 5 },
    ];

    exampleSpaces.forEach(space => {
        const newRow = document.createElement('tr');

        newRow.innerHTML = `
            <td>${space.name}</td>
            <td>${space.location}</td>
            <td>${space.capacity}</td>
            <td>${space.available}</td>
            <td>
                <button onclick="editParking(this)">Editar</button>
                <button onclick="deleteParking(this)">Eliminar</button>
            </td>
        `;

        parkingTableBody.appendChild(newRow);
    });
</script>

</body>
</html>
