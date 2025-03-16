<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список Услуг:</title>
</head>
<body>
<div class="container mt-5">
    <h1>Список Услуг:</h1>
    <table border="services">
        <thead>
        <tr>
            <th>ID</th>
            <th>Цена</th>
            <th>Услуга</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->name }}</td>
            <td>{{ $service->price }}</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
