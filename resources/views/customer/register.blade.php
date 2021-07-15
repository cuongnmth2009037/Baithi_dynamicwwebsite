<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('Style/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container-fluid d-flex justify-content-center">
    <div class="col-3">
        <form action="{{route('success_register')}}" method="post">
            @csrf
            <h1 class="text-lg-center">Register</h1>
            <div class="form-group">
                <input name="name" class="form-control" type="text" placeholder="please enter name">
            </div>
            <div class="form-group">
                <input name="email" class="form-control" type="text" placeholder="please enter email">
            </div>
            <div class="form-group">
                <input name="birthday" class="form-control" type="date" placeholder="please enter birthday">
            </div>
            <div class="form-group">
                <input name="phone" class="form-control" type="text" placeholder="please enter phone">
            </div>
            <div class="form-group">
                <input name="address" class="form-control" type="text" placeholder="please enter address">
            </div>
            <div class="form-group">
                <button class="btn btn-primary text-lg-center">Register</button>
            </div>

        </form>
    </div>
</div>
</body>
</html>
