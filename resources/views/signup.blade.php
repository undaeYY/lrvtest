<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>
    <form  action="signup" method="post"> 
        @csrf
        @foreach ($errors->all() as $message )
        <span class="text-danger">{{ $message  }}</span>
        @endforeach
        <input type="text" name="email" placeholder="Email..."><br>

        <input type="password" name="pass" placeholder="Password..."><br>
        <input type="submit" name="name" value="Signup">
    </form>
</body>
</html>