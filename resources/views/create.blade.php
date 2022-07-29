<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/post-create" method="post">
        @csrf
        <input type="text" name="name" id=""> <br><br>
        @if($errors->has('name'))
            <div>
                {{$errors->first('name')}}
            </div>
        @endif
        <input type="text" name="age" id=""><br><br>
        <button type="submit">ok</button>
    </form>
</body>
</html>