<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Post</title>
</head>

<body>
    @foreach ($query as $item)
        <h2>{{ $item->title }}</h2>
        {{ $item->content }}
    @endforeach
</body>

</html>
