<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Estacionamiento</title>
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
        .reservation-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 600px;
            text-align: center;
        }
        .reservation-container h2 {
            margin-top: 0;
        }
        .reservation-container input[type="text"],
        .reservation-container input[type="date"],
        .reservation-container input[type="time"],
        .reservation-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .reservation-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .reservation-container button:hover {
            background-color: #0056b3;
        }
        .available-spaces {
            margin-top: 20px;
        }
        .available-spaces table {
            width: 100%;
            border-collapse: collapse;
        }
        .available-spaces th, .available-spaces td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        .available-spaces th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>

<div class="reservation-container">
    <h2>Reservar Estacionamiento</h2>
    <form id="reservationForm">
        <input type="text" name="name" placeholder="Nombre" required>
        <input type="text" name="license_plate" placeholder="Número de Placa" required>
        <input type="date" name="date" required>
        <select name="time_block" required>
            <option value="">Seleccione un bloque horario</option>
            <option value="08:00-09:59">08:00-09:59</option>
            <option value="10:00-11:59">10:00-11:59</option>
            <option value="12:00-13:59">12:00-13:59</option>
            <option value="14:00-15:59">14:00-15:59</option>
            <option value="16:00-17:59">16:00-17:59</option>
        </select>
        <button type="submit">Reservar</button>
    </form>
    
    <div class="available-spaces">
        <h2>Espacios Disponibles</h2>
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
                </tr>
            </thead>
            <tbody id="spacesTableBody">
                <!-- Aquí se añadirán dinámicamente los espacios disponibles -->
            </tbody>
        </table>
    </div>
</div>

<script>
    const reservationForm = document.getElementById('reservationForm');
    const spacesTableBody = document.getElementById('spacesTableBody');
    const locationFilter = document.getElementById('locationFilter');

    reservationForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(reservationForm);
        const reservationData = Object.fromEntries(formData.entries());
        
        // Simulación de envío de reserva a servidor
        console.log('Reserva enviada:', reservationData);

        // Notificación de reserva exitosa
        alert('Reserva realizada con éxito');
        
        reservationForm.reset();
    });

    locationFilter.addEventListener('change', function() {
        const selectedLocation = locationFilter.value;
        
        // Simulación de filtrado por sede
        console.log('Filtrando por sede:', selectedLocation);

        // Aquí agregarías lógica para filtrar los espacios disponibles por la sede seleccionada
    });

    // Simulación de espacios disponibles
    <?php
$bd1 = mysqli_connect("localhost", "root", "");
mysqli_select_db($bd1, "desafio");

// Consulta para obtener la capacidad y la disponibilidad del Estacionamiento A
$resultadoA = mysqli_query($bd1, "SELECT Capacidad, Disponibles FROM estacionamientos WHERE Nombre='Estacionamiento A'");
$filaA = mysqli_fetch_assoc($resultadoA);
$capacidadA = $filaA['Capacidad'];
$disponiblesA = $filaA['Disponibles'];

// Consulta para obtener la capacidad y la disponibilidad del Estacionamiento B
$resultadoB = mysqli_query($bd1, "SELECT Capacidad, Disponibles FROM estacionamientos WHERE Nombre='Estacionamiento B'");
$filaB = mysqli_fetch_assoc($resultadoB);
$capacidadB = $filaB['Capacidad'];
$disponiblesB = $filaB['Disponibles'];
?>

const exampleSpaces = [
    { name: 'Estacionamiento A', location: 'Rodríguez', capacity: <?php echo $capacidadA; ?>, available: <?php echo $disponiblesA; ?> },
    { name: 'Estacionamiento B', location: 'Pedro de Valdivia', capacity: <?php echo $capacidadB; ?>, available: <?php echo $disponiblesB; ?> }
];


    exampleSpaces.forEach(space => {
        const newRow = document.createElement('tr');

        newRow.innerHTML = `
            <td>${space.name}</td>
            <td>${space.location}</td>
            <td>${space.capacity}</td>
            <td>${space.available}</td>
        `;

        spacesTableBody.appendChild(newRow);
    });

    // Función para simular notificación de expiración de tiempo
    function notifyExpiration() {
        // Simulación de notificación
        alert('Tu tiempo de reserva está por expirar. ¿Deseas extenderla?');
    }

    // Simulación de notificación en 10 segundos (para demostración)
    setTimeout(notifyExpiration, 10000);
</script>

</body>
</html>
