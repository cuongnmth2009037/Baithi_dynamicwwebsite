<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Style/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="contener">
    <form  action="" method="post">
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Please enter name" id="name">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Please enter price" id="price">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder=" Please enter thumbnail" id="avatar">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" id="submit" >Submit</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#btn').click(function (){
            $.ajax({
                url: 'http://localhost:8000/api/product',
                method: 'POST',
                dataType: 'text',
                data: {
                    name: $('#name').val(),
                    price: $('#price').val(),
                    avatar: $('#avatar').val()
                },
                success: function (data) {
                    alert('Thêm mới sản phẩm thành công')
                    window.location.href = 'http://localhost:8000/'
                },
                error: function () {

                }
            })
        })

    })
</script>
<script src="Script/bootstrap.min.js"></script>
<script src="Script/jquery.min.js"></script>
</body>
</html>
