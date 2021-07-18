<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>List event</h1>
<ul>
    @foreach($list as $items)
        <li>{{$items->name}}</li>
        <li>{{$items->description}}</li>
        <li>{{$items->price}}</li>
    @endforeach
</ul>
</body>
</html>
