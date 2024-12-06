<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Tabla de Multiplicar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f4;
        }
        h1 {
            margin-top: 20px;
            color: #333;
        }
        .form-container {
            margin-top: 20px;
        }
        form {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 400px;
            text-align: center;
            background-color: white;
            border: 1px solid #ccc;
        }
        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
        }
        table th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Generador de Tabla de Multiplicar</h1>
    <div class="form-container">
        <form method="POST">
            <input type="number" name="numero" placeholder="Ingrese un número" required>
            <button type="submit">Generar</button>
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero = intval($_POST['numero']);
        echo "<table>
                <thead>
                    <tr>
                        <th>Multiplicador</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>";
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr>
                    <td>$numero x $i</td>
                    <td>" . ($numero * $i) . "</td>
                  </tr>";
        }
        echo "</tbody></table>";
    }
    ?>
</body>
</html>
