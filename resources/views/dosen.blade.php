<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Dosen</title>
</head>

<body>
    @foreach ($query as $data)
        <h2>Data Dosen</h2>
        NIPD : {{ $data->nipd }} <br>
        Nama : {{ $data->nama }} <br>
        Alamat : {{ $data->alamat }}
        <hr>
    @endforeach
</body>

</html>
