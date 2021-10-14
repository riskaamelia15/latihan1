<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($posts as $data)
        Id : {{ $data['id'] }}
        Judul : {{ $data['title'] }}
        Content : <span>{{ $data['content'] }}</span>
        <hr>
    @endforeach
</body>

</html>
