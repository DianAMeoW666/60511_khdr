<!DOCTYPE html>
<html lang="en">
<head>
    <title>Список Сеансов:</title>
</head>
<body>
<div class="container mt-5">
    <h1>Список Сеансов:</h1>
    <table border="seance">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID клиента</th>
            <th>ID косметолога</th>
            <th>Дата и время начала сеанса</th>
            <th>Дата и время окончания сеанса</th>
        </tr>
        </thead>
        <tbody>
        @foreach($seances as $seance)
        <tr>
            <td>{{ $seance->id }}</td>
            <td>{{ $seance->client_id }}</td>
            <td>{{ $seance->cosmetologist_id}}</td>
            <td>{{ $seance->start_date_and_time}}</td>
            <td>{{ $seance->end_date_and_time }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
