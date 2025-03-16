<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список косметологов:</title>
</head>
<body>
<div class="container mt-5">
    <h1>Список косметологов</h1>
    <table border="cosmetologists">
        <thead>
        <tr>
            <th>ID</th>
            <th>ФИО</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cosmetologists as $cosmetologist)
            <tr>
                <td>{{ $cosmetologist->id }}</td>
                <td>{{ $cosmetologist->fio}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
