<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <form method="post" action="{{url('update')}}">
        @foreach($errors->all() as $error)
            {{$error}}</br>
        @endforeach
        @csrf
        @if($data)
        <input type="text" name="name" placeholder="TEN SACH" value="{{$data->name}}"><br>
        <input type="text" name="email" placeholder="GIA SACH" value="{{$data->email}}"><br>
        <input type="text" name="address" placeholder="PHU KIEN" value="{{$data->address}}"><br>
        <input type="text" name="phone" placeholder="PHU KIEN" value="{{$data->phone}}"><br>
        <input type="submit" value="SAVE">
        @else
            <h1>khong co du lieu!</h1>
        @endif
    </form>
</body>
</html>