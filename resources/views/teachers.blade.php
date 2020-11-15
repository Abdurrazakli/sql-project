<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<table style="width:100%">
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Adress</th>
        <th>Number of Students</th>
    </tr>
    @foreach($teachersData as $data)
    <tr>
        <td>{{$data -> name}}</td>
        <td>{{$data -> surname}}</td>
        <td>{{$data -> adress}}</td>
        <td>{{$data -> numberOfStudents}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
