<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список клиентов:</title>
</head>
<body>
<div class="container mt-5">
    <h1>Список клиентов:</h1>
    <table border="clients">
        <thead>
        <tr>
            <th>ID</th>
            <th>ФИО</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->fio }}</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
