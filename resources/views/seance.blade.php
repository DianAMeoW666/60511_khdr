<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список услуг сеанса:</title>
</head>
<body>
<div class="container mt-5">
    <h1>{{$seance ? "Список услуг сеанса:" .$seance->id : "неверный ID сеанса"}}</h1>
    @if($seance)
        <table border="services">
            <thead>
            <tr>
                <th>ID</th>
                <th>Услуга</th>
                <th>Цена</th>
            </tr>
            </thead>
            <tbody>
            @foreach($seance->services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->price}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
</body>
</html>
