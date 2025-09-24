<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <h1>Biodata</h1>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>nama lengkap</td>
            <td>jenis kelamin</td>
            <td>tanggal lahir</td>
            <td>tempat lahir</td>
            <td>agama</td>
            <td>alamat</td>
            <td>telepon</td>
            <td>email</td>
        </tr>
        @foreach ($biodata as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama_lengkap }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->tanggal_lahir }}</td>
                <td>{{ $data->tempat_lahir }}</td>
                <td>{{ $data->agama }}</td>
                 <td>{{ $data->alamat }}</td>
                <td>{{ $data->telepon }}</td>
                <td>{{ $data->email }}</td>
            </tr>
            @endforeach
    </table>
</center>
</body>
</html>