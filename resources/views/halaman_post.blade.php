<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tes</h1>
    <table border="2">
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Content</th>
        </tr>
        <tr>
            @foreach ($post as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->tittle }}</td>
                <td>{{ $data->content }}</td>
            </tr>
            @endforeach
        </tr>
    </table>
</body>
</html>