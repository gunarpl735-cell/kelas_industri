<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>mhun ieuteh data hobi</h1>
    @foreach($hobi as $nama)
    <li>{{$nama}}</li>
    @endforeach
</body>
</html>