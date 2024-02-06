<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
        @if($data)
        <h1>Thong tin sinh vien: {{$data->id}}</h1>
        <h3>{{$data->name}}</h3>
        <h3>{{$data->email}}</h3>
        <h3>{{$data->address}}</h3>
        <h3>{{$data->phone}}</h3>

        @else
            <h1>khong co du lieu!</h1>
        @endif
</body>
</html>