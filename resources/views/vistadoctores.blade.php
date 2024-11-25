<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Medicinas</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Doctores</h1>
    <table>

        <thead>

            <tr>

                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Especialidad</th>

            </tr>

        </thead>
        
        <tbody>
            @foreach ($medicinas as $medicina)
            <tr>
                <td>{{ $medicina->MEDICINAS_ID }}</td>
                <td>{{ $medicina->CLAVE }}</td>
                <td>{{ $medicina->NOMBRE }}</td>
                <td>{{ $medicina->PRECIO }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
