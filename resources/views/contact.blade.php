<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
    <ul>
        @foreach ($tasks as $index => $task):
        <li> <a href = "contact/.{{'$task -> id}}">{{$task -> name}}</a></li>
        @endforeach

    </ul>
</body>
</html>
