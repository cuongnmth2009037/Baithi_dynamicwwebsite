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
<h1>Event form</h1>
<form action="/admin/events" method="post">
    @csrf
    <div class="form-group">
        <input name="name" class="form-control" type="text">
    </div>
    <div class="form-group">
        <input name="description" class="form-control" type="text">
    </div>
    <div class="form-group">
        <input name="price" class="form-control" type="text">
    </div>
    <div class="form-group">
        <button>Submit</button>
    </div>
</form>
</body>
</html>
