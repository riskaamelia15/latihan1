<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($dasis as $data)
        Id : {{ $data['id'] }} <br>
        Name : {{ $data['name'] }} <br>
        Username :{{ $data['username'] }} <br>
        Email : {{ $data['email'] }} <br>
        Alamat : {{ $data['alamat'] }} <br>
        Mata pelajaran :
        @foreach ($data['mapel'] as $mapel)
            <li>{{ $mapel }} <br></li>
        @endforeach
        <hr>
    @endforeach
</body>

</html>
