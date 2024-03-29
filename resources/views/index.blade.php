<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Index</title>
</head>
<body>
<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="get">
        <label for="email-input">Email:</label>
        <input id="email-input" type="email" placeholder="Nhập email cần kiểm tra" name="email" value="{{ request('email') }}">
        <input type="submit" value="Check">
    </form>
    @if(!empty(request('email')))
        Kết quả: {{ $check?'Đúng định dạng Email':'Sai định dạng Email' }}
    @endif
</div>

</body>
</html>
